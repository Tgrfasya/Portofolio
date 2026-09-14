/*
=====================================================
PROJECT FIGMA LINKS
=====================================================
*/

document.querySelectorAll(".project-card").forEach(card => {

    const figmaLink = card.dataset.figma;

    if (figmaLink && figmaLink.trim() !== "") {

        card.classList.add("clickable");

        card.addEventListener("click", () => {
            window.open(figmaLink, "_blank");
        });

    }

});


/*
=====================================================
CERTIFICATE GOOGLE DRIVE LINKS
=====================================================
*/

document.querySelectorAll(".certificate-card").forEach(card => {

    const driveLink = card.dataset.drive;

    if (driveLink && driveLink.trim() !== "") {

        card.classList.add("clickable");

        card.addEventListener("click", () => {
            window.open(driveLink, "_blank");
        });

    }

});


/*
=====================================================
DARK MODE
=====================================================
*/

const themeToggle = document.getElementById("themeToggle");

const savedTheme = localStorage.getItem("theme");


if (savedTheme === "dark") {

    document.body.classList.add("dark");

    themeToggle.textContent = "☀️";

}


themeToggle.addEventListener("click", () => {

    document.body.classList.toggle("dark");

    const isDark =
        document.body.classList.contains("dark");


    localStorage.setItem(
        "theme",
        isDark ? "dark" : "light"
    );


    themeToggle.textContent =
        isDark ? "☀️" : "🌙";

});