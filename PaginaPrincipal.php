<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio | EduMind</title>
  <link rel="stylesheet" href="Css/CssPrincipal/DiseñoPrincipal.css" />
  <link rel="stylesheet" href="Css/CssPrincipal/Banners.css">
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

</head>
<body>

  <!-- Menú de navegación -->
  <header class="navbar">
    <div class="logo">
      <img src="Css/CssPrincipal/Imagenes/LogoEduMind2.png" alt="Logo" /> EduMind
    </div>
    <nav class="menu" id="nav-menu">
      <a href="#">Inicio</a>
      <a href="#">Funcionalidades</a>
      <a href="#">Precios</a>
      <a href="#">Contacto</a>
    </nav>
    <div class="acciones">
      <a href="Login.php" class="btn-link">Inicia sesión</a>
      <a href="Login.php" class="btn-registrarse">Regístrate gratis</a>
    </div>
  </header>

  <!-- principal -->
  <main class="principal">
    <h1 data-aos="fade-up">Productividad para Estudiantes Inteligentes</h1>
    <p class="subtitulo" data-aos="fade-up" data-aos-delay="100">Una plataforma educativa enfocada en la organización, análisis y mejora del aprendizaje.</p>

    <div class="tarjetas">
     <div class ="card2">
      <div class="card" data-aos="zoom-in">
        <h2>📋 Tareas</h2>
        <p>Organiza y gestiona tus tareas con eficiencia.</p>
        </div>
      </div>
      <div class ="card2">
        <div class="card" data-aos="zoom-in" data-aos-delay="100">
        <h2>📊 Rendimiento</h2>
        <p>Analiza tu progreso y recibe sugerencias personalizadas.</p>
        </div>
      </div>
       <div class ="card2">
      <div class="card" data-aos="zoom-in" data-aos-delay="200">
        <h2>📅 Calendario</h2>
        <p>Recibe notificaciones y recordatorios de tus actividades.</p>
      </div>
      </div>
      <div class ="card2">
        <div class="card" data-aos="zoom-in" data-aos-delay="100">
        <h2>💼 Equipo</h2>
        <p>Analiza tu progreso y recibe sugerencias personalizadas.</p>
        </div>
      </div>
    </div>
  </main>

  <!-- Beneficios -->
  <section class="beneficios">
    <h2 data-aos="fade-up">¿Por qué elegir EduMind?</h2>
    <div class="beneficio" data-aos="fade-up" data-aos-delay="100">
      <p>✅ Planifica tu aprendizaje con ayuda de inteligencia artificial.</p>
    </div>
    <div class="beneficio" data-aos="fade-up" data-aos-delay="200">
      <p>✅ Visualiza tu progreso y mejora tus hábitos de estudio.</p>
    </div>
    <div class="beneficio" data-aos="fade-up" data-aos-delay="300">
      <p>✅ Recibe notificaciones inteligentes y recordatorios de tus metas.</p>
    </div>
  </section>

<section class="carrusel-logos">
  <div class="carrusel">
    <img src="Css/CssPrincipal/Plataformas/Google-Classroom-Logo.png" data-aos="fade.left" data-aos-delay="100" alt="Google Classroom">
    <img src="Css/CssPrincipal/Plataformas/Teams.png" data-aos="fade.left" data-aos-delay="200"  alt="Microsoft Teams">
    <img src="Css/CssPrincipal/Plataformas/Zoom.png" data-aos="fade.left" data-aos-delay="300"  alt="Zoom">
    <img src="Css/CssPrincipal/Plataformas/Moodle.png" data-aos="fade.left" data-aos-delay="400"  alt="Moodle">
    <!-- repetir para efecto continuo -->
   <img src="Css/CssPrincipal/Plataformas/Google-Classroom-Logo.png" data-aos="fade.left" data-aos-delay="500"  alt="Google Classroom">
    <img src="Css/CssPrincipal/Plataformas/Teams.png" data-aos="fade.left" data-aos-delay="600"  alt="Microsoft Teams">
    <img src="Css/CssPrincipal/Plataformas/Zoom.png" data-aos="fade.left" data-aos-delay="700"  alt="Zoom">
    <img src="Css/CssPrincipal/Plataformas/Moodle.png" data-aos="fade.left" data-aos-delay="800"  alt="Moodle">
  </div>
</section>




  <!-- Footer -->
  <footer class="footer">
    <p>© 2025 EduMind. Todos los derechos reservados.</p>
    <div class="social">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>

  <!-- AOS animacion Script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
