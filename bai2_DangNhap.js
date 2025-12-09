function login(){
    const username = document.getElementById('username').value.trim();
    const pass = document.getElementById('password').value.trim();
    const message = document.getElementById('message');

    if(username =="" || pass ==""){
        message.textContent = "Vui lòng nhập đầy đủ username và password!";
        message.style.color = "red";
    } else{
        message.textContent = "Đăng nhập thành công!";
        message.style.color = "green";
    }
}

window.onload = function(){
    const btnLogin = this.document.getElementById("btnLogin");
    if(btnLogin){
        btnLogin.addEventListener('click', function(){
            login();
        });
    } else {
        console.error("Lỗi!")
    }
}