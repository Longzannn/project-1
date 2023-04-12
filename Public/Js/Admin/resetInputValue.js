var inputs = document.querySelectorAll('.form-control')
var btnReset = document.querySelector('.btn-reset')

btnReset.onclick = () => {
    inputs.forEach(input => input.value = '')
}