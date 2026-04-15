/*

Web
– Bildschirm irgendwie ganz füllen –> Raster grid oder flex

Mobile
– slideshow on click && on slide: bild darüberschieben

– Links zu meiner Seite, Links zum Projekt direkt

– Responsiv click etc
– Titel lesbar? In einen Button?
– OnLoad Gif like durchgehen
– Weitere Buttons und Links zur website

– Beschriebe??

*/

//Buttons
const projectButtons = document.querySelectorAll(".buttonContainer button");

//Images
const genreImageContainer = document.querySelectorAll(".genreImageContainer");
const imageContainers = document.querySelectorAll(".imageBox");

let imageContainerSize = imageContainers[0].getBoundingClientRect().width;

let margin = 25;

//Random Number
function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

let lastButton = -1;

//Buttons
projectButtons.forEach((button, index) => {
    button.addEventListener("mouseover", function () {
        if (lastButton == -1) {
            button.classList.toggle("buttonBlackB");
            button.classList.toggle("buttonWhiteA");
            genreImageContainer[index].style.display = genreImageContainer[index].style.display === "block" ? "none" : "block";
            lastButton = index;
        } else {
            projectButtons[lastButton].classList.toggle("buttonBlackB");
            projectButtons[lastButton].classList.toggle("buttonWhiteA");
            genreImageContainer[lastButton].style.display = "none";
            projectButtons[index].classList.toggle("buttonBlackB");
            projectButtons[index].classList.toggle("buttonWhiteA");   
            lastButton = index;
            genreImageContainer[index].style.display = genreImageContainer[index].style.display === "block" ? "none" : "block";
        }
    });
});

//Images

//setImages

genreImageContainer.forEach(genre => {
    boxArray = Array.from(genre.children);
    zOrder = boxArray.length;
    boxArray.forEach(box => {
        box.style.zIndex = zOrder;
        zOrder--;
    });
    genre.style.display = "none";
});

let imageOffsetX;
let imageOffsetY;

if (window.innerWidth > 900) {
    imageContainers.forEach(image => {
        imageOffsetX = getRandomArbitrary(0, window.innerWidth - imageContainerSize);
        imageOffsetY = getRandomArbitrary(0, window.innerHeight - imageContainerSize);
        image.style.left = imageOffsetX + "px";
        image.style.top = imageOffsetY + "px";
    });
} else {

}