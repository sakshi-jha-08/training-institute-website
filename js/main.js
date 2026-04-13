// HEADER MENU TOGGLE
function initHeaderToggle() {
    // Select toggle button
    const menuToggle = document.querySelector(".menu-toggle");
    // Select nav
    const nav = document.querySelector("header nav");
    // Select i
    const icon = document.querySelector(".menu-toggle i");
    // Safety check
    if (!menuToggle || !nav || !icon) return;
    // Toggle menu on button click
    menuToggle.addEventListener("click", (e) => {
        // important (warna outside click turant close kar dega)
        e.stopPropagation();
        nav.classList.toggle("active");
        // ICON CHANGE
        if (nav.classList.contains("active")) {
            icon.classList.remove("fa-bars");
            icon.classList.add("fa-xmark");
        } else {
            icon.classList.remove("fa-xmark");
            icon.classList.add("fa-bars");
        }
    });
    // CLICK OUTSIDE TO CLOSE
    document.addEventListener("click", (e) => {
        // Agar click nav ya toggle ke bahar hua
        if (!nav.contains(e.target) && !menuToggle.contains(e.target)) {
            nav.classList.remove("active");
            // ICON RESET
            icon.classList.remove("fa-xmark");
            icon.classList.add("fa-bars");
        }
    });
}

// INITIALIZE
initHeaderToggle();