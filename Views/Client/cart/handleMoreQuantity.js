var listInput = document.querySelectorAll('.product-quantity input')
var plusBtns = document.querySelectorAll('.plus')
var minusBtns = document.querySelectorAll('.minus')

plusBtns.forEach((plus, index) => {
    plus.onclick = () => {
        const input = listInput[index]
        let value = Number(input.getAttribute('value'))
        value++
        input.setAttribute('value', value)
        input.value = value
    }
})

minusBtns.forEach((minus, index) => {
    minus.onclick = () => {
        const input = listInput[index]
        let value = Number(input.getAttribute('value'))
        value--
        input.setAttribute('value', value)
        input.value = value
    }
})

listInput.forEach(input => {
    input.onblur = () => {
        input.setAttribute('value', input.value)
    }
})
