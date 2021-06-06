
let toggle = document.querySelector(".toggle");
let body = document.querySelector("body");
toggle.addEventListener("click", () => {
    toggle.classList.toggle("cross");
    body.classList.toggle("menushow");
});

