document.addEventListener("DOMContentLoaded", function() {
    var photos = document.querySelectorAll(".photo");
    var popup = document.querySelector("#popup");

    photos.forEach(function(photo) {
        photo.addEventListener("click", function() {
            popup.style.display = "flex";
            popup.src = photo.src; 
            popup.setAttribute("title", "Click for original view");
        });
    });

    popup.addEventListener("click", function(e) {
        if (e.target === popup) {
            popup.style.display = "none";
        }
    });
});

