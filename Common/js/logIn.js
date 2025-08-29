// const form = document.querySelector("#loginForm");
// form.addEventListener("submit",  function(e){
// e.preventDefault();
// formValidation();
// })
// function formValidation(){
// let is_valid = true;


// let username = document.querySelector("#username").value.trim().toLowerCase();
// let email = document.querySelector("#email").value.trim().toLowerCase();
// const password = document.querySelector("#password").value.trim();


// document.querySelector("#username").value = username;
// document.querySelector("#email").value = email;


// let uname=document.querySelector("#uname");
// let pemail=document.querySelector("#pemail");
// let pass=document.querySelector("#pass");

// let empty = "cannot be empty!";
// let invalidEmail = "Invalid email!";

// let reg_num=/[A-Za-z]+/;
// let reg_letter=/^[A-Za-z]+/;
// let regEx=/^[A-Za-z_]+[0-9]*@[A-Za-z]+\.com/;

// if(username===""){
// showError(uname, "Username "+empty);
// is_valid= false;
// }else if(!username.match(reg_num)){
//     showError(uname, "username must contain letters!"); 
//     is_valid= false;  
// }
// else if(!username.match(reg_letter)){
//     showError(uname, "username must start with letter!"); 
//     is_valid= false;  
// }

// else{
// showSuccess(uname);
// }

// if(email===""){
// showError(pemail, "Email "+empty);
// is_valid= false;
// }
// else if(!(email.match(regEx))){
// showError(pemail, invalidEmail);
// is_valid= false;
// }
// else{
// showSuccess(pemail);
// }

// if(password===""){
// showError(pass, "Password "+empty);
// is_valid= false;
// }
// else{
// showSuccess(pass);
// }

// if(is_valid){
// form.submit();
// }
// }

// function showSuccess(para){
// para.textContent = "success";
// para.style.visibility = "hidden";

// }
// function showError(para, text){
// para.textContent = text;
// para.style.visibility = "visible";
// para.classList.add("para");
// }
document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("#loginForm");
    const usernameInput = document.querySelector("#username");
    const emailInput = document.querySelector("#email");
    const passwordInput = document.querySelector("#password");

    let typingTimer;
    const typingDelay = 500; // Delay for validation after typing stops

    usernameInput.addEventListener("input", () => handleTyping(validateUsername));
    emailInput.addEventListener("input", () => handleTyping(validateEmail));
    passwordInput.addEventListener("input", () => handleTyping(validatePassword));

    function handleTyping(validationFunction) {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(validationFunction, typingDelay);
    }

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        
        validateUsername();
        validateEmail();
        validatePassword();

        if (isFormValid()) {
            form.submit();
        }
    });

    function validateUsername() {
        const username = usernameInput.value.trim().toLowerCase();
        const unameError = document.querySelector("#uname");
        const reg_num = /[A-Za-z]+/;
        const reg_letter = /^[A-Za-z]+/;

        if (!username) {
            showError(unameError, "Username cannot be empty!");
        } else if (!username.match(reg_num)) {
            showError(unameError, "Username must contain letters!");
        } else if (!username.match(reg_letter)) {
            showError(unameError, "Username must start with a letter!");
        } else {
            showSuccess(unameError);
        }
    }

    function validateEmail() {
        const email = emailInput.value.trim().toLowerCase();
        const emailError = document.querySelector("#pemail");
        const regEx = /^[A-Za-z_]+[0-9]*@[A-Za-z]+\.(com|net|org)$/;

        if (!email) {
            showError(emailError, "Email cannot be empty!");
        } else if (!email.match(regEx)) {
            showError(emailError, "Invalid email format!");
        } else {
            showSuccess(emailError);
        }
    }

    function validatePassword() {
        const password = passwordInput.value.trim();
        const passError = document.querySelector("#pass");

        if (!password) {
            showError(passError, "Password cannot be empty!");
        } else {
            showSuccess(passError);
        }
    }

    function showSuccess(element) {
        element.textContent = "";
        element.style.visibility = "hidden";
    }

    function showError(element, message) {
        element.textContent = message;
        element.style.visibility = "visible";
        element.classList.add("para");
    }

    function isFormValid() {
        return !document.querySelectorAll(".error[style='visibility: visible']").length;
    }
});

