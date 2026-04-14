const projectButtons = document.querySelectorAll(".buttonContainer button");

projectButtons.forEach(button => {
    button.addEventListener("mouseover", function () {
        button.classList.toggle("buttonBlackB");
        button.classList.toggle("buttonWhiteA");
    });
});

