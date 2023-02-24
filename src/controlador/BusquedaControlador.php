<?php

namespace dwesgram\controlador;

use dwesgram\modelo\Usuario;
use dwesgram\modelo\UsuarioBd;

class BusquedaControlador extends Controlador
{
    public function usuarios(): Usuario|array|null
    {
        if ($this->denegar()) {
            return null;
        }
        
        if (!$_POST) {
            $this->vista = 'entrada/listado';
            return null;
        }

        $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : null;
            $this->vista = 'entrada/listado';
            return UsuarioBd::filtrar($nombre);
    }
}
