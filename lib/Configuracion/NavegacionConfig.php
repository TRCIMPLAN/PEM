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
            'Mesa 1 > Programación'         => 'mesa-1/programacion.html',
            'Mesa 1 > Programación del día' => 'mesa-1/programacion-dia.html',
            'Mesa 1 > Comités Técnicos'     => array(
                'Mesa 1 > Buen Gobierno'          => 'mesa-1/comite-tecnico-buen-gobierno.html',
                'Mesa 1 > Desarrollo Económico'   => 'mesa-1/comite-tecnico-desarrollo-economico.html',
                'Mesa 1 > Desarrollo Social'      => 'mesa-1/comite-tecnico-desarrollo-social.html',
                'Mesa 1 > Entorno Urbano'         => 'mesa-1/comite-tecnico-entorno-urbano.html',
                'Mesa 1 > Movilidad y Transporte' => 'mesa-1/comite-tecnico-movilidad-transporte.html',
                'Mesa 1 > S. y Medio Ambiente'    => 'mesa-1/comite-tecnico-medio-ambiente.html')),
        'Buen Gobierno'          => array(
            'Buen Gobierno > Mesa 1'          => 'buen-gobierno-coordinacion-metropolitana/mesa-1.html',
            'Buen Gobierno > Mesa 2'          => 'buen-gobierno-coordinacion-metropolitana/mesa-2.html',
            'Buen Gobierno > Mesa 3'          => 'buen-gobierno-coordinacion-metropolitana/mesa-3.html'),
        'Desarrollo Económico'   => array(
            'Desarrollo Económico > Mesa 1'   => 'desarrollo-economico-innovacion/mesa-1.html',
            'Desarrollo Económico > Mesa 2'   => 'desarrollo-economico-innovacion/mesa-2.html',
            'Desarrollo Económico > Mesa 3'   => 'desarrollo-economico-innovacion/mesa-3.html'),
        'Desarrollo Social'      => array(
            'Desarrollo Social > Mesa 1'      => 'desarrollo-social/mesa-1.html',
            'Desarrollo Social > Mesa 2'      => 'desarrollo-social/mesa-2.html',
            'Desarrollo Social > Mesa 3'      => 'desarrollo-social/mesa-3.html'),
        'Entorno Urbano'         => array(
            'Entorno Urbano > Mesa 1'         => 'entorno-urbano/mesa-1.html',
            'Entorno Urbano > Mesa 2'         => 'entorno-urbano/mesa-2.html',
            'Entorno Urbano > Mesa 3'         => 'entorno-urbano/mesa-3.html'),
        'Movilidad y Transporte' => array(
            'Movilidad y Transporte > Mesa 1' => 'movilidad-transporte/mesa-1.html',
            'Movilidad y Transporte > Mesa 2' => 'movilidad-transporte/mesa-2.html',
            'Movilidad y Transporte > Mesa 3' => 'movilidad-transporte/mesa-3.html'),
        'S. y Medio Ambiente'    => array(
            'S. y Medio Ambiente > Mesa 1'    => 'sustentabilidad-medio-ambiente/mesa-1.html',
            'S. y Medio Ambiente > Mesa 2'    => 'sustentabilidad-medio-ambiente/mesa-2.html',
            'S. y Medio Ambiente > Mesa 3'    => 'sustentabilidad-medio-ambiente/mesa-3.html'));
    protected $iconos = array(
        'Buen Gobierno'             => 'fa fa-university',
        'Desarrollo Económico'      => 'fa fa-usd',
        'Desarrollo Social'         => 'fa fa-users',
        'Entorno Urbano'            => 'fa fa-building',
        'Movilidad y Transporte'    => 'fa fa-car',
        'S. y Medio Ambiente'       => 'fa fa-leaf');

} // Clase NavegacionConfig

?>
