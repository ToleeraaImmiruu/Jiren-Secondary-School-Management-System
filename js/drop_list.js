
  document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("toggle-users");
    const submenu = document.getElementById("user-submenu");
    const chevron = document.getElementById("user-chevron");
    const menu=document.querySelector(".menu");


    const submenu_other = document.getElementById("user-submenus");
    const chevron_other = document.getElementById("users-chevron");

    const submenu_other_2 =  document.getElementById("announcement-submenus");
    const chevron_other_2 = document.getElementById("announce-chevron");

    const submenu_other_3 =document.getElementById("manage-submenus");
    const chevron_other_3 =document.getElementById("manage-chevron");

    toggle.onclick = function (e) {
      e.preventDefault();
      if (submenu_other.style.display === "block") {
        submenu_other.style.display = "none";
        chevron_other.classList.remove("rotate-add");
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
        chevron.classList.remove("rotate-user");
      } else {
        submenu.style.display = "block";
        chevron.classList.add("rotate-user");
        menu.style.gap="35px";
      }
    
    };
  });

