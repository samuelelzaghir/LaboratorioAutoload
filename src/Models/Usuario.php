<?php

namespace App\Models;

class Usuario
{
    private string $nombre;
    private string $correo;

    public function __construct(string $nombre, string $correo)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function getInformacion(): string
    {
        return "Usuario: {$this->nombre} - Correo: {$this->correo}";
    }
}