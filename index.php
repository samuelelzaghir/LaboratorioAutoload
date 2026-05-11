<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Services\UsuarioService;

$servicio = new UsuarioService();
$usuario = $servicio->crearUsuario();

$resultado = $usuario->getInformacion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio Autoload PSR-4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="contenedor">
        <h1>Laboratorio Autoload PSR-4</h1>

        <p>Implementación de carga automática utilizando Composer.</p>

        <div class="resultado">
            <?php echo $resultado; ?>
        </div>

        <div class="footer">
            Desarrollo de Software VII - UTP
        </div>
    </div>

</body>
</html>