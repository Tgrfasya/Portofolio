const navMenu = document.querySelector(".nav-menu");
const navLinks = document.querySelectorAll(".nav-menu a");
const sections = document.querySelectorAll("main section[id]");

function updateNav() {
    if (!navMenu || !navLinks.length) return;

    let current = "home";

    sections.forEach(section => {
        if (section.getBoundingClientRect().top <= 180) current = section.id;
    });

    const active = document.querySelector(`.nav-menu a[href="#${current}"]`);
    if (!active) return;

    const menu = navMenu.getBoundingClientRect();
    const item = active.getBoundingClientRect();

    navMenu.style.setProperty("--indicator-x", `${item.left - menu.left}px`);
    navMenu.style.setProperty("--indicator-width", `${item.width}px`);
    navMenu.style.setProperty("--indicator-opacity", "1");

    navLinks.forEach(link => link.classList.toggle("active", link === active));
}

navLinks.forEach(link => link.addEventListener("click", () => updateNav()));

window.addEventListener("scroll", updateNav);
window.addEventListener("resize", updateNav);
window.addEventListener("load", updateNav);