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
});

themeCheck();



function slider() {
    let block = document.querySelectorAll('.bg-block');
    let zero = document.getElementById('0');

    block.forEach(block => {
        block.id = block.id - 1;
        console.log(block);
    });

    let last = document.getElementById('3');
    last.classList.remove("last");

    removezero(zero);

    last.insertBefore(zero);
    let full = document.getElementById('0');

    display(full);
    
}

slider();

function removezero(zero) {
    let description = full.querySelector('#description-ON');
    let bordertop = document.getElementById('#bordertop-ON');
    let author = document.getElementById('#author-ON');
    let place = document.getElementById('#place-ON');
    let discover = document.getElementById('#discover-ON');

    zero.id = 4;
    zero.classList.toggle("last");
}

function display(full) {
    let description = full.querySelector('#description');
    let bordertop = document.getElementById('#bordertop');
    let author = document.getElementById('#author');
    let place = document.getElementById('#place');
    let discover = document.getElementById('#discover');

    full.classList.toggle("bg-center");
    setTimeout(function () {
        full.classList.remove("bg-center");
        full.classList.remove("bg-block");
        full.classList.toggle("bg-ON");

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
