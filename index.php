<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <meta name="microsoft" content="notranslate">
    <title>Portfolio | Bocar Ndiaye</title>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- custom css -->
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <!-- Header Design -->
    <header class="header">
        <a href="#" class="logo">Portfolio</a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <a href="#home" class="active" data-en="Home" data-fr="Accueil">Home</a>
            <a href="#about" data-en="About" data-fr="À propos">About</a>
            <a href="#services" data-en="Services" data-fr="Services">Services</a>
            <a href="#portfolio" data-en="Portfolio" data-fr="Portfolio">Portfolio</a>
            <a href="#contact" data-en="Contact" data-fr="Contact">Contact</a>
            
            <!-- Lang Switcher Button -->
            <button id="lang-toggle" class="lang-btn">🇫🇷 FR</button>
        </nav>
    </header>

    <!-- Home Section Design -->
    <section class="home" id="home">
        <div class="home-content">
            <h3 data-en="Hi, I am " data-fr="Salut, je suis">Hi, I am</h3>
            <h1>Bocar Ndiaye</h1>
            <h3><span data-en="I am a " data-fr="Je suis ">I am a </span><span class="multiple-text"></span></h3>
            <p data-en="Student in Data Transmission and Information Security (TDSI) at Cheikh Anta Diop University of Dakar (UCAD), I combine technical skills in web development (HTML, CSS, JavaScript, PHP) with network administration and security concepts. I am actively developing my cybersecurity skills on TryHackMe with the goal of becoming an expert to help secure digital systems."
               data-fr="Étudiant en Licence 3 Transmission de Données et Sécurité de l'Information (TDSI) à l'Université Cheikh Anta Diop de Dakar (UCAD), je combine mes compétences en développement web (HTML, CSS, JavaScript, PHP) avec l'administration réseau et la sécurité. Je développe activement mes compétences en cybersécurité sur TryHackMe dans le but de devenir expert et de contribuer à la sécurisation des systèmes informatiques.">
                Student in Data Transmission and Information Security (TDSI) at Cheikh Anta Diop University of Dakar (UCAD), 
                I combine technical skills in web development (HTML, CSS, JavaScript, PHP) with network administration 
                and security concepts. I am actively developing my cybersecurity skills on TryHackMe with the goal of becoming an expert to help secure digital systems.
            </p>
            
            <div class="social-media">
                <a href="https://github.com/bocarndiayr86-droid/mon_portfolio" target="_blank"><i class='bx bxl-github'></i></a>
                <a href="https://www.instagram.com/bocar6464?igsh=MTg2NTNzZXh5aHd0MQ==&igsi=MTg2NTNzZXh5aHd0MQ==" target="_blank"><i class='bx bxl-instagram'></i></a>
                <a href="https://www.linkedin.com/in/bocar-ndiaye-79819b3b0?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank"><i class='bx bxl-linkedin'></i></a>
                <a href="https://wa.me/221778513611" target="_blank"><i class='bx bxl-whatsapp'></i></a>
            </div>

            <!-- Download CV Button -->
            <a href="assets/CV_Bocar_Ndiaye.pdf" download="CV_Bocar_Ndiaye.pdf" class="btn" data-en="Download CV" data-fr="Télécharger CV">Download CV</a>
        </div>

        <div class="home-img">
            <img src="img/photo_2026-08-04_00-02-32.jpg" alt="Bocar Ndiaye">
        </div>
    </section>

    <!-- About Section Design -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="img/about_me.jpg" alt="About Me">
        </div>
        <div class="about-content">
            <h2 class="heading"><span data-en="About " data-fr="À propos de ">About </span><span data-en="Me" data-fr="Moi">Me</span></h2>
            
            <h3 data-en="Apprentice Web Developer & Cybersecurity Enthusiast!" 
                data-fr="Apprenti Développeur Web & Passionné de Cybersécurité !">
                Apprentice Web Developer & Cybersecurity Enthusiast!
            </h3>
            
            <p data-en="Currently a Third-Year student in Data Transmission and Information Security (TDSI) at Cheikh Anta Diop University of Dakar (UCAD). I can develop web applications and design websites. In parallel, I regularly practice on TryHackMe to develop practical skills in cybersecurity. My goal is to become a Cybersecurity Expert to contribute to securing digital systems in my country."
               data-fr="Actuellement étudiant en Licence 3 Transmission de Données et Sécurité de l'Information (TDSI) à l'Université Cheikh Anta Diop de Dakar (UCAD). Je sais concevoir des sites et développer des applications web. En parallèle, je m'entraîne sur TryHackMe pour acquérir des compétences pratiques en cybersécurité. Mon objectif est de devenir Expert en Cybersécurité afin de contribuer à la sécurisation des systèmes informatiques de mon pays.">
                Currently a Third-Year student in Data Transmission and Information Security (TDSI) at Cheikh Anta Diop University of Dakar (UCAD). I can develop web applications and design websites. In parallel, I regularly practice on TryHackMe to develop practical skills in cybersecurity. My goal is to become a Cybersecurity Expert to contribute to securing digital systems in my country.
            </p>
            
            <a href="#contact" class="btn" data-en="Contact Me" data-fr="Me Contacter">Contact Me</a>
        </div>
    </section>
    <!-- Services Section Design -->
    <section class="services" id="services">
        <h2 class="heading"><span data-en="Our " data-fr="Nos ">Our </span><span data-en="Services" data-fr="Services">Services</span></h2>
        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3 data-en="Web Development" data-fr="Développement Web">Web Development</h3>
                <p data-en="Creating dynamic websites and web applications using HTML5, CSS3, JavaScript, and PHP / MySQL backend."
                   data-fr="Création de sites et d'applications web dynamiques avec HTML5, CSS3, JavaScript et backend PHP / MySQL.">
                   Creating dynamic websites and web applications using HTML5, CSS3, JavaScript, and PHP / MySQL backend.
                </p>
                <a href="#contact" class="btn" data-en="Read More" data-fr="En savoir plus">Read More</a>
            </div>

            <div class="services-box">
                <i class='bx bx-shield-quarter'></i>
                <h3 data-en="Applied Security & Mathematics" data-fr="Sécurité Appliquée & Mathématiques">Applied Security & Mathematics</h3>
                <p data-en="Strong foundations in computer security, cryptography, algebra, error-correcting codes, and database management from my L3 TDSI curriculum."
                   data-fr="Solides notions en sécurité informatique, cryptographie, algèbre, codes correcteurs et gestion de bases de données issues de ma formation en L3 TDSI.">
                   Strong foundations in computer security, cryptography, algebra, error-correcting codes, and database management from my L3 TDSI curriculum.
                </p>
                <a href="#contact" class="btn" data-en="Contact" data-fr="Contact">Contact</a>
            </div> 

            <div class="services-box">
                <i class='bx bx-data'></i>
                <h3 data-en="Database & Network Admin" data-fr="Bases de Données & Réseaux">Bases de Données & Réseaux</h3>
                <p data-en="Conception, administration and optimization of relational MySQL databases, connected securely to PHP backends."
                   data-fr="Conception, administration et optimisation de bases de données relationnelles MySQL, connectées de manière sécurisée aux backends PHP.">
                   Conception, administration et optimisation de bases de données relationnelles MySQL, connectées de manière sécurisée aux backends PHP.
                </p>
                <a href="#contact" class="btn" data-en="Learn More" data-fr="En savoir plus">En savoir plus</a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section Design -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading"><span data-en="Latest " data-fr="Mes Derniers ">Latest </span><span data-en="Projects" data-fr="Projets">Projects</span></h2>
        <div class="portfolio-container">
            <!-- Projet 1 : GOWÉ Perfumes -->
            <div class="portfolio-box">
                <img src="img/close-up-hyaluronic-acid-tratment.jpg" alt="GOWÉ Perfumes">
                <div class="portfolio-layer">
                    <h4 data-en="GOWÉ Perfumes Catalog" data-fr="Catalogue GOWÉ Perfumes">GOWÉ Perfumes Catalog</h4>
                    <p data-en="Dynamic e-commerce catalog featuring product management (e.g. Ameerat Al Arab), shopping cart, and PHP / MySQL backend."
                       data-fr="Catalogue e-commerce dynamique avec gestion des produits (ex: Ameerat Al Arab), panier d'achat et backend PHP / MySQL.">
                       Dynamic e-commerce catalog featuring product management (e.g. Ameerat Al Arab), shopping cart, and PHP / MySQL backend.
                    </p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <!-- Projet 2 : MEEK Portal -->
            <div class="portfolio-box">
                <img src="img/meek.jfif" alt="MEEK Portal">
                <div class="portfolio-layer">
                    <h4 data-en="MEEK Student Portal" data-fr="Portail Étudiant MEEK">MEEK Student Portal</h4>
                    <p data-en="Identification, membership, and suggestion registration system for the Mouvement des Élèves et Étudiants de Kabatoki."
                       data-fr="Système d'identification, d'adhésion et de dépôt de suggestions pour le Mouvement des Élèves et Étudiants de Kabatoki.">
                       Identification, membership, and suggestion registration system for the Mouvement des Élèves et Étudiants de Kabatoki.
                    </p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <!-- Projet 3 : Panto - E-commerce Mobilier -->
            <div class="portfolio-box">
                <img src="img/panto.png" alt="Panto - E-commerce Mobilier">
                <div class="portfolio-layer">
                    <h4 data-en="Panto - Interior E-commerce" data-fr="Panto - E-commerce Mobilier">Panto - Interior E-commerce</h4>
                    <p data-en="Modern and minimalist e-commerce web application for interior furniture showcasing with dynamic product catalog."
                       data-fr="Application web e-commerce moderne et minimaliste pour la présentation de mobilier d'intérieur avec catalogue dynamique.">
                       Modern and minimalist e-commerce web application for interior furniture showcasing with dynamic product catalog.
                    </p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <!-- Projet 4 : Modern Portfolio -->
            <div class="portfolio-box">
                <img src="img/computer-program-coding-screen.jpg" alt="Personal Portfolio">
                <div class="portfolio-layer">
                    <h4 data-en="Bilingual Web Portfolio" data-fr="Portfolio Web Bilingue">Bilingual Web Portfolio</h4>
                    <p data-en="Responsive personal portfolio featuring dynamic EN/FR language switching and interactive contact form integration."
                       data-fr="Portfolio personnel responsive intégrant la bascule dynamique EN/FR et un formulaire de contact interactif.">
                       Responsive personal portfolio featuring dynamic EN/FR language switching and interactive contact form integration.
                    </p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>
    </section>
                
<!-- Contact Section Design -->
<section class="contact" id="contact">
    <h2 class="heading"><span data-en="Contact " data-fr="Me ">Contact </span><span data-en="Me!" data-fr="Contacter!">Me!</span></h2>
   <form action="https://formspree.io/f/mvkplqdr" method="POST" target="_top">
        <div class="input-box">
            <input type="text" name="nom" placeholder="Full Name" data-placeholder-en="Full Name" data-placeholder-fr="Nom complet" required>
            <input type="email" name="email" placeholder="Email Address" data-placeholder-en="Email Address" data-placeholder-fr="Adresse email" required>
        </div>
        <div class="input-box">
            <input type="tel" name="telephone" placeholder="Mobile Number" data-placeholder-en="Mobile Number" data-placeholder-fr="Numéro de téléphone">
            <input type="text" name="sujet" placeholder="Email Subject" data-placeholder-en="Email Subject" data-placeholder-fr="Sujet du message" required>
        </div>
        <textarea name="message" cols="30" rows="10" placeholder="Your Message" data-placeholder-en="Your Message" data-placeholder-fr="Votre message" required></textarea>
        <input type="submit" value="Send Message" class="btn" id="submit-btn" data-en="Send Message" data-fr="Envoyer le message">
    </form>
</section>

    <!-- Footer Design -->
    <footer class="footer">
        <div class="footer-text">
            <p>&copy; 2026 by Bocar Ndiaye | All Rights Reserved.</p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="javaScript.js"></script>
</body>

</html>
