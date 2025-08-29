
document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("#signupForm");
    const fullnameInput = document.querySelector("#fullname");
    const usernameInput = document.querySelector("#username");
    const emailInput = document.querySelector("#email");
    const passwordInput = document.querySelector("#password");
    const cpasswordInput = document.querySelector("#cpassword");
    const roleInput = document.querySelector("#role");
    const imageInput = document.querySelector("#image");
    const clear= document.querySelector("#clear");

    clear.addEventListener("click", function(){
        window.location.reload();
    })

    let typingTimer;
    const typingDelay = 500; // Adjust delay as needed

    // Attach typing delay validation for each input
    fullnameInput.addEventListener("input", () => handleTyping(validateFullname));
    usernameInput.addEventListener("input", () => handleTyping(validateUsername));
    emailInput.addEventListener("input", () => handleTyping(validateEmail));
    passwordInput.addEventListener("input", () => handleTyping(validatePassword));
    cpasswordInput.addEventListener("input", () => handleTyping(validateCPassword));
    roleInput.addEventListener("input", () => handleTyping(validateRole));
    imageInput.addEventListener("input", () => handleTyping(validateImage));

    function handleTyping(validationFunction) {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(validationFunction, typingDelay);
    }

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent default submission

        validateFullname();
        validateUsername();
        validateEmail();
        validatePassword();
        validateCPassword();
        validateImage();

        if (isFormValid()) {
            form.submit(); // Submit the form when all fields are valid
        }
    });

    function validateFullname() {
        const fullname = fullnameInput.value.trim().toLowerCase();
        const pfname = document.querySelector("#fname");
        const ifname = document.querySelector("#ifname");
        const name_format = /^[a-zA-Z_]+ *[a-zA-Z]*$/;

        if (!fullname) {
            showError(pfname, ifname, "Fullname cannot be empty!");
        } else if (!fullname.match(name_format)) {
            showError(pfname, ifname, "Invalid fullname format!");
        } else {
            showSuccess(pfname, ifname);
        }
    }

    function validateUsername() {
        const username = usernameInput.value.trim().toLowerCase();
        const puname = document.querySelector("#uname");
        const iuname = document.querySelector("#iuname");
        const username_format = /^\w+$/;

        if (!username) {
            showError(puname, iuname, "Username cannot be empty!");
        } else if (!username.match(username_format)) {
            showError(puname, iuname, "Invalid username format!");
        } else {
            showSuccess(puname, iuname);
        }
    }

    function validateEmail() {
        const email = emailInput.value.trim();
        const pemail = document.querySelector("#pemail");
        const iemail = document.querySelector("#iemail");
        const email_format = /^[A-Za-z_]+[0-9]*@[A-Za-z]+\.com/i;

        if (!email) {
            showError(pemail, iemail, "Email cannot be empty!");
        } else if (!email.match(email_format)) {
            showError(pemail, iemail, "Invalid email format!");
        } else {
            showSuccess(pemail, iemail);
        }
    }

    function validatePassword() {
        const password = passwordInput.value.trim();
        const ppass = document.querySelector("#pass");
        const ipass = document.querySelector("#ipass");

        if (!password) {
            showError(ppass, ipass, "Password cannot be empty!");
        } else {
            showSuccess(ppass, ipass);
        }
    }

    function validateCPassword() {
        const password = passwordInput.value.trim();
        const cpassword = cpasswordInput.value.trim();
        const pcpass = document.querySelector("#cpass");
        const icpass = document.querySelector("#icpass");

        if (!cpassword) {
            showError(pcpass, icpass, "Confirm password cannot be empty!");
        } else if (password !== cpassword) {
            showError(pcpass, icpass, "Passwords do not match!");
        } else {
            showSuccess(pcpass, icpass);
        }
    }


    function validateImage() {
        const image = imageInput.value;
        const pimage = document.querySelector("#pimage");
        const iimage = document.querySelector("#iimage");

        if (!image) {
            showError(pimage, iimage, "Image cannot be empty!");
        } else {
            showSuccess(pimage, iimage);
        }
    }

    function showSuccess(para, image) {
        para.textContent = "correct";
        para.style.visibility = "hidden";
        para.classList.remove("error-active");
        image.setAttribute("src", "../images/check.svg");
        image.style.visibility = "visible";
    }

    function showError(para, image, text) {
        para.textContent = text;
        para.style.visibility = "visible";
        para.classList.add("para");
        para.classList.add("error-active");
        image.setAttribute("src", "../images/x.svg");
        image.style.visibility = "visible";
    }

    function isFormValid() {
        return document.querySelectorAll(".error-active").length === 0; // Ensures no errors exist
    }
    
});







