//Buttons
const projectButtons = document.querySelectorAll(".buttonContainer button");

//Images
const genreImageContainer = document.querySelectorAll(".genreImageContainer");
const imageContainers = document.querySelectorAll(".imageBox");

let imageContainerWidth = imageContainers[0].getBoundingClientRect().width;
let imageContainerHeight = imageContainers[0].getBoundingClientRect().height;
let margin = 25;
let displayStyle = "block";

//Sizes 
let projectAmmounts = 8; //Dynamisch !
closedSize = window.innerWidth / projectAmmounts
squisedSize = 50;
activeSize = window.innerWidth - squisedSize * (projectAmmounts - 1);

//Random Number
function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

//Setup

genreImageContainer.forEach((container, index) => {
    container.style.width = closedSize + "px";
});



let lastButton = -1;

//Buttons
// projectButtons.forEach((button, index) => {
//     button.addEventListener("mouseover", function () {
//         // if (lastButton == -1) {
//         //     button.classList.toggle("buttonBlackB");
//         //     button.classList.toggle("buttonWhiteA");
//         //     genreImageContainer[index].style.display = genreImageContainer[index].style.display === displayStyle ? "none" : displayStyle;
//         //     lastButton = index;
//         // } else {
//         //     projectButtons[lastButton].classList.toggle("buttonBlackB");
//         //     projectButtons[lastButton].classList.toggle("buttonWhiteA");
//         //     genreImageContainer[lastButton].style.display = "none";
//         //     projectButtons[index].classList.toggle("buttonBlackB");
//         //     projectButtons[index].classList.toggle("buttonWhiteA");
//         //     lastButton = index;
//         //     genreImageContainer[index].style.display = genreImageContainer[index].style.display === displayStyle ? "none" : displayStyle;
//         // }
//     });
// });

//Images

//setImages

genreImageContainer.forEach((container, i) => {
    container.style.width = closedSize + "px";
    container.addEventListener("click", function () {
        container.style.width = activeSize + "px";
        genreImageContainer.forEach((container, c) => {
            if (c != i) {
                container.style.width = squisedSize + "px";
            }
        });
        container.style.width = activeSize + "px";
    });

});

// genreImageContainer.forEach(genre => {
// boxArray = Array.from(genre.children);
// zOrder = boxArray.length;
// boxArray.forEach(box => {
//     box.style.zIndex = zOrder;
//     zOrder--;
// });
// genre.style.display = "none";
// });

genreImageContainer.forEach

let imageOffsetX;
let imageOffsetY;
let coverImage;

if (window.innerWidth > 900) {
    genreImageContainer.forEach(genre => {
        boxArray = Array.from(genre.children);
        // boxArray.forEach((box, index) => {
        //     if (index != 0) {
        //         imageWidth = box.getBoundingClientRect().width;
        //         imageHeight = box.getBoundingClientRect().height;
        //         imageOffsetX = getRandomArbitrary(300, window.innerWidth/2);
        //         imageOffsetY = getRandomArbitrary(100, window.innerHeight - 100);
        //         box.style.left = imageOffsetX + "px";
        //         box.style.top = imageOffsetY + "px";
        //     }
        // });
    });
} else {

}