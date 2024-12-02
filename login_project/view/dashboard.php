<!-- view/dashboard.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido al Panel Principal</h1>
    <p>Usuario: <?php echo htmlspecialchars($_SESSION["user"]["username"]);?></p>
    <a href="index.php?action=logout">Cerrar Sesión</a>
</body>
</html>