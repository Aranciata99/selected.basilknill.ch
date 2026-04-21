
/* 

Weiter

– Alle Bilder aller Projekte -> Azadi
– Desktop hover auf Bild
– fallback from basilknill.ch/pages
– CV PDF
– Links Testen

Zusatz / Fehler

– Besser dass es rechts nicht black wird?
– Weisse Rand unten bei Bilder Mobile
– Wenn ganz gesrollt automatisch neues aufklappen

*/


//Buttons
const projectButtons = document.querySelectorAll(".buttonContainer button");
const projectButtonsContainer = document.querySelectorAll(".buttonContainer");
const infoButton = document.querySelectorAll(".infoButton button");

const header = document.getElementById("header");


//Images
const genreImageContainer = document.querySelectorAll(".genreImageContainer");
const imageContainers = document.querySelectorAll(".imageBox");

let imageContainerWidth = imageContainers[0].getBoundingClientRect().width;
let imageContainerHeight = imageContainers[0].getBoundingClientRect().height;
let marginCoverlayout;
let displayStyle = "block";

//Sizes 
let projectAmmounts = genreImageContainer.length;
let squisedSize;
let closedSize;
let activeSize;

//Random Number
function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

//Status
let showAll = true;
let ableScroll = false;

//setup Image Layout

if (window.innerWidth > 900) {
    setupDesktop();
} else {
    setupMobile();
}

function setupDesktop() {
    marginCoverlayout = 5;
    squisedSize = 50;
    closedSize = window.innerWidth / projectAmmounts - marginCoverlayout + 1;
    activeSize = window.innerWidth - squisedSize * (projectAmmounts - 0.3);

    genreImageContainer.forEach((container, i) => {
        container.style.overflow = "hidden"; //ACHTUNG MOBILE!
        container.scrollTo({
            left: 0,
        });
        container.style.width = closedSize + "px";
        boxArray = Array.from(container.children);
        boxArray.forEach((box, index) => {
            if (index != 0) {
                box.style.top = getRandomArbitrary(-18, -2) + "%";
            }
        });
        projectButtonsContainer.forEach(btnBox => {
            btnBox.style.top = 25 + "px";
            //btnBox.style.bottom = 25 + "px";
            btnBox.style.opacity = 0;
        });
    });
}

function setupMobile() {
    marginCoverlayout = 3;
    squisedSize = 30;
    closedSize = window.innerHeight / projectAmmounts - marginCoverlayout + 1;
    activeSize = window.innerHeight - squisedSize * (projectAmmounts - 0.3);

    genreImageContainer.forEach((container, i) => {
        container.style.overflow = "hidden";
        container.scrollTo({
            top: 0,
        });
        container.style.height = closedSize + "px";
        boxArray = Array.from(container.children);
        boxArray.forEach((box, index) => {
            if (index != 0) {
                box.style.right = getRandomArbitrary(-2, -18) + "%";
            }
        });

        let btnHeight = 17;

        projectButtonsContainer.forEach(btnBox => {
            btnBox.style.top = btnHeight + "px";
            btnBox.style.display = "none";
            btnBox.style.opacity = 0;
            btnHeight += squisedSize + marginCoverlayout;

        });
    });
}



//Inputs

genreImageContainer.forEach((container, i) => {
    container.addEventListener("click", function () {

        //console.log(container.getBoundingClientRect().height);

        if (container.getBoundingClientRect().height >= activeSize - 1 && window.innerWidth < 900) {
            showAll = false;
        } else if (container.getBoundingClientRect().width >= activeSize - 1 && window.innerWidth > 900) {
            showAll = false;
        }

        if (!showAll) {

            showAll = true;
            ableScroll = false;

            header.style.opacity = 1;
            header.style.pointerEvents = "all";

            genreImageContainer.forEach((container, c) => {
                if (window.innerWidth > 900) {
                    container.scrollTo({
                        left: 0,
                        behavior: "smooth"
                    });
                    container.style.width = closedSize + "px";
                } else {
                    container.style.height = closedSize + "px";
                    container.scrollTo({
                        top: 0,
                        behavior: "smooth"
                    });
                    setTimeout(() => {
                        container.style.overflow = "hidden";
                    }, 500);
                    let box = Array.from(container.children);
                    box[0].style.height = 100 + "%";
                }
                setTimeout(() => {
                    projectButtonsContainer[i].style.display = "none";
                }, 500);
                projectButtonsContainer[i].style.opacity = 0;
            });

        } else {

            ableScroll = true;

            header.style.opacity = 0;
            header.style.pointerEvents = "none";

            genreImageContainer.forEach((container, c) => {
                if (c != i) {
                    if (window.innerWidth > 900) {
                        container.scrollTo({
                            left: 0,
                            behavior: "smooth"
                        });
                        projectButtonsContainer[c].style.opacity = 0;
                        setTimeout(() => {
                            projectButtonsContainer[c].style.display = "none";
                            container.style.overflow = "hidden";
                        }, 500);
                        container.style.width = squisedSize + "px";
                    } else {
                        container.scrollTo({
                            top: 0,
                            behavior: "smooth"
                        });
                        projectButtonsContainer[c].style.opacity = 0;
                        setTimeout(() => {
                            projectButtonsContainer[c].style.display = "none";
                        }, 500);
                        container.style.height = squisedSize + "px";
                        let box = Array.from(container.children);
                        box[0].style.height = 100 + "%";
                    }
                } else {
                    projectButtonsContainer[i].style.opacity = 1;
                    projectButtonsContainer[i].style.display = "block";
                    container.style.overflow = "auto";
                }
            });
            if (window.innerWidth > 900) {
                container.style.width = activeSize + "px";
                //infoButton[i].style.left = (activeSize / 2) + (squisedSize * i) + "px";
            } else {
                container.style.height = activeSize + "px";
                let box = Array.from(container.children);
                box[0].style.height = "auto";
                //infoButton[i].style.right = 40 + "px";
            }

            container.addEventListener("wheel", function (event) {
                if (window.innerWidth > 900) {
                    handleScroll(event, i);
                }
            });
        }
    });

    //Horizontal scroll

    function handleScroll(event, i) {
        event.preventDefault();
        if (window.innerWidth >= 900 && ableScroll) {
            genreImageContainer[i].scrollLeft += event.deltaY + event.deltaX;
        }
    }

});

window.addEventListener("resize", () => {

    if (window.innerWidth > 900) {
        setupDesktop();
    } else {
        setupMobile();
        window.location.reload();
    }
});