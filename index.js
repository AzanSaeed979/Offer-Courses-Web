const searchIcon = document.getElementById("search");
const div = document.getElementById("showsearchbar");
let input = null;

searchIcon.onclick = function () {
    if (!input) {
        input = document.createElement("input");
        input.placeholder = `Search Your desired Course`;
        input.style.padding = "10px";
        input.style.border = "1px solid #ccc";
        input.style.borderRadius = "5px";
        input.style.width = "100%";
        div.appendChild(input);
        input.focus();
    } else {
        div.removeChild(input);
        input = null;
    }
};

const hamburger = document.getElementById("hamburger");
const navbar = document.getElementsByClassName("nav-bar");

hamburger.addEventListener("click", () => {
  navbar.classList.toggle("show");
});
