<?php

namespace App\Services;

use App\Models\Usuario;

class UsuarioService
{
    public function crearUsuario(): Usuario
    {
        return new Usuario("Samuel", "samuelelzaghir@utp.ac.pa");
    }
}