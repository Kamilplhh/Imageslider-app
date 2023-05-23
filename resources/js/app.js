import '../css/app.css'; 
import "@fortawesome/fontawesome-free/css/all.css";
import $ from 'jquery';
window.$ = $;

const sunIcon = document.querySelector(".sun");
const moonIcon = document.querySelector(".moon");

const userTheme = localStorage.getItem("theme");
const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

const iconToggle = () => {
    moonIcon.classList.toggle("display-none");
    sunIcon.classList.toggle("display-none");
}

const themeCheck = () => {
    if (userTheme === "dark" || (!userTheme && systemTheme)) {
        document.documentElement.classList.add("dark");
        moonIcon.classList.add("display-none");
        return;
    }
    sunIcon.classList.add("display-none");
}

const themeSwitch = () => {
    if (document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("theme", "light");
        iconToggle();
        return;
    }
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
    iconToggle();
}

sunIcon.addEventListener("click", () => {
    themeSwitch();
});

moonIcon.addEventListener("click", () => {
    themeSwitch();
    display()
});

themeCheck();

const block = document.getElementById("second");

const description = document.getElementById("description");
const bordertop = document.getElementById("bordertop");
const author = document.getElementById("author");
const place = document.getElementById("place");
const discover = document.getElementById("discover");

function display() {
    block.classList.toggle("bg-center");
    setTimeout(function() {
        block.classList.remove("bg-center");
        block.classList.remove("bg-block");
        block.classList.toggle("bg-ON");

        description.classList.remove("description");
        description.classList.toggle("description-ON");

        bordertop.classList.remove("bordertop");
        bordertop.classList.toggle("bordertop-ON");

        author.classList.remove("author");
        author.classList.toggle("author-ON");
        
        place.classList.remove("place");
        place.classList.toggle("place-ON"); 

        discover.style.display = 'flex';
      }, 1000);
}
