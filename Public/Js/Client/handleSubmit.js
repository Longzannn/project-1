var listForm = document.querySelectorAll('.cart-form')
var updateBtn = document.querySelector('.update-cart')

updateBtn.onclick = () => {
    listForm.forEach(form => {
        form.submit()
    })
}