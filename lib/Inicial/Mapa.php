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
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <h4 class="mapa-encabezado">Mesa 1</h4>';
        $a[] = '        <ul>';
        $a[] = '          <li><a href="mesa-1/datos-generales.html">Datos Generales</a></li>';
        $a[] = '          <li><a href="mesa-1/programacion.html">Programación</a></li>';
        $a[] = '          <li><a href="mesa-1/orden-dia.html">Orden del día</a></li>';
        $a[] = '          <li><h4>Comités Técnicos</h4></li>';
        $a[] = '          <ul>';
        $a[] = '            <li><a href="mesa-1/ct-buen-gobierno.html">Buen Gobierno</a></li>';
        $a[] = '            <li><a href="mesa-1/ct-desarrollo-economico.html">Desarrollo Económico</a></li>';
        $a[] = '            <li><a href="mesa-1/ct-desarrollo-social.html">Desarrollo Social</a></li>';
        $a[] = '            <li><a href="mesa-1/ct-entorno-urbano.html">Entorno Urbano</a></li>';
        $a[] = '            <li><a href="mesa-1/ct-movilidad-transporte.html">Movilidad y Transporte</a></li>';
        $a[] = '            <li><a href="mesa-1/ct-sustentabilidad-medio-ambiente.html">S. y Medio Ambiente</a></li>';
        $a[] = '          </ul>';
        $a[] = '        </ul>';
        $a[] = '      </div>';
        //
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <h4 class="mapa-encabezado">Mesa 2</h4>';
        $a[] = '        <ul>';
        $a[] = '          <li><a href="mesa-2/datos-generales.html">Datos Generales</a></li>';
        $a[] = '          <li><a href="mesa-2/programacion.html">Programación</a></li>';
        $a[] = '          <li><a href="mesa-2/orden-dia.html">Orden del día</a></li>';
        $a[] = '          <li><h4>Comités Técnicos</h4></li>';
        $a[] = '          <ul>';
        $a[] = '            <li><a href="mesa-2/ct-buen-gobierno.html">Buen Gobierno</a></li>';
        $a[] = '            <li><a href="mesa-2/ct-desarrollo-economico.html">Desarrollo Económico</a></li>';
        $a[] = '            <li><a href="mesa-2/ct-desarrollo-social.html">Desarrollo Social</a></li>';
        $a[] = '            <li><a href="mesa-2/ct-entorno-urbano.html">Entorno Urbano</a></li>';
        $a[] = '            <li><a href="mesa-2/ct-movilidad-transporte.html">Movilidad y Transporte</a></li>';
        $a[] = '            <li><a href="mesa-2/ct-sustentabilidad-medio-ambiente.html">S. y Medio Ambiente</a></li>';
        $a[] = '          </ul>';
        $a[] = '        </ul>';
        $a[] = '      </div>';
        //
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <h4 class="mapa-encabezado">Mesa 3</h4>';
        $a[] = '        <ul>';
        $a[] = '          <li><a href="mesa-3/datos-generales.html">Datos Generales</a></li>';
        $a[] = '          <li><a href="mesa-3/programacion.html">Programación</a></li>';
        $a[] = '          <li><a href="mesa-3/orden-dia.html">Orden del día</a></li>';
        $a[] = '          <li><h4>Comités Técnicos</h4></li>';
        $a[] = '          <ul>';
        $a[] = '            <li><a href="mesa-3/ct-buen-gobierno.html">Buen Gobierno</a></li>';
        $a[] = '            <li><a href="mesa-3/ct-desarrollo-economico.html">Desarrollo Económico</a></li>';
        $a[] = '            <li><a href="mesa-3/ct-desarrollo-social.html">Desarrollo Social</a></li>';
        $a[] = '            <li><a href="mesa-3/ct-entorno-urbano.html">Entorno Urbano</a></li>';
        $a[] = '            <li><a href="mesa-3/ct-movilidad-transporte.html">Movilidad y Transporte</a></li>';
        $a[] = '            <li><a href="mesa-3/ct-sustentabilidad-medio-ambiente.html">S. y Medio Ambiente</a></li>';
        $a[] = '          </ul>';
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
