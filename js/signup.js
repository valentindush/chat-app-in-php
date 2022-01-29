const form = document.querySelector('.signup form')
const continueBtn = form.querySelector('.button input')


let error = document.getElementById('error');

form.addEventListener("submit", (e) => {
    e.preventDefault()


})


continueBtn.addEventListener("click", () => {

 

    //FORM VALIDATE

    //AJAX JAVASCRIPT

    let xhr = new XMLHttpRequest()
    xhr.open("POST", "php/signup.php", true)
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response
              

                if(data == "success"){
                    location.href = "users.php"
                }else{
                    error.textContent = data;
                    error.style.display = "block"
                }
            }
        }
    }

    let formData = new FormData(form)

    xhr.send(formData)

})