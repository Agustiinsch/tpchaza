<?php
require_once 'conexion.php';

$nombre = $apellido = $email = $contrasena = '';
$politicas_aceptadas = false;

if (isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $politicas_aceptadas = isset($_POST['politicas']);

    if (empty($nombre) || empty($apellido) || empty($email) || empty($contrasena) || !$politicas_aceptadas) {
        $error = "Por favor, completa todos los campos y acepta las políticas de privacidad.";
    } else {
        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = $conexion->query($query);

        if ($result && $result->num_rows > 0) {
            $error = "El email ya está registrado. Por favor, utiliza otro email.";
        } else {
            $query = "INSERT INTO usuarios (nombre, apellido, email, contrasena) VALUES ('$nombre', '$apellido', '$email', '$contrasena')";
            $result = $conexion->query($query);

            if ($result) {
                header('Location: panel.php');
                exit();
            } else {
                $error = "Error en el registro. Por favor, inténtalo nuevamente.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/registrarse.css">
  <title>Registrarse</title>
</head>
<body>
    <?php if (isset($error)) { ?>
        <div class="error-message">
            <p><?php echo $error; ?></p>
        </div>
    <?php } ?>
    <?php if (isset($message)) { ?>
        <div class="success-message">
            <p><?php echo $message; ?></p>
        </div>
    <?php } ?>
<section class="ubicontenido">
    <div class="contenido">
        <h1>Registrarse</h1>
    <form action="registro.php" method="POST">
          <div class="nombre-apellido">
            <div class="campo">
              <label for="nombre">Nombre:</label>
              <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
            </div>
            <div class="campo">
              <label for="apellido">Apellido:</label>
              <input type="text" id="apellido" name="apellido" value="<?php echo $apellido; ?>">
            </div>
          </div>
          
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" value="<?php echo $email; ?>">

          
          <label for="contrasena">Contraseña:</label>
          <input type="password" id="password" name="contrasena" value="<?php echo $contrasena; ?>">
          <input type="submit" name="registro" value="Registrarse">
          <!--<button type="submit"><a href="index.php">Registrarse</a></button>-->
          
          <div class="contenedorterminos">
            <div class="ubiterminos">
                Si estoy enterado de <a href="terminos.html">Términos de servicio de Chances</a> incluido el <a href="acuerdo.html">Acuerdo de Usuario</a>
                y la <a href="terminos.html">Política de privacidad </a>
            </div>
            <label class="checkbox-container">
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
          </div>
        </form>
    </div>
  </section>
</body>
</html>


