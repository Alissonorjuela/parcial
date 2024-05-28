<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/Styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <nav class="navbar">
                <div class="brand">
                    <h2>A<span>R</span></h2>
                </div>
                <ul class="menu" id="menu">
                    <li><a href="#" class="active">Inicio</a></li>
                    <li><a href="#about">Quién Soy</a></li>
                    <li><a href="#portfolio">Portafolio</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
                <button class="burger-menu" id="burger-menu">
                    <ion-icon name="menu-outline"></ion-icon>
                </button>
            </nav>
        </header>
        <main class="main">
            <div class="info-content">
                <h1>Soy <span>Alisson</span> Rojas</h1>
                <p>Técnica en sistemas y estudiante de ingeniería de sistemas.</p>
            </div>
            <img src="imagenes/alisommmm.png" alt="Alisson Rojas">
        </main>
    </div>
    <section class="about-me" id="about">
        <img src="imagenes/Imagen2.png" alt="Sobre mí">
        <div class="about-info">
            <h2>Sobre mí</h2>
            <div class="divider"></div>
            <p>Soy estudiante de ingeniería en sistemas de la Universidad Uniminuto y me encuentro cursando cuarto semestre. Me gradué del Colegio Espíritu Santo Marianistas en el año 2021 con el título de técnico en sistemas del SENA. Mi objetivo es adquirir experiencia laboral en el campo de la ingeniería para luego especializarme en una rama específica. Estoy comprometido con el aprendizaje continuo y con contribuir al desarrollo y la innovación en esta área.</p>
        </div>
    </section>
    <section class="portfolio" id="portfolio">
        <div class="portfolio-heading">
            <h1>Mi Portfolio</h1>
            <div class="divider"></div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card__img"><img src="imagenes/certificado1.png" alt="Certificado 1"></div>
            </div>
            <div class="card">
                <div class="card__img"><img src="imagenes/cartificado2,4.jpg" alt="Certificado 2"></div>
            </div>
            <div class="card">
                <div class="card__img"><img src="imagenes/certificados.jpg" alt="Certificados"></div>
            </div>
        </div>
    </section>
    <section class="contact-section" id="contacto">
        <div class="contact-heading">
            <h1>Contáctame</h1>
            <div class="divider"></div>
            <div class="contact-info">
                <h2>Hola, soy Alisson Rojas</h4>
                <h4>Número de teléfono: 3052002677</h4>
                <h4>Dirección: TRNA 9 N 44A***</h4>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('burger-menu').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('active');
        });
    </script>
</body>
</html>
