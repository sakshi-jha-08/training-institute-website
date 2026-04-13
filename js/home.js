// COUNTER FUNCTION (INTERSECTION OBSERVER)
function initCounter() {
    // Select all counter elements
    const counters = document.querySelectorAll(".counter");
    // Safety check: agar page me counters nahi hain toh function stop
    if (!counters.length) return;
    // Create Intersection Observer (detects when element enters viewport)
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            // Jab element screen me visible ho
            if (entry.isIntersecting) {
                const counter = entry.target;
                // Target value (data-count attribute se)
                const target = +counter.getAttribute("data-count");
                let count = 0; // initial value
                // Function to animate counting
                const updateCount = () => {
                    // Increment value (speed control)
                    const increment = target / 100;
                    // Jab tak target achieve na ho
                    if (count < target) {
                        count += increment;
                        // Rounded value UI me show karo
                        counter.innerText = Math.ceil(count);
                        // Smooth animation (next frame call)
                        requestAnimationFrame(updateCount);
                    } else {
                        // Final exact value set
                        counter.innerText = target;
                    }
                };
                // Start counter animation
                updateCount();
            } else {
                // Jab element viewport se bahar chala jaye → reset
                entry.target.innerText = "0";
            }
        });
    }, {
        threshold: 0.5 // 50% visible hone par trigger
    });
    // Har counter ko observe karo
    counters.forEach(counter => observer.observe(counter));
}

// TOGGLE FUNCTION (ACCORDION)
function initToggle() {
    // Select all toggle buttons
    const toggleButtons = document.querySelectorAll(".toggle-btn");
    // Safety check: agar toggle elements nahi hain toh function stop
    if (!toggleButtons.length) return;
    // Har button pe click event lagao
    toggleButtons.forEach(button => {
        button.addEventListener("click", () => {
            // Current toggle item (parent container)
            const currentItem = button.parentElement;
            // Check: kya yeh already open hai?
            const isActive = currentItem.classList.contains("active");
            // Step 1: sab items close karo (only one open at a time)
            document.querySelectorAll(".toggle-item").forEach(item => {
                item.classList.remove("active");
            });
            // Step 2: agar clicked item pehle se open nahi tha → open karo
            if (!isActive) {
                currentItem.classList.add("active");
            }
            // Agar already open tha → close hi rahega (toggle effect)
        });
    });
}

// INITIALIZE ALL FUNCTIONS
// Page load hone ke baad functions call karo
initCounter();
initToggle();