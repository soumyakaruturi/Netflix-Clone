const arrows = document.querySelectorAll(".arrow");

const movielists = document.querySelectorAll(".movies-list");

arrows.forEach((arrow, i) => {
    const itemNumber = movielists[i].querySelectorAll("img").length;
    let clickCounter = 0;

    arrow.addEventListener("click", () => {
        clickCounter++;
        if (itemNumber - (5 + clickCounter) >= 0) {
            movielists[i].style.transform = `translateX(${
            movielists[i].computedStyleMap().get("transform")[0].x.value - 285
        }px)`;
        }else {
        movielists[i].style.transform = "translateX(0)";
        clickCounter = 0;
        }
        });

    console.log(movielists[i].querySelectorAll("img").length);
});


let profilemenu = document.getElementById("ProfileMenu")

function  openprofile(){
    profilemenu.classList.toggle("open-menu");
}