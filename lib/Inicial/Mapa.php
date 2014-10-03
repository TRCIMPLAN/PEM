<?php
/*
 * SMIbeta - Mapa
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
namespace Inicial;

/**
 * Clase Mapa
 */
class Mapa {

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '  <!-- MAPA -->';
        $a[] = '  <section id="mapa">';
        $a[] = '    <div class="row">';
        //
        $a[] = '      <div class="col-md-2">';
        $a[] = '        <h4 class="mapa-encabezado">Buen Gobierno</h4>';
        $a[] = '        <ul>';
        $a[] = '          <li><a href="buen-gobierno-coordinacion-metropolitana/mesa-1.html">Mesa 1</a></li>';
        $a[] = '          <li><a href="buen-gobierno-coordinacion-metropolitana/mesa-2.html">Mesa 2</a></li>';
        $a[] = '          <li><a href="buen-gobierno-coordinacion-metropolitana/mesa-3.html">Mesa 3</a></li>';
        $a[] = '        </ul>';
        $a[] = '      </div>';
        //
        $a[] = '      <div class="col-md-2">';
        $a[] = '        <h4 class="mapa-encabezado">Desarrollo Económico</h4>';
        $a[] = '        <ul>';
        $a[] = '          <li><a href="desarrollo-economico-innovacion/mesa-1.html">Mesa 1</a></li>';
        $a[] = '          <li><a href="desarrollo-economico-innovacion/mesa-2.html">Mesa 2</a></li>';
        $a[] = '          <li><a href="desarrollo-economico-innovacion/mesa-3.html">Mesa 3</a></li>';
        $a[] = '        </ul>';
        $a[] = '      </div>';
        //
        $a[] = '      <div class="col-md-2">';
        $a[] = '        <h4 class="mapa-encabezado">Desarrollo Social</h4>';
        $a[] = '        <ul>';
        $a[] = '          <li><a href="desarrollo-social/mesa-1.html">Mesa 1</a></li>';
        $a[] = '          <li><a href="desarrollo-social/mesa-2.html">Mesa 2</a></li>';
        $a[] = '          <li><a href="desarrollo-social/mesa-3.html">Mesa 3</a></li>';
        $a[] = '        </ul>';
        $a[] = '      </div>';
        //
        $a[] = '      <div class="col-md-2">';
        $a[] = '        <h4 class="mapa-encabezado">Entorno Urbano</h4>';
        $a[] = '        <ul>';
        $a[] = '          <li><a href="entorno-urbano/mesa-1.html">Mesa 1</a></li>';
        $a[] = '          <li><a href="entorno-urbano/mesa-2.html">Mesa 2</a></li>';
        $a[] = '          <li><a href="entorno-urbano/mesa-3.html">Mesa 3</a></li>';
        $a[] = '        </ul>';
        $a[] = '      </div>';
        //
        $a[] = '      <div class="col-md-2">';
        $a[] = '        <h4 class="mapa-encabezado">Movilidad y Transporte</h4>';
        $a[] = '        <ul>';
        $a[] = '          <li><a href="movilidad-transporte/mesa-1.html">Mesa 1</a></li>';
        $a[] = '          <li><a href="movilidad-transporte/mesa-2.html">Mesa 2</a></li>';
        $a[] = '          <li><a href="movilidad-transporte/mesa-3.html">Mesa 3</a></li>';
        $a[] = '        </ul>';
        $a[] = '      </div>';
        //
        $a[] = '      <div class="col-md-2">';
        $a[] = '        <h4 class="mapa-encabezado">S. y Medio Ambiente</h4>';
        $a[] = '        <ul>';
        $a[] = '          <li><a href="sustentabilidad-medio-ambiente/mesa-1.html">Mesa 1</a></li>';
        $a[] = '          <li><a href="sustentabilidad-medio-ambiente/mesa-2.html">Mesa 2</a></li>';
        $a[] = '          <li><a href="sustentabilidad-medio-ambiente/mesa-3.html">Mesa 3</a></li>';
        $a[] = '        </ul>';
        $a[] = '      </div>';
        //
        $a[] = '    </div>';
        $a[] = '  </section>';
        // Entregar
        return implode("\n", $a)."\n";
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase Mapa

?>
