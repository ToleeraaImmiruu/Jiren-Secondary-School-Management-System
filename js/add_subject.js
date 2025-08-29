
document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("#addsubject");

    let typingTimer;
    const typingDelay = 500; // Delay before validation triggers

    let subject_name = document.querySelector("#subname");
    let stream = document.querySelector("#stream");
    let grade = document.querySelector("#grade");

    let stream_box = document.querySelector(".stream");

    let isubname = document.querySelector("#isubname");
    let pstream = document.querySelector("#estream");
    let igrade = document.querySelector("#igrade");

    let esubname = document.querySelector("#esubname");
    let istream = document.querySelector("#istream");
    let egrade = document.querySelector("#egrade");

    let grade_validation = /^9|([1][0-2])$/;
    let stream_validation = /^((social)|(natural)) ?science$/;

    function empty(name) {
        return name + " cannot be empty!";
    }

    function handleTyping(validationFunction) {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(validationFunction, typingDelay);
    }

    // **Attach real-time validation to input fields**
    subject_name.addEventListener("input", () => handleTyping(() => {
        let name = subject_name.value.trim().toLowerCase();
        subject_name.value = name;

        if (name === "") {
            showError(esubname, isubname, empty("subject name"));
        } else {
            showSuccess(esubname, isubname);
        }
    }));

    grade.addEventListener("input", () => handleTyping(() => {
        let gradeValue = grade.value.trim();
        grade.value = gradeValue;

        if (gradeValue === "") {
            showError(egrade, igrade, empty("grade"));
        } else if (!gradeValue.match(grade_validation)) {
            showError(egrade, igrade, "invalid grade");
        } else {
            showSuccess(egrade, igrade);
        }

        if (gradeValue === "11" || gradeValue === "12") {
            stream_box.style.display = "block";
        } else {
            stream_box.style.display = "none";
        }
    }));

    stream.addEventListener("input", () => handleTyping(() => {
        let streamValue = stream.value.trim().toLowerCase();
        stream.value = streamValue;

        if (streamValue === "") {
            showError(pstream, istream, empty("stream"));
        } else if (!streamValue.match(stream_validation)) {
            showError(pstream, istream, "invalid stream");
        } else {
            showSuccess(pstream, istream);
        }
    }));

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        let is_valid = true;

        if (subject_name.value.trim() === "") {
            showError(esubname, isubname, empty("subject name"));
            is_valid = false;
        } else {
            showSuccess(esubname, isubname);
        }

        if (grade.value.trim() === "") {
            showError(egrade, igrade, empty("grade"));
            is_valid = false;
        } else if (!grade.value.match(grade_validation)) {
            showError(egrade, igrade, "invalid grade");
            is_valid = false;
        } else {
            showSuccess(egrade, igrade);
        }

        if (grade.value === "11" || grade.value === "12") {
            if (stream.value.trim() === "") {
                showError(pstream, istream, empty("stream"));
                is_valid = false;
            } else if (!stream.value.match(stream_validation)) {
                showError(pstream, istream, "invalid stream");
                is_valid = false;
            } else {
                showSuccess(pstream, istream);
            }
        }

        if (is_valid) {
            form.submit();
        }
    });

    function showError(para, image, text) {
        para.textContent = text;
        para.style.visibility = "visible";
        para.classList.add("error-active"); // Marks visible errors
        image.setAttribute("src", "../images/x.svg");
        image.style.visibility = "visible";
    }

    function showSuccess(para, image) {
        para.textContent = "success";
        para.style.visibility = "hidden";
        para.classList.remove("error-active"); // Removes error state
        image.setAttribute("src", "../images/check.svg");
        image.style.visibility = "visible";
    }
});
