<?php

namespace App\Services;

use App\Models\Usuario;

class UsuarioService
{
    public function crearUsuario(): Usuario
    {
        return new Usuario("Samuel", "samuel@utp.ac.pa");
    }
}