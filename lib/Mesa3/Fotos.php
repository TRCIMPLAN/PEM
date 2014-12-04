<?php
/*
 * TrcIMPLAN PEM - Mesa 3 - Fotos
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
 * @package TrcIMPLAN PEM
 */

// Namespace
namespace Mesa3;

/**
 * Clase Fotos
 */
class Fotos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'Fotografías';
     // $this->autor            = 'Autor';
        $this->fecha            = '2014-12-04';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'fotos';
     // $this->imagen_previa    = 'fotos/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="fotos/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = '';
        $this->claves           = 'IMPLAN, Torreon, Fotos';
        $this->categorias       = array('Mesa 3', 'Fotos');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio       = 'mesa-3';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu      = 'Mesa 3 > Fotografías';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // El contenido HTML y el JavaScript
        $this->contenido        = <<<FINAL
<!-- Fotos Guillermo -->

<a href="fotos-guillermo/01.jpg"><img class="contenido-imagen" src="fotos-guillermo/01-previa.jpg"></a>
<a href="fotos-guillermo/02.jpg"><img class="contenido-imagen" src="fotos-guillermo/02-previa.jpg"></a>
<a href="fotos-guillermo/03.jpg"><img class="contenido-imagen" src="fotos-guillermo/03-previa.jpg"></a>
<a href="fotos-guillermo/04.jpg"><img class="contenido-imagen" src="fotos-guillermo/04-previa.jpg"></a>
<a href="fotos-guillermo/05.jpg"><img class="contenido-imagen" src="fotos-guillermo/05-previa.jpg"></a>
<a href="fotos-guillermo/06.jpg"><img class="contenido-imagen" src="fotos-guillermo/06-previa.jpg"></a>
<a href="fotos-guillermo/07.jpg"><img class="contenido-imagen" src="fotos-guillermo/07-previa.jpg"></a>
<a href="fotos-guillermo/08.jpg"><img class="contenido-imagen" src="fotos-guillermo/08-previa.jpg"></a>
<a href="fotos-guillermo/09.jpg"><img class="contenido-imagen" src="fotos-guillermo/09-previa.jpg"></a>
<a href="fotos-guillermo/10.jpg"><img class="contenido-imagen" src="fotos-guillermo/10-previa.jpg"></a>

<a href="fotos-guillermo/11.jpg"><img class="contenido-imagen" src="fotos-guillermo/11-previa.jpg"></a>
<a href="fotos-guillermo/12.jpg"><img class="contenido-imagen" src="fotos-guillermo/12-previa.jpg"></a>
<a href="fotos-guillermo/13.jpg"><img class="contenido-imagen" src="fotos-guillermo/13-previa.jpg"></a>
<a href="fotos-guillermo/14.jpg"><img class="contenido-imagen" src="fotos-guillermo/14-previa.jpg"></a>
<a href="fotos-guillermo/15.jpg"><img class="contenido-imagen" src="fotos-guillermo/15-previa.jpg"></a>
<a href="fotos-guillermo/16.jpg"><img class="contenido-imagen" src="fotos-guillermo/16-previa.jpg"></a>
<a href="fotos-guillermo/17.jpg"><img class="contenido-imagen" src="fotos-guillermo/17-previa.jpg"></a>
<a href="fotos-guillermo/18.jpg"><img class="contenido-imagen" src="fotos-guillermo/18-previa.jpg"></a>
<a href="fotos-guillermo/19.jpg"><img class="contenido-imagen" src="fotos-guillermo/19-previa.jpg"></a>
<a href="fotos-guillermo/20.jpg"><img class="contenido-imagen" src="fotos-guillermo/20-previa.jpg"></a>

<a href="fotos-guillermo/21.jpg"><img class="contenido-imagen" src="fotos-guillermo/21-previa.jpg"></a>
<a href="fotos-guillermo/22.jpg"><img class="contenido-imagen" src="fotos-guillermo/22-previa.jpg"></a>
<a href="fotos-guillermo/23.jpg"><img class="contenido-imagen" src="fotos-guillermo/23-previa.jpg"></a>
<a href="fotos-guillermo/24.jpg"><img class="contenido-imagen" src="fotos-guillermo/24-previa.jpg"></a>
<a href="fotos-guillermo/25.jpg"><img class="contenido-imagen" src="fotos-guillermo/25-previa.jpg"></a>
<a href="fotos-guillermo/26.jpg"><img class="contenido-imagen" src="fotos-guillermo/26-previa.jpg"></a>
<a href="fotos-guillermo/27.jpg"><img class="contenido-imagen" src="fotos-guillermo/27-previa.jpg"></a>
<a href="fotos-guillermo/28.jpg"><img class="contenido-imagen" src="fotos-guillermo/28-previa.jpg"></a>
<a href="fotos-guillermo/29.jpg"><img class="contenido-imagen" src="fotos-guillermo/29-previa.jpg"></a>
<a href="fotos-guillermo/30.jpg"><img class="contenido-imagen" src="fotos-guillermo/30-previa.jpg"></a>

<a href="fotos-guillermo/31.jpg"><img class="contenido-imagen" src="fotos-guillermo/31-previa.jpg"></a>
<a href="fotos-guillermo/32.jpg"><img class="contenido-imagen" src="fotos-guillermo/32-previa.jpg"></a>
<a href="fotos-guillermo/33.jpg"><img class="contenido-imagen" src="fotos-guillermo/33-previa.jpg"></a>
<a href="fotos-guillermo/34.jpg"><img class="contenido-imagen" src="fotos-guillermo/34-previa.jpg"></a>
<a href="fotos-guillermo/35.jpg"><img class="contenido-imagen" src="fotos-guillermo/35-previa.jpg"></a>
<a href="fotos-guillermo/36.jpg"><img class="contenido-imagen" src="fotos-guillermo/36-previa.jpg"></a>
<a href="fotos-guillermo/37.jpg"><img class="contenido-imagen" src="fotos-guillermo/37-previa.jpg"></a>
<a href="fotos-guillermo/38.jpg"><img class="contenido-imagen" src="fotos-guillermo/38-previa.jpg"></a>
<a href="fotos-guillermo/39.jpg"><img class="contenido-imagen" src="fotos-guillermo/39-previa.jpg"></a>
<a href="fotos-guillermo/40.jpg"><img class="contenido-imagen" src="fotos-guillermo/40-previa.jpg"></a>

<a href="fotos-guillermo/41.jpg"><img class="contenido-imagen" src="fotos-guillermo/31-previa.jpg"></a>
<a href="fotos-guillermo/42.jpg"><img class="contenido-imagen" src="fotos-guillermo/32-previa.jpg"></a>
<a href="fotos-guillermo/43.jpg"><img class="contenido-imagen" src="fotos-guillermo/33-previa.jpg"></a>
<a href="fotos-guillermo/44.jpg"><img class="contenido-imagen" src="fotos-guillermo/34-previa.jpg"></a>
<a href="fotos-guillermo/45.jpg"><img class="contenido-imagen" src="fotos-guillermo/35-previa.jpg"></a>
<a href="fotos-guillermo/46.jpg"><img class="contenido-imagen" src="fotos-guillermo/36-previa.jpg"></a>

<!-- Fotos Luis Gutiérrez -->

<a href="fotos-luis-gutierrez/01.jpg"><img class="contenido-imagen" src="fotos-luis-gutierrez/01-previa.jpg"></a>
<a href="fotos-luis-gutierrez/02.jpg"><img class="contenido-imagen" src="fotos-luis-gutierrez/02-previa.jpg"></a>
<a href="fotos-luis-gutierrez/03.jpg"><img class="contenido-imagen" src="fotos-luis-gutierrez/03-previa.jpg"></a>
<a href="fotos-luis-gutierrez/04.jpg"><img class="contenido-imagen" src="fotos-luis-gutierrez/04-previa.jpg"></a>
<a href="fotos-luis-gutierrez/05.jpg"><img class="contenido-imagen" src="fotos-luis-gutierrez/05-previa.jpg"></a>
<a href="fotos-luis-gutierrez/06.jpg"><img class="contenido-imagen" src="fotos-luis-gutierrez/06-previa.jpg"></a>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Fotos

?>
