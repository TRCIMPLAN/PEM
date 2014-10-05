<?php
/*
 * TrcIMPLAN PEM - Mesa 1 - Imprenta
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano Movimiento Libre
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 *
 * @package TrcIMPLAN PEM
 */

// Namespace
namespace Mesa1;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        $this->publicaciones_directorio = 'Mesa1';
        $this->titulo                   = 'Mesa 1';
        $this->descripcion              = '';
        $this->claves                   = 'IMPLAN, Torreon, Plan, Estratégico, Metropolitano, Mesas';
        $this->directorio               = 'mesa-1';
        $this->ruta                     = 'mesa-1/index.html';
        $this->nombre_menu              = 'Mesa 1';
    } // constructor

} // Imprenta

?>
