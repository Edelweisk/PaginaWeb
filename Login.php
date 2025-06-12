<?php
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Conexión
$conn = new mysqli("localhost", "root", "root", "login");
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Name = trim($_POST['Name'] ?? '');
    $LastName = trim($_POST['LastName'] ?? '');
    $Gender = $_POST['Gender'] ?? '';
    $User = trim($_POST['User'] ?? '');
    $Email = trim($_POST['Email'] ?? '');
    $pass = $_POST['Contraseña'] ?? '';

    if (isset($_POST['login'])) {
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE Email = ?");
        $stmt->bind_param("s", $Email);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();
        $stmt->close();

        if ($user && password_verify($pass, $user['Contraseña'])) {
            $_SESSION['User'] = $user['User'];
            header("Location: PaginaPrincipal.php");
            exit;
        }
        $mensaje = $user ? "❌ Contraseña incorrecta." : "❌ Usuario no encontrado.";
    }

    if (isset($_POST['register'])) {
        $check = $conn->prepare("SELECT 1 FROM usuario WHERE Email = ?");
        $check->bind_param("s", $Email);
        $check->execute();
        $exists = $check->get_result()->num_rows > 0;
        $check->close();

        if ($exists) {
            $mensaje = "⚠️ El correo ya está registrado.";
        } else {
            $pass_hashed = password_hash($pass, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO usuario (Name, Lastname, Gender, User, Email, Contraseña) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $Name, $LastName, $Gender, $User, $Email, $pass_hashed);
            $mensaje = $stmt->execute() ? "✅ Registro exitoso." : "❌ Error: " . $stmt->error;
            $stmt->close();
        }
    }
}
$conn->close();
?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="Css/FondoLogin.css">
    <link rel="stylesheet" href="Css/Informacion.css">
    <link rel="stylesheet" href="Css/Login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>

<nav class="nav">
    <div class="nav-contenido">
        <h1 class="Logo"><img src="Css/Imagenes/Logo EduMind.png" alt=""></h1>
    </div>
</nav>

<div class="Informacion">
    <h1 class="Texto1">Organiza, Analiza, Mejora</h1>
    <h2 class="Texto2">Tu espacio educativo inteligente</h2>
    <h3 class="Texto3">
    Nuestra plataforma transforma el aprendizaje con IA que te ayuda a organizar tareas, analizar rendimiento y mejorar.
    </h3>
<div class="nav-items">
    <a href="#login" class="nav-item iniciar" onclick="MostrarForm('login')">Iniciar Sesión</a>
    <a href="#registro" class="nav-item registrar" onclick="MostrarForm('registro')">Registrarse</a>
</div>
</div>

<div class="Contenedor">
<!-- Login -->
    <div id="from-login" class="Login" style="display: none;">
    <h2>Iniciar Sesión</h2>
    <form method="POST">
        <input type="text" name="User" placeholder="Usuario" required>
        <input type="email" name="Email" placeholder="Correo Electrónico" required>
        <input type="password" name="Contraseña" placeholder="Contraseña" required>
        <button type="submit" name="login">Iniciar Sesión</button>
    </form>
</div>

<!-- Registro -->
    <div id="from-registro" class="Registro" style="display: none;">
        <h2>Registrarse</h2>
    <form method="POST">
        <input type="text" name="Name" placeholder="Nombre" required>
        <input type="text" name="LastName" placeholder="Apellido" required>
        <div class="Genero">
        <label><input type="radio" name="Gender" value="Male" hidden><span>Masculino</span></label>
        <label><input type="radio" name="Gender" value="Female" hidden><span>Femenino</span></label>
    </div>
        <input type="text" name="User" placeholder="Nombre de Usuario" required>
        <input type="email" name="Email" placeholder="Correo Electrónico" required>
        <input type="password" name="Contraseña" placeholder="Contraseña" required>
        <button type="submit" name="register">Registrarse</button>
    </form>
    </div>
</div>

<?php if ($mensaje): ?>
    <script>alert("<?= $mensaje ?>");</script>
<?php endif; ?>

<script src="JS/Funcionamiento.js"></script>
</body>
</html>
