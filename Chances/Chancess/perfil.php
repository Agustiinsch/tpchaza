<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Página principal</title>
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/header3.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Playfair:ital,wght@1,300&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Dosis&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Dosis&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap');
    </style>
</head>
<body>
<header>
    <nav class="navegacion">
        <a href="index.php" class="logo">Chances</a>
        <ul class="menu">
          <li><a href="#">¿Porque Chances?</a></li>
          <li><a href="#">Encontrar Trabajo</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
        <div class="barrabusqueda">
          <form>
            <input type="text" placeholder="Buscar..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form> 
        </div>
        <div class="ubiperfil">
          <label class="dropdown">
            <div class="dd-button">
              Perfil
            </div>
            <input type="checkbox" class="dd-input" id="test">
            <ul class="dd-menu">
              <li><a href="perfil.php">Detalles</a></li>
              <li><a href="logout.php" class="red">Cerrar Sesion</a></li>
            </ul>
          </label> 
        </div>       
      </nav>
      <div class="linea"></div>
</header>

<div class="container">
        <div class="publicar">
            <h2>Publicar Trabajo</h2>
            <form action="alta.php" method="post">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required><br>
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required></textarea><br>
                <label for="fechaemision">Fecha Emisión:</label>
                <input type="date" id="fechaemision" name="fechaemision" required><br>
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" required><br>
                <input type="submit" value="Publicar Trabajo">
            </form>
        </div>

        <div class="trabajos">
            <h2>Mis Trabajos</h2>
            <ul>
                <?php
                // Aquí obtendrías los trabajos del usuario y los listarías
                // Puedes utilizar un bucle para mostrar cada trabajo con opciones de editar y eliminar
                ?>
                <li>
                    Título del Trabajo
                    <a href="editar.php?id=ID_DEL_TRABAJO">Editar</a>
                    <a href="eliminar.php?id=ID_DEL_TRABAJO">Eliminar</a>
                </li>
            </ul>
        </div>
    </div>

</body>
</html>

