// const form = document.getElementById("inp_pendek")

// form.addEventListener("click", (e) =>{
//     e.preventDefault()
//     // form.style.borderRadius='30px';
//     // form.style.backgroundColor='black';
// });

const submit = document.getElementById("submit")

submit.addEventListener("click", (e) => {
    e.preventDefault();
    alert("Pesan Anda Telah Dikirimkan")
})

window.addEventListener("scroll", () => {
    document.querySelector("nav").classList.toggle("window-scroll", window.scrollY > 0);
})



// connect to local save form login


