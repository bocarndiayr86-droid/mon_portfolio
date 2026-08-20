# Portfolio Web Bilingue - Bocar Ndiaye

Ce projet est un portfolio web bilingue (Français / Anglais) responsive, conçu pour présenter mes compétences en développement web, mes projets réalisés et mon parcours académique en Licence 3 Transmission de Données et Sécurité de l'Information (TDSI) à l'Université Cheikh Anta Diop (UCAD).

## 🚀 Démo en ligne
- **Lien live :** [carboportfolio.infinityfreeapp.com](https://carboportfolio.infinityfreeapp.com)

## ✨ Fonctionnalités
- **Interface Responsive :** Adaptation fluide sur ordinateur, tablette et smartphone.
- **Support Bilingue (EN / FR) :** Commutation dynamique de la langue sans rechargement de page.
- **Formulaire de Contact Dynamique :** Envoi de messages traité en AJAX et stocké dans une base de données MySQL.
- **Espace d'Administration :** Interface protégée pour la gestion et la suppression des messages reçus.
- **Animation Typographique :** Effets visuels interactifs gérés par Typed.js et ScrollReveal.

## 🛠️ Technologies utilisées
- **Frontend :** HTML5, CSS3, JavaScript (ES6), Boxicons, Typed.js, ScrollReveal.js
- **Backend :** PHP (PDO, requêtes préparées)
- **Base de données :** MySQL
- **Outils & Hébergement :** Git, GitHub, WampServer, InfinityFree

## 📁 Structure du projet
```te
├── assets/             # Fichiers téléchargeables (ex: CV PDF)
├── img/                # Images et illustrations du site
├── Style.css           # Feuilles de style CSS responsive
├── javaScript.js       # Logique frontend (AJAX, traductions, animations)
├── index.php           # Page d'accueil du portfolio
├── traitement.php      # Traitement du formulaire de contact (AJAX / POST)
├── bd.php              # Connexion à la base de données (exclu via .gitignore)
├── login.php           # Page de connexion de l'administration
├── admin.php           # Tableau de bord d'administration des messages
└── logout.php          # Déconnexion de la session admin