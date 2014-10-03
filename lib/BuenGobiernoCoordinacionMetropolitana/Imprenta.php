<?php
/*
 * TrcIMPLAN PEM - Buen Gobierno y Coordinación Metropolitana
 *
 * Copyright (C) 2014 IMPLAN Torreón
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

// Namespace
namespace BuenGobiernoCoordinacionMetropolitana;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        $this->publicaciones_directorio = 'BuenGobiernoCoordinacionMetropolitana';
        $this->titulo                   = 'Buen Gobierno y Coordinación Metropolitana';
        $this->descripcion              = '.';
        $this->claves                   = 'IMPLAN, Torreon, ';
        $this->directorio               = 'buen-gobierno-coordinacion-metropolitana';
        $this->ruta                     = 'buen-gobierno-coordinacion-metropolitana/index.html';
        $this->nombre_menu              = 'Buen Gobierno';
    } // constructor

} // Clase Imprenta

?>
