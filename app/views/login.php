<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TP2 Entorno</title>
    <link rel="stylesheet" href="/tp2/public/css/style.css">
</head>
<body>
    <div class="login-container">
        <h2> Acceso al Sistema</h2>
        
        <?php if(isset($error) && $error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form method="POST" action="index.php?action=login">
            <input type="text" name="username" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
        
        <div class="info">
            <strong>Usuarios de prueba:</strong><br>
            Usuario: test | Contraseña: 12345
        </div>
        
        <div class="info">
            <strong>Información del entorno:</strong><br>
            PHP: <?php echo phpversion(); ?><br>
            Servidor: <?php echo $_SERVER['SERVER_SOFTWARE']; ?>
        </div>
    </div>
</body>
</html>