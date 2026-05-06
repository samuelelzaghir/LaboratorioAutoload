<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Services\UsuarioService;

$servicio = new UsuarioService();
$usuario = $servicio->crearUsuario();

echo $usuario->getInformacion();