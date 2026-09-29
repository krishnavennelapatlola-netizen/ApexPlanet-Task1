// =========================
// WELCOME BUTTON
// =========================

function welcomeMessage() {
    alert("Welcome to Athul K K's Portfolio!");
}


// =========================
// CONTACT FORM VALIDATION
// =========================

function validateForm() {

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let message = document.getElementById("message").value.trim();

    if (name === "") {
        alert("Please enter your name.");
        return false;
    }

    if (email === "") {
        alert("Please enter your email.");
        return false;
    }

    if (!email.includes("@")) {
        alert("Please enter a valid email address.");
        return false;
    }

    if (message === "") {
        alert("Please enter your message.");
        return false;
    }

    alert("Thank you, " + name + "! Your message has been submitted.");

    return false;
}


// =========================
// SCROLL REVEAL ANIMATION
// =========================

const cards = document.querySelectorAll(
    ".project-card, .skill-card, .highlight-card, .workshop-card"
);

const observer = new IntersectionObserver(
    function (entries) {

        entries.forEach(function (entry) {

            if (entry.isIntersecting) {

                entry.target.classList.add("show");

            }

        });

    },
    {
        threshold: 0.15
    }
);


cards.forEach(function (card) {

    card.classList.add("hidden");

    observer.observe(card);

});


// =========================
// NAVIGATION ACTIVE LINK
// =========================

const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".nav-links a");

window.addEventListener("scroll", function () {

    let currentSection = "";

    sections.forEach(function (section) {

        const sectionTop = section.offsetTop - 120;
        const sectionHeight = section.clientHeight;

        if (
            window.scrollY >= sectionTop &&
            window.scrollY < sectionTop + sectionHeight
        ) {
            currentSection = section.getAttribute("id");
        }

    });

    navLinks.forEach(function (link) {

        link.classList.remove("active");

        if (link.getAttribute("href") === "#" + currentSection) {
            link.classList.add("active");
        }

    });

});
function toggleMenu() {
    document.querySelector(".nav-links").classList.toggle("mobile-active");
}