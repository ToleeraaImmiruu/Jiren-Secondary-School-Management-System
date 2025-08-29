
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("toggle-add").addEventListener("click", function (e) {
    e.preventDefault();
    const submenu = document.getElementById("user-submenus");
    const chevron = document.getElementById("users-chevron");
    const menu=document.querySelector(".menu");

    const submenu_other =  document.getElementById("user-submenu");
    const chevron_other = document.getElementById("user-chevron");

    const submenu_other_2 =  document.getElementById("announcement-submenus");
    const chevron_other_2 = document.getElementById("announce-chevron");

    const submenu_other_3 =document.getElementById("manage-submenus");
    const chevron_other_3 =document.getElementById("manage-chevron");

    if (submenu_other.style.display === "block") {
      submenu_other.style.display = "none";
      chevron_other.classList.remove("rotate-user");
    }
    
    if (submenu_other_2.style.display === "block") {
      submenu_other_2.style.display = "none";
      chevron_other_2.classList.remove("rotate-announce");
    }
    if (submenu_other_3.style.display === "block") {
      submenu_other_3.style.display = "none";
      chevron_other_3.classList.remove("rotate-manage");
    }

    if (submenu.style.display === "block") {
      submenu.style.display = "none";
      chevron.classList.remove("rotate-add");
    } else {
      submenu.style.display = "block";
      chevron.classList.add("rotate-add");
      menu.style.gap="35px";
    }
 
  });
});



