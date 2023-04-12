var productImages = document.querySelectorAll('.product-image img');

productImages.forEach((productImage) => {
    var newSrc = productImage.getAttribute('newSrc');
    var oldSrc = productImage.getAttribute('oldSrc');
    var timeShow = null;
    
    productImage.addEventListener('mouseover', () => {
        timeShow = setTimeout(() => {
            productImage.src = newSrc;
        }, 200);
    });

    productImage.addEventListener('mouseout', () => {
        clearTimeout(timeShow);
        productImage.src = oldSrc;
    });
});
