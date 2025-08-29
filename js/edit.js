document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("#signupForm");

    const inputs = {
        fullname: document.querySelector("#fullname"),
        username: document.querySelector("#username"),
        email: document.querySelector("#email"),
        password: document.querySelector("#password"),
        cpassword: document.querySelector("#cpassword"),
        role: document.querySelector("#role"),
        image: document.querySelector("#image")
    };

    const messages = {
        fullname: document.querySelector("#fname"),
        username: document.querySelector("#uname"),
        email: document.querySelector("#pemail"),
        password: document.querySelector("#pass"),
        cpassword: document.querySelector("#cpass"),
        role: document.querySelector("#prole"),
        image: document.querySelector("#pimage")
    };

    const icons = {
        fullname: document.querySelector("#ifname"),
        username: document.querySelector("#iuname"),
        email: document.querySelector("#iemail"),
        password: document.querySelector("#ipass"),
        cpassword: document.querySelector("#icpass"),
        role: document.querySelector("#irole"),
        image: document.querySelector("#iimage")
    };

    const regexPatterns = {
        fullname: /^[a-zA-Z_]+ *[a-zA-Z]*$/,
        username: /^\w+$/,
        email: /^[A-Za-z_]+[0-9]*@[A-Za-z]+\.[a-z]{2,}$/,
        role: /^(student|teacher|director)$/
    };

    let typingTimer;
    const typingDelay = 500; // Delay validation to improve UX

    Object.keys(inputs).forEach((key) => {
        inputs[key].addEventListener("input", () => handleTyping(() => validateField(key)));
    });

    function handleTyping(validationFunction) {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(validationFunction, typingDelay);
    }

    function validateField(field) {
        const value = inputs[field].value.trim();

        if (!value) {
            showError(messages[field], icons[field], `${capitalize(field)} cannot be empty!`);
            return false;
        }

        if (regexPatterns[field] && !value.match(regexPatterns[field])) {
            showError(messages[field], icons[field], `Invalid ${field} format!`);
            return false;
        }

        if (field === "cpassword" && value !== inputs.password.value.trim()) {
            showError(messages[field], icons[field], "Passwords do not match!");
            return false;
        }

        showSuccess(messages[field], icons[field]);
        return true;
    }

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        let isValid = true;
        Object.keys(inputs).forEach((key) => {
            if (!validateField(key)) isValid = false;
        });

        if (isValid) {
            setTimeout(() => {
                form.submit();
            }, 500); // Small delay for smoother UX
        }
    });

    function showSuccess(para, image) {
        para.textContent = "c";
        para.style.visibility = "hidden";
        image.setAttribute("src", "../../images/check.svg");
        image.style.visibility = "visible";
    }

    function showError(para, image, text) {
        para.textContent = text;
        para.style.visibility = "visible";
        para.classList.add("para");
        image.setAttribute("src", "../../images/x.svg");
        image.style.visibility = "visible";
    }

    function capitalize(word) {
        return word.charAt(0).toUpperCase() + word.slice(1);
    }
});
