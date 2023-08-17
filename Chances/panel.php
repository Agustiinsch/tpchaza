<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['email'])) {
    // El usuario no ha iniciado sesión, redirige a la página de inicio de sesión
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página principal</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['email']; ?></h1>
    <p>Esta es la página principal después de iniciar sesión.</p>
    <p>Aquí puedes mostrar información personalizada o cualquier contenido relevante para el usuario.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
