// Toggle icon navbar
let menuIcon = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");
menuIcon.onclick = () => {
    menuIcon.classList.toggle("bx-x");
    navbar.classList.toggle("active");
};

// Scroll section active link
let sections = document.querySelectorAll("section");
let navLink = document.querySelectorAll("header nav a");

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute("id");

        if (top >= offset && top < offset + height) {
            navLink.forEach(Links => {
                Links.classList.remove("active");
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        }
    });

    // Sticky navbar
    let header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 100);

    // Remove toggle icon and navbar when click navbar link (scroll)
    menuIcon.classList.remove("bx-x");
    navbar.classList.remove("active");
};

// ScrollReveal
ScrollReveal({
    reset: true,
    distance: "80px",
    duration: 2000,
    delay: 200
});
ScrollReveal().reveal('.home-content, .heading', { origin: "top" });
ScrollReveal().reveal('.home-img, .services-container, .portfolio-box, .contact form', { origin: "bottom" });
ScrollReveal().reveal('.home-content h1, .about-img', { origin: "left" });
ScrollReveal().reveal('.home-content p, .about-content', { origin: "right" });

// --- Animation Typed.js adaptative (EN / FR) ---
const typedStrings = {
    en: ['Apprentice Web Developer', 'Cybersecurity Enthusiast'],
    fr: ['Apprenti Développeur Web', 'Passionné de Cybersécurité']
};
let typedInstance = new Typed(".multiple-text", {
    strings: typedStrings.en,
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});

// --- Gestionnaire de changement de langue (EN / FR) ---
const langToggleBtn = document.querySelector("#lang-toggle");
let currentLang = "en";

if (langToggleBtn) {
    langToggleBtn.addEventListener("click", () => {
        currentLang = currentLang === "en" ? "fr" : "en";
        
        // Mettre à jour le texte du bouton
        langToggleBtn.textContent = currentLang === "en" ? "🇫🇷 FR" : "🇬🇧 EN";

        // Traduire les éléments HTML
        document.querySelectorAll("[data-en]").forEach(el => {
            el.textContent = el.getAttribute(`data-${currentLang}`);
        });

        // Traduire les placeholders
        document.querySelectorAll("[data-placeholder-en]").forEach(input => {
            input.placeholder = input.getAttribute(`data-placeholder-${currentLang}`);
        });

        // Mettre à jour le bouton de soumission
        const submitBtn = document.querySelector("#submit-btn");
        if (submitBtn) {
            submitBtn.value = submitBtn.getAttribute(`data-${currentLang}`);
        }

        // Réinitialiser l'animation Typed.js avec la nouvelle langue
        typedInstance.destroy();
        typedInstance = new Typed(".multiple-text", {
            strings: typedStrings[currentLang],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true
        });
    });
}

// --- Soumission du formulaire directement vers Formspree (Gmail) ---
const contactForm = document.querySelector('.contact form');

if (contactForm) {
    contactForm.addEventListener('submit', async function (e) {
        e.preventDefault();

        const submitBtn = document.querySelector('#submit-btn');
        const originalBtnValue = submitBtn ? submitBtn.value : '';

        // Indiquer le chargement sur le bouton
        if (submitBtn) {
            submitBtn.value = currentLang === 'en' ? 'Sending...' : 'Envoi en cours...';
            submitBtn.disabled = true;
        }

        const formData = new FormData(this);

        try {
            const response = await fetch('https://formspree.io/f/mvkplqdr', {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            });

            if (response.ok) {
                const successMsg = currentLang === 'en' ? 'Message sent successfully!' : 'Message envoyé avec succès !';
                alert(successMsg);
                contactForm.reset();
            } else {
                throw new Error('Formspree response was not ok');
            }
        } catch (error) {
            console.error('Error:', error);
            const errorMsg = currentLang === 'en' ? 'An error occurred while sending.' : 'Une erreur est survenue lors de l\'envoi.';
            alert(errorMsg);
        } finally {
            // Réactiver le bouton
            if (submitBtn) {
                submitBtn.value = originalBtnValue;
                submitBtn.disabled = false;
            }
        }
    });
}
