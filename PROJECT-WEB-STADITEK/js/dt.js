const userr = localStorage.getItem('user_log');
const logout = document.querySelector('#logout');
const join = document.querySelector('#join');




// if(userr)

console.log(userr);
if (userr != null){
    join.style = 'display: none;'
    logout.style = 'display: content;'
}
else {
    logout.style =  'display: none'
}


logout.addEventListener("click", function(){
    localStorage.removeItem('user_log')
    join.style = 'display: content;'
    logout.style ='display:none;'
    location.reload()
    alert("Yakin Mau Keluarr")
})