
/* 

Generell

– Links zu seiten

Desktop

– Besser  dass es rechts nicht black wird
– Info Button:
    – container.getBoundingClientRect.right);
– ProjectInfo?

Mobile

– Responsive

Generell

– Links testen + fallback from basilknill.ch/pages


*/


//Buttons
const projectButtons = document.querySelectorAll(".buttonContainer button");
const projectButtonsContainer = document.querySelectorAll(".buttonContainer");

//console.log(infoButton);


//Images
const genreImageContainer = document.querySelectorAll(".genreImageContainer");
const imageContainers = document.querySelectorAll(".imageBox");

let imageContainerWidth = imageContainers[0].getBoundingClientRect().width;
let imageContainerHeight = imageContainers[0].getBoundingClientRect().height;
let marginCoverlayout = 5;
let displayStyle = "block";

//Sizes 
let projectAmmounts = genreImageContainer.length;
closedSize = window.innerWidth / projectAmmounts - marginCoverlayout + 1;
squisedSize = 50;
activeSize = window.innerWidth - squisedSize * (projectAmmounts - 0.3);

//Random Number
function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

//Status
let showAll = true;

//setup Image Layout

genreImageContainer.forEach((container, i) => {
    container.style.overflow = "hidden"; //ACHTUNG MOBILE!
    container.style.width = closedSize + "px";
    boxArray = Array.from(container.children);
    boxArray.forEach((box, index) => {
        if (index != 0) {
            box.style.top = getRandomArbitrary(-18, -2) + "%";
        }
    });
    projectButtonsContainer.forEach(btnBox => {
        btnBox.style.top = "auto";
        btnBox.style.bottom = 25 + "px";
    });

});

//Inputs

genreImageContainer.forEach((container, i) => {
    container.addEventListener("mouseover", function () {
        if (!showAll) {
            genreImageContainer.forEach((container, c) => {
                if (c != i) {
                    const infoBtn = document.getElementById("infoButton" + c);
                    infoBtn.style.display = "none";
                    container.style.width = squisedSize + "px";
                    container.scrollTo({
                        left: 0,
                        behavior: "smooth"
                    });
                }
            });
            container.style.width = activeSize + "px";
            const infoBtn = document.getElementById("infoButton" + i);
            infoBtn.style.display = "inline-block";

            container.addEventListener("wheel", function (event) {
                handleScroll(event, i);
            });
        }
    });

    container.addEventListener("mouseleave", function () {
        if (showAll) {
            showAll = false;
        }
    });

    container.addEventListener("click", function () {
        if (!showAll) {
            showAll = true;
            genreImageContainer.forEach((container, c) => {
                container.style.width = closedSize + "px";
                const infoBtn = document.getElementById("infoButton" + c);
                infoBtn.style.display = "none";
            });
        } else {
            showAll = false;
            genreImageContainer.forEach((container, c) => {
                if (c != i) {
                    container.scrollTo({
                        left: 0,
                        behavior: "smooth"
                    });
                    container.style.width = squisedSize + "px";
                    const infoBtn = document.getElementById("infoButton" + i);
                    infoBtn.style.display = "inline-block";
                }
            });
            container.style.width = activeSize + "px";
        }
    });

    //Horizontal scroll

    function handleScroll(event, i) {
        event.preventDefault();
        if (window.innerWidth >= 900 && !showAll) {
            genreImageContainer[i].scrollLeft += event.deltaY + event.deltaX;
        }
    }


    // container.addEventListener("click", function () {
    //     if (container.style.width == activeSize + "px") {
    //         genreImageContainer.forEach((container, c) => {
    //             container.style.width = closedSize + "px";
    //         });
    //     } else {
    //         genreImageContainer.forEach((container, c) => {
    //             if (c != i) {
    //                 container.style.width = squisedSize + "px";
    //             }
    //         });
    //         container.style.width = activeSize + "px";
    //     }
    // });

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