var roles = document.querySelectorAll('.role')

var arrRole = [...roles]

for(var role of arrRole) {
    if(role.innerText === 'Admin') {
        role.classList.add('role--admin')
    } 
    if(role.innerText === 'Member') {
        role.classList.add('role--user')
    }
}
    
