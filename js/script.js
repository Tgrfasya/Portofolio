/*
=====================================================
NAVBAR ACTIVE SLIDER
=====================================================
*/

const navMenu = document.querySelector(".nav-menu");
const navLinks = document.querySelectorAll(".nav-menu a");
const sections = document.querySelectorAll("main section[id]");

function moveNavIndicator(link) {
    if (!navMenu || !link) return;

    const menuRect = navMenu.getBoundingClientRect();
    const linkRect = link.getBoundingClientRect();

    navMenu.style.setProperty(
        "--indicator-x",
        `${linkRect.left - menuRect.left}px`
    );

    navMenu.style.setProperty(
        "--indicator-width",
        `${linkRect.width}px`
    );

    navMenu.style.setProperty(
        "--indicator-opacity",
        "1"
    );

    navLinks.forEach(item => {
        item.classList.toggle("active", item === link);
    });
}

function updateActiveNav() {
    let current = "home";

    sections.forEach(section => {
        if (section.getBoundingClientRect().top <= 180) {
            current = section.id;
        }
    });

    const activeLink = document.querySelector(
        `.nav-menu a[href="#${current}"]`
    );

    moveNavIndicator(activeLink);
}

navLinks.forEach(link => {
    link.addEventListener("click", () => {
        moveNavIndicator(link);
    });
});

window.addEventListener("scroll", updateActiveNav);
window.addEventListener("resize", updateActiveNav);
window.addEventListener("load", updateActiveNav);

/*
=====================================================
PROJECT FIGMA LINKS
=====================================================
*/

document.querySelectorAll(".project-card").forEach(card => {
    const figmaLink = card.dataset.figma;

    if (!figmaLink?.trim()) return;

    card.classList.add("clickable");
    card.addEventListener("click", () => {
        window.open(figmaLink, "_blank");
    });
});

/*
=====================================================
CERTIFICATE GOOGLE DRIVE LINKS
=====================================================
*/

document.querySelectorAll(".certificate-card").forEach(card => {
    const driveLink = card.dataset.drive;

    if (!driveLink?.trim()) return;

    card.classList.add("clickable");
    card.addEventListener("click", () => {
        window.open(driveLink, "_blank");
    });
});

/*
=====================================================
DARK MODE
=====================================================
*/

const themeToggle = document.getElementById("themeToggle");

if (themeToggle) {
    const savedTheme = localStorage.getItem("theme");

    if (savedTheme === "dark") {
        document.body.classList.add("dark");
    }

    themeToggle.addEventListener("click", () => {
        const isDark = document.body.classList.toggle("dark");

        localStorage.setItem("theme", isDark ? "dark" : "light");
    });
}