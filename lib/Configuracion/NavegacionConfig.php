<?php
/*
 * SMIbeta - Navegación Configuración
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
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
namespace Configuracion;

/**
 * Clase NavegacionConfig
 */
class NavegacionConfig {

    protected $sitio_titulo = 'IMPLAN Torreón | Plan Estratégico Metropolitano';
    protected $logotipo     = 'imagenes/implan-barra-logo-chico-gris.png';
    protected $opciones     = array(
        'Mesa 1' => array(
            'Mesa 1 > Datos Generales'  => 'mesa-1/datos-generales.html',
            'Mesa 1 > Programación'     => 'mesa-1/programacion.html',
            'Mesa 1 > Orden del día'    => 'mesa-1/orden-dia.html',
            'Mesa 1 > Comités Técnicos' => array(
                'Mesa 1 > Buen Gobierno'          => 'mesa-1/ct-buen-gobierno.html',
                'Mesa 1 > Desarrollo Económico'   => 'mesa-1/ct-desarrollo-economico.html',
                'Mesa 1 > Desarrollo Social'      => 'mesa-1/ct-desarrollo-social.html',
                'Mesa 1 > Entorno Urbano'         => 'mesa-1/ct-entorno-urbano.html',
                'Mesa 1 > Movilidad y Transporte' => 'mesa-1/ct-movilidad-transporte.html',
                'Mesa 1 > S. y Medio Ambiente'    => 'mesa-1/ct-sustentabilidad-medio-ambiente.html'),
            'Mesa 1 > Fotografías'      => 'mesa-1/fotos.html'),
        'Mesa 2' => array(
            'Mesa 2 > Datos Generales'  => 'mesa-2/datos-generales.html',
            'Mesa 2 > Programación'     => 'mesa-2/programacion.html',
            'Mesa 2 > Orden del día'    => 'mesa-2/orden-dia.html',
            'Mesa 2 > Comités Técnicos' => array(
                'Mesa 2 > Buen Gobierno'          => 'mesa-2/ct-buen-gobierno.html',
                'Mesa 2 > Desarrollo Económico'   => 'mesa-2/ct-desarrollo-economico.html',
                'Mesa 2 > Desarrollo Social'      => 'mesa-2/ct-desarrollo-social.html',
                'Mesa 2 > Entorno Urbano'         => 'mesa-2/ct-entorno-urbano.html',
                'Mesa 2 > Movilidad y Transporte' => 'mesa-2/ct-movilidad-transporte.html',
                'Mesa 2 > S. y Medio Ambiente'    => 'mesa-2/ct-sustentabilidad-medio-ambiente.html'),
            'Mesa 2 > Fotografías'      => 'mesa-2/fotos.html'),
        'Mesa 3' => array(
            'Mesa 3 > Datos Generales'  => 'mesa-3/datos-generales.html',
            'Mesa 3 > Programación'     => 'mesa-3/programacion.html',
            'Mesa 3 > Orden del día'    => 'mesa-3/orden-dia.html',
            'Mesa 3 > Comités Técnicos'     => array(
                'Mesa 3 > Buen Gobierno'          => 'mesa-3/ct-buen-gobierno.html',
                'Mesa 3 > Desarrollo Económico'   => 'mesa-3/ct-desarrollo-economico.html',
                'Mesa 3 > Desarrollo Social'      => 'mesa-3/ct-desarrollo-social.html',
                'Mesa 3 > Entorno Urbano'         => 'mesa-3/ct-entorno-urbano.html',
                'Mesa 3 > Movilidad y Transporte' => 'mesa-3/ct-movilidad-transporte.html',
                'Mesa 3 > S. y Medio Ambiente'    => 'mesa-3/ct-sustentabilidad-medio-ambiente.html')));
    protected $iconos = array(
        'Mesa 1'                    => 'fa fa-calendar-o',
        'Mesa 2'                    => 'fa fa-calendar-o',
        'Mesa 3'                    => 'fa fa-calendar',
        'Programación'              => 'fa fa-tasks',
        'Orden del día'             => 'fa fa-list-ol',
        'Comités Técnicos'          => 'fa fa-users',
        'Buen Gobierno'             => 'fa fa-university',
        'Desarrollo Económico'      => 'fa fa-usd',
        'Desarrollo Social'         => 'fa fa-users',
        'Entorno Urbano'            => 'fa fa-building',
        'Movilidad y Transporte'    => 'fa fa-car',
        'S. y Medio Ambiente'       => 'fa fa-leaf',
        'Fotografías'               => 'fa fa-camera');

} // Clase NavegacionConfig

?>
