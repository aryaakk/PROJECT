function func_up() {
    const nama = document.querySelector('#inp_nama').value
    const email = document.querySelector('#inp_email').value
    const username = document.querySelector('#inp_username').value
    const pass = document.querySelector('#inp_pass').value
    const conpass = document.querySelector('#inp_conpass').value

    
    localStorage.setItem('dt_nama', nama)
    localStorage.setItem('dt_email', email)
    localStorage.setItem('dt_username', username)
    localStorage.setItem('dt_pass', pass)
    localStorage.setItem('dt_conpass', conpass)
    
    if(conpass != pass){
        alert("Password Anda Tidak Sama")
        window.location.href = "index-signUp.html"
    }
    else if(nama == '' || username == '' || pass == '' || email == '' || conpass == ''){
        alert("Silahkan Lengkapi Form Anda(Haruss)")
    }
    else{
        alert("Register Berhasill")
        window.location.href ="index-signIn.html"
    }
}