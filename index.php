<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RandoNature - Club de Randonnée</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <div class="min-h-screen bg-gradient">
        <!-- Header -->
        <header class="header animate-fadeIn">
            <div class="container">
                <div class="contact-info">
                    <i data-lucide="mail"></i>
                    <span>babacar.ndiaye@cdc.sn</span>
                </div>
                <div class="logos">
                    <img src="images/logo1.png" alt="Logo 1" class="logo">
                    <img src="images/logo2.png" alt="Logo 2" class="logo">
                </div>
                <div class="contact-info">
                    <i data-lucide="phone"></i>
                    <span>+221 77 091 52 31</span>
                </div>
            </div>
        </header>

       <!-- Navigation -->
<nav class="navigation">
    <div class="container">
        <ul>
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="#a-propos">Apropos</a></li>
            <li><a href="#partenaires">Partenaire</a></li>
            <li><a href="#a-president">Présentation</a></li>
            <li><a href="formulaire.php">Contact</a></li>

        </ul>
    </div>
</nav>


         <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        /* Hero Section */
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .hero-images {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .hero-images img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .hero-images img.active {
            opacity: 1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }

        .hero-content h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .hero-content p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .scroll-indicator {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 24px;
        }
    </style>
</head>
<body>

    <!-- Hero Section avec Slider -->
    <section id="accueil" class="hero">
        <div class="hero-images">
            <img src="images/baniere3.jpg" class="active" alt="Randonnée 1">
            <img src="images/baniere2.jpg" alt="Randonnée 2">
            <img src="images/baniere3.jpg" alt="Randonnée 3">
             <img src="images/baniere4.jpg" alt="Randonnée 3">
              <img src="images/baniere6.jpg" alt="Randonnée 3">
               <img src="images/baniere7.jpg" alt="Randonnée 3">
                <img src="images/baniere8.jpg" alt="Randonnée 3">
        </div>
        <div class="overlay"></div>
        <div class="container hero-content">
    <h1>Découvrez la Nature Autrement</h1>
    <p>Rejoignez notre communauté de passionnés de randonnée et vivez des aventures inoubliables</p>
    <a href="formulaire.php"><button class="btn-primary">Nous Rejoindre</button></a>
</div>

        <div class="scroll-indicator">
            <i data-lucide="chevron-down"></i>
        </div>
    </section>

    <script>
        let currentIndex = 0;
        const images = document.querySelectorAll('.hero-images img');

        function changeImage() {
            images[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('active');
        }

        setInterval(changeImage, 5000); // Change l'image toutes les 5 secondes
    </script>


         <!-- Apropos de Nous -->
        <section id="a-propos" class="president fade-in-up">
            <div class="container">
                <h2>Apropos de Nous</h2>
                <div class="president-grid">
                    <div class="president-message">
                        <div class="quote-container">
                            <i data-lucide="quote" class="quote-icon"></i>
                            <blockquote>
                                Bienvenue dans notre club de randonnée, un espace convivial pour tous les amoureux de la nature, de l’aventure et de la découverteNous sommes un groupe de passionnés qui partage le goût de l’exploration des paysages naturels, de la marche en plein air et du bien-être physique et mental que procure la randonnée.Notre objectif est simple : promouvoir une vie saine et active tout en découvrant les merveilles de notre région et d’ailleurs. Que vous soyez débutant ou randonneur confirmé, vous êtes le bienvenu parmi nous !Nous organisons régulièrement des sorties en groupe, des randonnées de différents niveaux, des week-ends nature et des moments de partage pour renforcer les liens entre membres.Rejoindre notre club, c’est aussi s’engager dans une communauté solidaire, respectueuse de l’environnement, et animée par des valeurs de partage, de dépassement de soi et de convivialité.Prenez vos chaussures, votre sac à dos, et venez marcher avec nous !
L’aventure vous attend à chaque sentier.
                                
                            </blockquote>
                        </div>
                    </div>
                    <div class="president-image">
                        <img src="images/baniere3.jpg" alt="Président du club">
                    </div>
                </div>
            </div>
        </section>
        <!-- President's Message -->
        <section id="a-president" class="president fade-in-up">
            <div class="container">
                <h2>Le Mot du Président</h2>
                <div class="president-grid">
                    <div class="president-message">
                        <div class="quote-container">
                            <i data-lucide="quote" class="quote-icon"></i>
                            <blockquote>
                                "Chers amis randonneurs, notre club est avant tout une grande famille où 
                                chacun trouve sa place. Ensemble, nous partageons des moments inoubliables 
                                sur les sentiers, découvrons des paysages magnifiques et créons des liens durables. 
                                Rejoignez-nous dans cette belle aventure !"
                                <footer> - Président de RandoNature</footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="president-image">
                        <img src="images/baniere4.jpg" alt="Président du club">
                    </div>
                </div>
            </div>
        </section>

        <style>
            .president-image video {
      /* Définit la largeur maximale à 600px */
    width: 100%;       /* Laisse la vidéo s'adapter au conteneur tout en respectant la largeur maximale */
    height: 400px;      /* Ajuste la hauteur proportionnellement */
    object-fit: cover;
}

        </style>

        <!-- Apropos de Nous -->
<section class="president fade-in-up">
    <div class="container">
        <h2>Notre dernière sortie</h2>
        <div class="president-grid">
            <div class="president-image">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/ksLr38n8ljs" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>

<style>

    body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #1d5dab, #004080);
    background-attachment: fixed;
    background-size: cover;
    color: #fff;
}

    .partners-section {
        padding: 60px 20px;
        color: #fff;
        border-radius: 20px;
        margin-top: 40px;
    }

    .partners-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .partners-header h2 {
        font-size: 2.5rem;
        margin-top: 10px;
    }

    .partners-header .subtitle {
        font-size: 1.1rem;
        color: #d6e7ff;
    }

    .header-icon {
        stroke: #fff;
        margin-bottom: 10px;
    }

    .partners-grid {
        display: flex;
        overflow-x: auto;
        gap: 30px;
        padding: 20px 10px;
        scroll-snap-type: x mandatory;
    }

    .partner-card {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 20px;
        min-width: 220px;
        flex-shrink: 0;
        text-align: center;
        color: #fff;
        scroll-snap-align: center;
        transition: transform 0.3s ease, background 0.3s ease;
    }

    .partner-card:hover {
        background-color: rgba(255, 255, 255, 0.2);
        transform: translateY(-5px);
    }

    .logo-container {
        width: 100px;
        height: 100px;
        margin: 0 auto 15px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .logo-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .partner-card h3 {
        margin: 10px 0 5px;
        font-size: 1.2rem;
    }

    .partner-card p {
        font-size: 0.95rem;
        color: #e0e0e0;
    }

    .partners-grid::-webkit-scrollbar {
        height: 8px;
    }

    .partners-grid::-webkit-scrollbar-thumb {
        background: #ffffff44;
        border-radius: 4px;
    }

    .partners-grid::-webkit-scrollbar-track {
        background: transparent;
    }

    @media (max-width: 600px) {
        .partner-card {
            min-width: 180px;
        }
        .logo-container {
            width: 80px;
            height: 80px;
        }
    }
</style>

<div class="container">
    <section id="partenaires" class="partners-section">
        <div class="partners-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" 
                viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                class="header-icon">
                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/>
                <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/>
                <path d="M18 12h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-2"/>
                <path d="M10 12h4"/>
                <path d="M10 16h4"/>
                <path d="M10 8h4"/>
            </svg>
            <h2>Nos Partenaires</h2>
            <p class="subtitle">Ensemble pour l'innovation et l'excellence</p>
        </div>

        <div class="partners-grid">
            <div class="partner-card">
                <div class="logo-container">
                    <img src="images/par1.jpeg" alt="TechCorp">
                </div>
                <h3>1XBET</h3>
                
            </div>

            <div class="partner-card">
                <div class="logo-container">
                    <img src="images/par2.jpeg" alt="EcoSystems">
                </div>
                <h3>LONASE</h3>
                
            </div>

            <div class="partner-card">
                <div class="logo-container">
                    <img src="images/par3.jpeg" alt="GlobalTech">
                </div>
                <h3>CREDIT DU SENEGAL</h3>
               
            </div>

            <div class="partner-card">
                <div class="logo-container">
                    <img src="images/par4.jpeg" alt="SmartSolutions">
                </div>
                <h3>CREDIT MATUEL</h3>
                
            </div>

             <div class="partner-card">
                <div class="logo-container">
                    <img src="images/par5.jpeg" alt="SmartSolutions">
                </div>
                <h3>YAS</h3>
               
            </div>
             <div class="partner-card">
                <div class="logo-container">
                    <img src="images/par6.jpeg" alt="SmartSolutions">
                </div>
                <h3>MAIRIE DE DAKAR</h3>
                
            </div>
             <div class="partner-card">
                <div class="logo-container">
                    <img src="images/par7.jpeg" alt="SmartSolutions">
                </div>
                <h3>Ministère des affaires étrangères</h3>
                
            </div>
             <div class="partner-card">
                <div class="logo-container">
                    <img src="images/par8.jpeg" alt="SmartSolutions">
                </div>
                <h3> Ministère de l'intérieur 
</h3>
               
            </div>
             <div class="partner-card">
                <div class="logo-container">
                    <img src="images/par9.jpeg" alt="SmartSolutions">
                </div>
                <h3>Ministère des transports 
</h3>
               
            </div>
             <div class="partner-card">
                <div class="logo-container">
                    <img src="images/par10.jpeg" alt="SmartSolutions">
                </div>
                <h3>Ministère de l'environnement 
</h3>
               
            </div>
             <div class="partner-card">
                <div class="logo-container">
                    <img src="images/par11.jpeg" alt="SmartSolutions">
                </div>
                <h3> Ministère de l'urbanisme 
</h3>
                
            </div>
             <div class="partner-card">
                <div class="logo-container">
                    <img src="images/par12.jpeg" alt="SmartSolutions">
                </div>
                <h3> Ministère de la sante 
</h3>
               
            </div>
             <div class="partner-card">
                <div class="logo-container">
                    <img src="images/par13.jpeg" alt="SmartSolutions">
                </div>
                <h3> Ministère de l'sport 
</h3>
                
            </div>
             

            <!-- Ajoute plus de partenaires ici -->
        </div>
    </section>
</div>


         <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
    }

    .footer {
      background-image: url('images/baniere3.jpg');
      background-size: cover;
      background-position: center;
      color: #fff;
      padding-top: 40px;
      position: relative;
    }

    .footer-overlay {
      background-color: rgba(0, 0, 0, 0.75);
      padding: 70px 50px ;
      
    }

    .footer-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      max-width: 1200px;
      margin: auto;
    }

    .footer-section {
      flex: 1 1 220px;
      margin: 20px;
    }

    .footer-section h2,
    .footer-section h3 {
      margin-bottom: 15px;
    }

    .footer-section p,
    .footer-section li,
    .footer-section a {
      font-size: 14px;
      color: #fff;
    }

    .footer-section ul {
      list-style: none;
      padding: 0;
    }

    .footer-section ul li {
      margin-bottom: 10px;
    }

    .footer-section ul li a {
      text-decoration: none;
      transition: 0.3s;
    }

    .footer-section ul li a:hover {
      text-decoration: underline;
    }

    .social-icons a img {
      width: 30px;
      margin-right: 10px;
      vertical-align: middle;
    }

    .footer-bottom {
      text-align: center;
      padding-top: 20px;
      font-size: 13px;
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-overlay">
      <div class="footer-container">
        
        <!-- Logos / About -->
<div class="footer-section logo">
  <div style="display: flex; align-items: center; gap: 15px;">
    <img src="images/logo1.png" alt="Logo 1" class="logo"style="width: 100px; height: auto;">
   <img src="images/logo2.png" alt="Logo 1" class="logo"style="width: 100px; height: auto;">
  </div>
  <p style="margin-top: 15px;">
   Ensemble pour l'innovation et l'excellence
  </p>
</div>


        <!-- Liens rapides -->
        <div class="footer-section links">
          <h3>Liens rapides</h3>
          <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">À propos</a></li>
            <li><a href="#">Partenaires</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <!-- Contact -->
        <div class="footer-section contact">
          <h3>Contact</h3>
          <p>Email : babacar.ndiaye@cdc.sn</p>
          <p>Téléphone : +221 77 091 52 31</p>
          <p>Adresse : Dakar, Sénégal</p>
        </div>

        <!-- Réseaux sociaux -->
        <div class="footer-section social">
          <h3>Suivez-nous</h3>
          <div class="social-icons">
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram"></a>
          </div>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        
      </div>
    </div>
  </footer>
    </div>
    <script src="script.js"></script>

    <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 50, // Ajuste pour éviter que le menu cache la section
                    behavior: "smooth"
                });
            }
        });
    });
</script>

</body>
</html>