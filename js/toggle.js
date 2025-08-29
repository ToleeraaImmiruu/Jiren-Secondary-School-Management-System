
const toggle = document.querySelector("#toggle");
const menu = document.querySelector(".menu");
const list = document.querySelectorAll(".list");

toggle.addEventListener("click", function() {
    list.forEach(item => {
        if (getComputedStyle(item).display === "none") {
            item.style.display = "inline-block"; 
            item.style.height = "auto"; 
            window.location.reload();
        } else {
            item.style.height = "0px"; // Collapse smoothly
            setTimeout(() => item.style.display = "none", 500); 
            menu.style.width = "fit-content"; 
        }
    });

});
