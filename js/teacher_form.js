
document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("#teacherForm");
    const phoneInput = document.querySelector("#phone");
    const streamInput = document.querySelector("#stream");
    const gradeInput = document.querySelector("#grade");
    const subjectInput = document.querySelector("#subject");
    const classInput = document.querySelector("#class");

    const pphone = document.querySelector("#ephone");
    const pstream = document.querySelector("#estream");
    const pgrade = document.querySelector("#egrade");
    const psubject = document.querySelector("#esubject");
    const pclass = document.querySelector("#eclass");

    const iphone = document.querySelector("#iphone");
    const istream = document.querySelector("#istream");
    const igrade = document.querySelector("#igrade");
    const isubject = document.querySelector("#isubject");
    const iclass = document.querySelector("#iclass");

    const clear = document.querySelector("#clear");
    let typingTimer;
    const typingDelay = 500; // Adjust delay as needed

    // Clear form on button click
    clear.addEventListener("click", () => {
        window.location.reload();
    });

    // Attach typing delay validation for each input
    phoneInput.addEventListener("input", () => handleTyping(validatePhone));
    streamInput.addEventListener("input", () => handleTyping(validateStream));
    gradeInput.addEventListener("input", () => handleTyping(validateGrade));
    subjectInput.addEventListener("input", () => handleTyping(validateSubject));
    classInput.addEventListener("input", () => handleTyping(validateClass));

    function handleTyping(validationFunction) {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(validationFunction, typingDelay);
    }

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent default submission

        validatePhone();
        validateStream();
        validateGrade();
        validateSubject();
        validateClass();

        if (isFormValid()) {
            form.submit(); // Submit the form when all fields are valid
        }
    });

    function validatePhone() {
        const phone = phoneInput.value.trim();
        const phonePattern1 = /^\+251[79][0-9]{8}$/;
        const phonePattern2 = /^0[79][0-9]{8}$/;

        if (!phone) {
            showError(pphone, iphone, "Phone number cannot be empty!");
        } else if (phone.length !== 10 && phone.length !== 13) {
            showError(pphone, iphone, "Invalid length!");
        } else if (!phone.match(phonePattern1) && !phone.match(phonePattern2)) {
            showError(pphone, iphone, "Invalid phone number!");
        } else {
            showSuccess(pphone, iphone);
        }
    }

    function validateStream() {
        const stream = streamInput.value.trim().toLowerCase();
        const streamPattern = /^(social|natural) ?science$/;

        if (!stream) {
            showError(pstream, istream, "Stream cannot be empty!");
        } else if (!stream.match(streamPattern)) {
            showError(pstream, istream, "Invalid stream format!");
        } else {
            showSuccess(pstream, istream);
        }
    }

    function validateGrade() {
        const grade = gradeInput.value.trim();
        const gradePattern = /^9|1[0-2]$/;

        if (!grade) {
            showError(pgrade, igrade, "Grade cannot be empty!");
        } else if (!grade.match(gradePattern)) {
            showError(pgrade, igrade, "Invalid grade!");
        } else {
            showSuccess(pgrade, igrade);
        }
    }

    function validateSubject() {
        const subject = subjectInput.value.trim().toLowerCase();

        if (!subject) {
            showError(psubject, isubject, "Subject cannot be empty!");
        } else {
            showSuccess(psubject, isubject);
        }
    }

    function validateClass() {
        const classAssigned = classInput.value.trim().toLowerCase();
        const classPattern = /^[a-z] *(, *[a-z])*$/;
        const classInvalidComma = /,$/;

        if (!classAssigned) {
            showError(pclass, iclass, "Class cannot be empty!");
        } else if (classAssigned.match(classInvalidComma)) {
            showError(pclass, iclass, "Invalid class (cannot end with a comma)!");
        } else if (!classAssigned.match(classPattern)) {
            showError(pclass, iclass, "Invalid class format (separate using commas)!");
        } else {
            showSuccess(pclass, iclass);
        }
    }

    function showError(para, image, text) {
        para.textContent = text;
        para.style.visibility = "visible";
        para.classList.add("error-active");
        image.setAttribute("src", "../images/x.svg");
        image.style.visibility = "visible";
    }

    function showSuccess(para, image) {
        para.textContent = "correct";
        para.style.visibility = "hidden";
        para.classList.remove("error-active");
        image.setAttribute("src", "../images/check.svg");
        image.style.visibility = "visible";
    }

    function isFormValid() {
        return document.querySelectorAll(".error-active").length === 0; // Ensures no errors exist
    }
});
