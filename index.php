<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content=" contest="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h3 data-en="Hi, It's Me" data-fr="Salut, c'est moi">Hi, It's Me</h3>
            <h1>Bocar Ndiaye</h1>
            <h3><span data-en="I am a " data-fr="Je suis ">I am a </span><span class="multiple-text"></span></h3>
            <p data-en="Student in Data Transmission and Information Security (TDSI) at Cheikh Anta Diop University of Dakar (UCAD), I combine technical skills in web development (HTML, CSS, JavaScript, PHP) with network administration and security concepts. I build intuitive, reliable, and secure digital solutions."
   data-fr="Étudiant en Licence 3 Transmission de Données et Sécurité de l'Information (TDSI) à l'Université Cheikh Anta Diop de Dakar (UCAD), je combine mes compétences en développement web (HTML, CSS, JavaScript, PHP) avec l'administration réseau et la sécurité. Je conçois des solutions numériques intuitives, fiables et sécurisées.">
    Student in Data Transmission and Information Security (TDSI) at Cheikh Anta Diop University of Dakar (UCAD), 
    I combine technical skills in web development (HTML, CSS, JavaScript, PHP) with network administration 
    and security concepts. I build intuitive, reliable, and secure digital solutions.
</p>
            <div class="social-media">
                <a href="https://www.facebook.com/share/p/1DLso3NmRi/" target="_blank"><i class='bx bxl-facebook'></i></a>
                <a href="https://x.com/BocarNdiay73652" target="_blank" ><i class='bx bxl-twitter'></i></a>
                <a href="https://www.instagram.com/bocar6464?igsh=MTg2NTNzZXh5aHd0MQ==&igsi=MTg2NTNzZXh5aHd0MQ==" target="_blank" ><i class='bx bxl-instagram'></i></a>
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
        <h3 data-en="Web Developer & Cybersecurity Enthusiast!" data-fr="Développeur Web & Passionné de Cybersécurité !">Web Developer & Cybersecurity Enthusiast!</h3>
        <p data-en="Student in Data Transmission and Information Security (TDSI) at Cheikh Anta Diop University of Dakar (UCAD). I am a web developer passionate about cybersecurity, focused on building dynamic web applications using HTML, CSS, JavaScript, and PHP."
           data-fr="Étudiant en Licence 3 Transmission de Données et Sécurité de l'Information (TDSI) à l'Université Cheikh Anta Diop de Dakar (UCAD). Je suis développeur web et passionné par la cybersécurité, orienté vers la création d'applications web dynamiques avec HTML, CSS, JavaScript et PHP.">
            Student in Data Transmission and Information Security (TDSI) at Cheikh Anta Diop University of Dakar (UCAD). 
            I am a web developer passionate about cybersecurity, focused on building dynamic web applications using HTML, CSS, JavaScript, and PHP.
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
                <i class='bx bx-devices'></i>
                <h3 data-en="Responsive UI/UX" data-fr="UI/UX Responsive">Responsive UI/UX</h3>
                <p data-en="Designing clean, modern, and fully responsive user interfaces optimized for all device screens."
                   data-fr="Intégration d'interfaces utilisateur modernes, épurées et adaptées à tous les écrans.">
                   Designing clean, modern, and fully responsive user interfaces optimized for all device screens.
                </p>
                <a href="#contact" class="btn" data-en="Read More" data-fr="En savoir plus">Read More</a>
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

        <!-- Projet 3 : CampusPass / UCAD-Alert (In Progress) -->
        <div class="portfolio-box">
            <img src="img/img2.jpg" alt="CampusPass / UCAD-Alert">
            <div class="portfolio-layer">
                <h4 data-en="CampusPass / UCAD-Alert (In Progress)" data-fr="CampusPass / UCAD-Alert (En cours)">CampusPass / UCAD-Alert (In Progress)</h4>
                <p data-en="Upcoming web application project for reporting and locating lost items within the UCAD student community."
                   data-fr="Projet d'application web en cours de conception pour le signalement et la recherche d'objets perdus à l'UCAD.">
                   Upcoming web application project for reporting and locating lost items within the UCAD student community.
                </p>
                <a href="#"><i class='bx bx-time-five'></i></a>
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
    <form action="traitement.php" method="POST">
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