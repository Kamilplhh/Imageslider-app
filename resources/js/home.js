import '../css/program.css';

setInterval(
    function slider() {
        let block = document.querySelectorAll('.bg-block');
        let zero = document.getElementById('0');
        
        ui();

        block.forEach(block => {
            block.id = block.id - 1;
        });

        let last = document.getElementById('3');
        last.classList.remove("last");

        removezero(zero);

        insertAfter(last, zero);
        let full = document.getElementById('0');
  
        display(full);
    }, 6000);

function removezero(zero) {
    let descriptionON = zero.querySelector('#description');
    let bordertopON = zero.querySelector('#bordertop');
    let authorON = zero.querySelector('#author');
    let placeON = zero.querySelector('#place');
    let discoverON = zero.querySelector('#discover');

    zero.id = 4;
    zero.classList.toggle("last");

    zero.classList.toggle("bg-block");
    zero.classList.remove("bg-ON");

    descriptionON.classList.remove("description-ON");
    descriptionON.classList.toggle("description");

    bordertopON.classList.remove("bordertop-ON");
    bordertopON.classList.toggle("bordertop");

    authorON.classList.remove("author-ON");
    authorON.classList.toggle("author");

    placeON.classList.remove("place-ON");
    placeON.classList.toggle("place");

    discoverON.style.display = 'none';
}

function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

function display(full) {
    let description = full.querySelector('#description');
    let bordertop = full.querySelector('#bordertop');
    let author = full.querySelector('#author');
    let place = full.querySelector('#place');
    let discover = full.querySelector('#discover');

    full.classList.toggle("bg-center");
    setTimeout(function () {
        full.classList.remove("bg-center");
        full.classList.remove("bg-block");
        full.classList.toggle("bg-ON");

        description.classList.toggle("description-ON");
        description.classList.remove("description");

        bordertop.classList.toggle("bordertop-ON");
        bordertop.classList.remove("bordertop");

        author.classList.toggle("author-ON");
        author.classList.remove("author");

        place.classList.toggle("place-ON");
        place.classList.remove("place");

        discover.style.display = 'flex';
    }, 100);
}

let x = 1;
let y = 20;

function ui() {
    x++;
    y = y+20;
    if(x>5){
        x = 1;
        y = 20;
    }
    $("#text").html('0' + x);
    $('.line-progress').css('width',y + '%');
}
