document.querySelectorAll("[data-figma], [data-drive]").forEach(card => {
    const link = card.dataset.figma || card.dataset.drive;
    if (!link) return;

    card.classList.add("clickable");
    card.addEventListener("click", () => window.open(link, "_blank", "noopener,noreferrer"));
});