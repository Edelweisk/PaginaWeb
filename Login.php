<?php include 'Php/PhpLogin/Conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EduMind - Acceso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google letra -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="Css/CssLogin/FondoLogin.css">
    <link rel="stylesheet" href="Css/CssLogin/login.css">
</head>
<body>

<div class="logo">
    <img src="Css/CssLogin/Imagenes/LogoEduMind2.png" alt="Logo EduMind">
</div>

<div class="container">
    <!-- Parte informativa -->
    <div class="info">
        <h1>Organiza, Analiza, Mejora</h1>
        <p>Tu espacio educativo inteligente potenciado con IA. <br>
        Ayudamos a estudiantes a mejorar su aprendizaje día a día.</p>
    </div>

    <!-- Área de formulario -->
    <div class="form-area">
        <!-- Login -->
        <div id="from-login" class="form-card active">
            <h2>Iniciar Sesión</h2>
            <form method="POST">
                <input type="text" name="User" placeholder="Usuario" required>
                <input type="email" name="Email" placeholder="Correo Electrónico" required>
                <input type="password" name="Contraseña" placeholder="Contraseña" required>
                <button type="submit" name="login">Iniciar Sesión</button>
            </form>
            <div class="switch-links">
                ¿No tienes cuenta? <a onclick="MostrarForm('registro')">Regístrate aquí</a>
            </div>
        </div>

        <!-- Registro -->
        <div id="from-registro" class="form-card">
            <h2>Registrarse</h2>
            <form method="POST">
                <input type="text" name="Name" placeholder="Nombre" required>
                <input type="text" name="LastName" placeholder="Apellido" required>
                <div class="Genero">
                    <label><input type="radio" name="Gender" value="Male" required><span>Masculino</span></label>
                    <label><input type="radio" name="Gender" value="Female"><span>Femenino</span></label>
                </div>
                <input type="text" name="User" placeholder="Nombre de Usuario" required>
                <input type="email" name="Email" placeholder="Correo Electrónico" required>
                <input type="password" name="Contraseña" placeholder="Contraseña" required>
                <button type="submit" name="register">Registrarse</button>
            </form>
            <div class="switch-links">
                ¿Ya tienes cuenta? <a onclick="MostrarForm('login')">Inicia sesión</a>
            </div>
        </div>
    </div>
</div>

<?php if (isset($mensaje)): ?>
    <script>("<?= $mensaje ?>");</script>
<?php endif; ?>

<script src="JS/JSLogin/Funcionamiento.js"></script>
</body>
</html>