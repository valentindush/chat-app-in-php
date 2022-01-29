const passwordField = document.querySelector(".form .field input[type = 'password'] ")
const passToggleBtn = document.querySelector('.form .field i')


passToggleBtn.addEventListener("click", () => {
    if(passwordField.type == "password"){
        passwordField.type = "text"
        passToggleBtn.classList.add('active')
    }else{
        passwordField.type = "password"
        passToggleBtn.classList.remove('active')
    }
})



