const cover = document.querySelector('.cover')

cover.addEventListener('mousemove', (e) => {
    const mainImg = document.querySelector('.main-img')
    const image = document.querySelector('.main-img img')

    image.style = "width: 200%;height: 200%;"

    let imageWidth = image.offsetWidth
    let imageHeight = image.offsetHeight
    const mainImgWidth = mainImg.offsetWidth
    const mainImgHeight = mainImg.offsetHeight

    const spaceX = (imageWidth / 2 - mainImgWidth) * 2
    const spaceY = (imageHeight / 2 - mainImgHeight) * 2
    imageWidth = imageWidth + spaceX
    imageHeight = imageHeight + spaceY

    let x = e.pageX - mainImg.offsetParent?.offsetLeft - mainImg.offsetLeft
    let y = e.pageY - mainImg.offsetParent?.offsetTop - mainImg.offsetTop
    const positionX = (imageWidth /mainImgWidth / 2) * x;
    const positionY = (imageHeight /mainImgHeight / 2) * y;

    image.style = `left: ${positionX}px;top: ${positionY}px;width: 200%;height: 200%;tranform: none`
})

cover.addEventListener('mouseleave', () => {
    const image = document.querySelector('.main-img img')
    image.style = ``
})