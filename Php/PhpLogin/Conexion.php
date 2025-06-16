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
            header("Location: PaginaPrincipal.html");
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