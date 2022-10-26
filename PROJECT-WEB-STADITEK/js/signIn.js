function func_in() {
    const username = document.querySelector('#inp_username').value;
    const pass = document.querySelector('#inp_pass').value;

    let user = localStorage.getItem('dt_username');
    let user_pass = localStorage.getItem('dt_pass');

    localStorage.setItem('user_log', username);

    if (username == user && pass == user_pass) {
        alert("Login Anda Berhasil");
        window.location.href = "index-awal.html";
    }
    else if(username == '' && pass == ''){
        alert("Masukin Dulu Usernamemu sama Passwordmu")
    }
    else {
        alert("Coba Cek Username Dan Password Mu pasti ada Yang salah")
        window.location.href = "index-signIn.html";
    }
}