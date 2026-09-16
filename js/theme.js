const themeToggle = document.getElementById("themeToggle");

if (themeToggle) {
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") document.body.classList.add("dark");

    themeToggle.addEventListener("click", () => {
        const dark = document.body.classList.toggle("dark");
        localStorage.setItem("theme", dark ? "dark" : "light");
    });
}