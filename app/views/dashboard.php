<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - TP2 Entorno</title>
    <link rel="stylesheet" href="/tp2/public/css/style.css">
</head>
<body>
    <div class="dashboard-container">
        <h1> ¡Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        
        <div class="info-box">
            <h3> Información del Servidor</h3>
            <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
            <p><strong>Servidor Web:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
            <p><strong>SO del Servidor:</strong> <?php echo PHP_OS; ?></p>
        </div>
        
        <div class="success">
            ✔ Apache y MySQL funcionando correctamente<br>
            ✔ Proyecto accesible desde el navegador<br>
            ✔ Estructura MVC organizada
        </div>
        
        <a href="index.php?action=logout" class="logout-btn">Cerrar Sesión</a>
    </div>
</body>
</html>