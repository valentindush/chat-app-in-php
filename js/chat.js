const form = document.querySelector(".typing-area");
const msgField = document.querySelector(".msg-field")
const sendBtn = document.querySelector("button")
const chatbox = document.querySelector(".chat-box")


form.addEventListener("submit", (e) => {
    e.preventDefault()


})

chatbox.onmouseenter = ()=>{
    chatbox.classList.add("active")
}
chatbox.onmouseleave = ()=>{
    chatbox.classList.remove("active")
}


sendBtn.addEventListener('click', ()=>{


    let xhr = new XMLHttpRequest()
    xhr.open("POST", "php/sendMsg.php", true)
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                msgField.value = ""
                scrollToBottom();
            }
        }
    }

    let formData = new FormData(form)
    xhr.send(formData)
})


setInterval(()=>{
    let xhr = new  XMLHttpRequest()
    xhr.open("POST", "php/getMsg.php", true)
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response

                chatbox.innerHTML = data;
                if(!chatbox.classList.contains("active")){
                    scrollToBottom();
                }
                
            }
        }
    }

    
    let formData = new FormData(form)
    xhr.send(formData)
}, 500)



function scrollToBottom(){
    chatbox.scrollTop = chatbox.scrollHeight;
  }


