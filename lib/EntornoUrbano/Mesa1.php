<?php
/*
 * TrcIMPLAN PEM - DESCRIPCION
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
namespace EntornoUrbano;

/**
 * Clase Mesa1
 */
class Mesa1 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'Entorno Urbano - Mesa 1';
     // $this->autor         = 'Autor';
        $this->fecha         = '2014-10-03';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = 'mesa-1';
     // $this->imagen_previa = 'mesa-1/imagen-previa.jpg';
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="mesa-1/encabezado.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = '.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->categorias    = array('Talleres');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio    = 'entorno-urbano';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu   = 'Entorno Urbano > Mesa 1';
        //
        // Definir lenguetas
        //
        $lenguetas = new \Base\Lenguetas();
        $lenguetas->agregar('comite-tecnico', 'Comité Técnico', $this->cargar_archivo_markdown('lib/EntornoUrbano/Mesa1ComiteTecnico.md'));
        $lenguetas->agregar('programacion',   'Programación',   $this->cargar_archivo_markdown('lib/EntornoUrbano/Mesa1Programacion.md'));
        $lenguetas->agregar('diagnostico',    'Diagnóstico',    $this->cargar_archivo_markdown('lib/EntornoUrbano/Mesa1Diagnostico.md'));
        $lenguetas->agregar('multimedia',     'Multimedia',     $this->cargar_archivo_markdown('lib/EntornoUrbano/Mesa1Multimedia.md'));
        //
        // El contenido HTML y el JavaScript
        //
        $this->contenido  = $lenguetas->html();
        $this->javascript = $lenguetas->javascript();
    } // constructor

} // Clase Mesa1

?>
