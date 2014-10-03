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
/*  protected $iconos = array(
        'Análisis Publicados'       => 'fa fa-lightbulb-o',
        'Buen Gobierno'             => 'fa fa-university',
        'Desarrollo Económico'      => 'fa fa-usd',
        'Desarrollo Social'         => 'fa fa-users',
        'Entorno Urbano'            => 'fa fa-building',
        'Movilidad y Transporte'    => 'fa fa-car',
        'S. y Medio Ambiente'       => 'fa fa-leaf',
        'Indicadores'               => 'fa fa-area-chart',
        'Introducción al SMI'       => 'fa fa-file-text-o',
        'Categorías'                => 'fa fa-th-list',
        'Indicadores Torreón'       => 'fa fa-table',
        'Indicadores Gómez Palacio' => 'fa fa-table',
        'Indicadores Lerdo'         => 'fa fa-table',
        'Indicadores Matamoros'     => 'fa fa-table',
        'Indicadores La Laguna'     => 'fa fa-table',
        'Información Geográfica'    => 'fa fa-map-marker',
        'Introduccion al SIG'       => 'fa fa-file-text-o',
        'Banco de Proyectos'        => 'fa fa-check-square',
        'Plata Laguna'              => 'fa fa-certificate',
        'Institucional'             => 'fa fa-building-o',
        'Consejo Directivo'         => 'fa fa-users',
        'Comunicados'               => 'fa fa-comments',
        'Eventos'                   => 'fa fa-folder-o',
        'Sala de Prensa'            => 'fa fa-folder-o',
        'Contacto'                  => 'fa fa-phone'); */

} // Clase NavegacionConfig

?>
