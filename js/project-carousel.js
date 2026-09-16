/* PROJECT CAROUSEL */

const carousel = document.querySelector(".projects-carousel");
const track = document.getElementById("projectsTrack");

if (carousel && track) {
    const prevButton = document.getElementById("projectPrev");
    const nextButton = document.getElementById("projectNext");
    const info = document.getElementById("projectInfo");
    const category = document.getElementById("projectCategory");
    const year = document.getElementById("projectYear");
    const title = document.getElementById("projectTitle");
    const description = document.getElementById("projectDescription");
    const figmaLink = document.getElementById("projectFigmaLink");
    const infoPrev = document.getElementById("projectInfoPrev");
    const infoNext = document.getElementById("projectInfoNext");

    const duration = 1250;
    let animating = false;

    const updateActive = () => {
        [...track.children].forEach((card, index) => {
            card.classList.toggle("is-active", index === 0);
        });
    };

    const updateInfo = (animate = false, targetCard = null) => {
        const card = targetCard || track.firstElementChild;
        if (!card) return;

        if (animate) {
            info?.classList.add("is-changing");
        }

        window.setTimeout(() => {
            category.textContent = card.dataset.category || "";
            year.textContent = card.dataset.year || "";
            title.textContent = card.dataset.title || "";
            description.textContent = card.dataset.description || "";

            const figma = card.dataset.figma?.trim();

            if (figma) {
                figmaLink.href = figma;
                figmaLink.classList.remove("is-disabled");
                figmaLink.removeAttribute("aria-disabled");
            } else {
                figmaLink.href = "#";
                figmaLink.classList.add("is-disabled");
                figmaLink.setAttribute("aria-disabled", "true");
            }

            info?.classList.remove("is-changing");
        }, animate ? 160 : 0);
    };

    const getGap = () => {
        return parseFloat(getComputedStyle(track).gap) || 0;
    };

    const getActiveWidth = () => {
        const active = track.firstElementChild;
        return active ? active.getBoundingClientRect().width : 0;
    };

    const resetTrack = () => {
        track.style.transition = "none";
        track.style.transform = "translate3d(0, 0, 0)";
        void track.offsetWidth;

        requestAnimationFrame(() => {
            track.style.transition = "";
        });
    };

    const next = () => {
        if (animating) return;

        const active = track.firstElementChild;
        const nextCard = active?.nextElementSibling;

        if (!active || !nextCard) return;

        animating = true;

        const step = getActiveWidth() + getGap();

        active.classList.remove("is-active");
        nextCard.classList.add("is-active");

        updateInfo(true, nextCard);

        track.style.transition = "none";
        track.style.transform = "translate3d(0, 0, 0)";
        void track.offsetWidth;

        requestAnimationFrame(() => {
            track.style.transition = "";
            track.style.transform = `translate3d(-${step}px, 0, 0)`;
        });

        const finishNext = event => {
            if (event.propertyName !== "transform") return;

            track.removeEventListener("transitionend", finishNext);

            track.appendChild(active);

            track.style.transition = "none";
            track.style.transform = "translate3d(0, 0, 0)";
            void track.offsetWidth;

            requestAnimationFrame(() => {
                track.style.transition = "";
                updateActive();
                updateInfo(false);
                animating = false;
            });
        };

        track.addEventListener("transitionend", finishNext);
    };

    const previous = () => {
        if (animating) return;

        const last = track.lastElementChild;
        const active = track.firstElementChild;

        if (!last || !active) return;

        animating = true;

        track.prepend(last);

        active.classList.remove("is-active");
        last.classList.add("is-active");

        const step = getActiveWidth() + getGap();

        track.style.transition = "none";
        track.style.transform = `translate3d(-${step}px, 0, 0)`;
        void track.offsetWidth;

        updateInfo(true, last);

        requestAnimationFrame(() => {
            track.style.transition = "";
            track.style.transform = "translate3d(0, 0, 0)";
        });

        const finishPrevious = event => {
            if (event.propertyName !== "transform") return;

            track.removeEventListener("transitionend", finishPrevious);

            track.style.transition = "none";
            track.style.transform = "translate3d(0, 0, 0)";
            void track.offsetWidth;

            requestAnimationFrame(() => {
                track.style.transition = "";
                updateActive();
                updateInfo(false);
                animating = false;
            });
        };

        track.addEventListener("transitionend", finishPrevious);
    };

    track.addEventListener("click", event => {
        const card = event.target.closest(".project-card");

        if (!card || animating) return;
        if (card === track.firstElementChild) return;

        next();
    });

    nextButton?.addEventListener("click", next);
    prevButton?.addEventListener("click", previous);
    infoNext?.addEventListener("click", next);
    infoPrev?.addEventListener("click", previous);

    document.addEventListener("keydown", event => {
        const tag = document.activeElement?.tagName;

        if (["INPUT", "TEXTAREA", "SELECT"].includes(tag)) return;

        if (event.key === "ArrowRight") next();
        if (event.key === "ArrowLeft") previous();
    });

    let resizeTimer;

    window.addEventListener("resize", () => {
        if (animating) return;

        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(() => {
            resetTrack();
        }, 100);
    });

    const initCarousel = () => {
        updateActive();
        updateInfo(false);
        resetTrack();
    };

    const images = [...track.querySelectorAll("img")];

    if (!images.length) {
        initCarousel();
    } else {
        let loaded = 0;

        const done = () => {
            loaded++;

            if (loaded >= images.length) {
                initCarousel();
            }
        };

        images.forEach(img => {
            if (img.complete) {
                done();
            } else {
                img.addEventListener("load", done, { once: true });
                img.addEventListener("error", done, { once: true });
            }
        });
    }
}