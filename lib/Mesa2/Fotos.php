<?php
/*
 * TrcIMPLAN PEM - Mesa 2 - Fotos
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
namespace Mesa2;

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
        $this->fecha            = '2014-11-04';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'fotos';
     // $this->imagen_previa    = 'fotos/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="fotos/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = '';
        $this->claves           = 'IMPLAN, Torreon, Fotos';
        $this->categorias       = array('Mesa 2', 'Fotos');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio       = 'mesa-2';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu      = 'Mesa 2 > Fotografías';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // El contenido HTML y el JavaScript
        $this->contenido        = <<<FINAL

<!-- Fotos Oscar -->

<a href="fotos-oscar/01.jpg"><img class="contenido-imagen" src="fotos-oscar/01-previa.jpg"></a>
<a href="fotos-oscar/02.jpg"><img class="contenido-imagen" src="fotos-oscar/02-previa.jpg"></a>
<a href="fotos-oscar/03.jpg"><img class="contenido-imagen" src="fotos-oscar/03-previa.jpg"></a>
<a href="fotos-oscar/04.jpg"><img class="contenido-imagen" src="fotos-oscar/04-previa.jpg"></a>
<a href="fotos-oscar/05.jpg"><img class="contenido-imagen" src="fotos-oscar/05-previa.jpg"></a>
<a href="fotos-oscar/06.jpg"><img class="contenido-imagen" src="fotos-oscar/06-previa.jpg"></a>
<a href="fotos-oscar/07.jpg"><img class="contenido-imagen" src="fotos-oscar/07-previa.jpg"></a>
<a href="fotos-oscar/08.jpg"><img class="contenido-imagen" src="fotos-oscar/08-previa.jpg"></a>
<a href="fotos-oscar/09.jpg"><img class="contenido-imagen" src="fotos-oscar/09-previa.jpg"></a>
<a href="fotos-oscar/10.jpg"><img class="contenido-imagen" src="fotos-oscar/10-previa.jpg"></a>

<a href="fotos-oscar/11.jpg"><img class="contenido-imagen" src="fotos-oscar/11-previa.jpg"></a>
<a href="fotos-oscar/12.jpg"><img class="contenido-imagen" src="fotos-oscar/12-previa.jpg"></a>
<a href="fotos-oscar/13.jpg"><img class="contenido-imagen" src="fotos-oscar/13-previa.jpg"></a>
<a href="fotos-oscar/14.jpg"><img class="contenido-imagen" src="fotos-oscar/14-previa.jpg"></a>
<a href="fotos-oscar/15.jpg"><img class="contenido-imagen" src="fotos-oscar/15-previa.jpg"></a>
<a href="fotos-oscar/16.jpg"><img class="contenido-imagen" src="fotos-oscar/16-previa.jpg"></a>
<a href="fotos-oscar/17.jpg"><img class="contenido-imagen" src="fotos-oscar/17-previa.jpg"></a>
<a href="fotos-oscar/18.jpg"><img class="contenido-imagen" src="fotos-oscar/18-previa.jpg"></a>
<a href="fotos-oscar/19.jpg"><img class="contenido-imagen" src="fotos-oscar/19-previa.jpg"></a>
<a href="fotos-oscar/20.jpg"><img class="contenido-imagen" src="fotos-oscar/20-previa.jpg"></a>

<a href="fotos-oscar/21.jpg"><img class="contenido-imagen" src="fotos-oscar/21-previa.jpg"></a>
<a href="fotos-oscar/22.jpg"><img class="contenido-imagen" src="fotos-oscar/22-previa.jpg"></a>
<a href="fotos-oscar/23.jpg"><img class="contenido-imagen" src="fotos-oscar/23-previa.jpg"></a>
<a href="fotos-oscar/24.jpg"><img class="contenido-imagen" src="fotos-oscar/24-previa.jpg"></a>
<a href="fotos-oscar/25.jpg"><img class="contenido-imagen" src="fotos-oscar/25-previa.jpg"></a>
<a href="fotos-oscar/26.jpg"><img class="contenido-imagen" src="fotos-oscar/26-previa.jpg"></a>
<a href="fotos-oscar/27.jpg"><img class="contenido-imagen" src="fotos-oscar/27-previa.jpg"></a>
<a href="fotos-oscar/28.jpg"><img class="contenido-imagen" src="fotos-oscar/28-previa.jpg"></a>
<a href="fotos-oscar/29.jpg"><img class="contenido-imagen" src="fotos-oscar/29-previa.jpg"></a>
<a href="fotos-oscar/30.jpg"><img class="contenido-imagen" src="fotos-oscar/30-previa.jpg"></a>

<a href="fotos-oscar/31.jpg"><img class="contenido-imagen" src="fotos-oscar/31-previa.jpg"></a>
<a href="fotos-oscar/32.jpg"><img class="contenido-imagen" src="fotos-oscar/32-previa.jpg"></a>
<a href="fotos-oscar/33.jpg"><img class="contenido-imagen" src="fotos-oscar/33-previa.jpg"></a>
<a href="fotos-oscar/34.jpg"><img class="contenido-imagen" src="fotos-oscar/34-previa.jpg"></a>
<a href="fotos-oscar/35.jpg"><img class="contenido-imagen" src="fotos-oscar/35-previa.jpg"></a>
<a href="fotos-oscar/36.jpg"><img class="contenido-imagen" src="fotos-oscar/36-previa.jpg"></a>
<a href="fotos-oscar/37.jpg"><img class="contenido-imagen" src="fotos-oscar/37-previa.jpg"></a>
<a href="fotos-oscar/38.jpg"><img class="contenido-imagen" src="fotos-oscar/38-previa.jpg"></a>
<a href="fotos-oscar/39.jpg"><img class="contenido-imagen" src="fotos-oscar/39-previa.jpg"></a>
<a href="fotos-oscar/40.jpg"><img class="contenido-imagen" src="fotos-oscar/40-previa.jpg"></a>

<a href="fotos-oscar/41.jpg"><img class="contenido-imagen" src="fotos-oscar/41-previa.jpg"></a>
<a href="fotos-oscar/42.jpg"><img class="contenido-imagen" src="fotos-oscar/42-previa.jpg"></a>
<a href="fotos-oscar/43.jpg"><img class="contenido-imagen" src="fotos-oscar/43-previa.jpg"></a>
<a href="fotos-oscar/44.jpg"><img class="contenido-imagen" src="fotos-oscar/44-previa.jpg"></a>
<a href="fotos-oscar/45.jpg"><img class="contenido-imagen" src="fotos-oscar/45-previa.jpg"></a>
<a href="fotos-oscar/46.jpg"><img class="contenido-imagen" src="fotos-oscar/46-previa.jpg"></a>
<a href="fotos-oscar/47.jpg"><img class="contenido-imagen" src="fotos-oscar/47-previa.jpg"></a>
<a href="fotos-oscar/48.jpg"><img class="contenido-imagen" src="fotos-oscar/48-previa.jpg"></a>
<a href="fotos-oscar/49.jpg"><img class="contenido-imagen" src="fotos-oscar/49-previa.jpg"></a>
<a href="fotos-oscar/50.jpg"><img class="contenido-imagen" src="fotos-oscar/50-previa.jpg"></a>

<a href="fotos-oscar/51.jpg"><img class="contenido-imagen" src="fotos-oscar/51-previa.jpg"></a>
<a href="fotos-oscar/52.jpg"><img class="contenido-imagen" src="fotos-oscar/52-previa.jpg"></a>
<a href="fotos-oscar/53.jpg"><img class="contenido-imagen" src="fotos-oscar/53-previa.jpg"></a>
<a href="fotos-oscar/54.jpg"><img class="contenido-imagen" src="fotos-oscar/54-previa.jpg"></a>
<a href="fotos-oscar/55.jpg"><img class="contenido-imagen" src="fotos-oscar/55-previa.jpg"></a>
<a href="fotos-oscar/56.jpg"><img class="contenido-imagen" src="fotos-oscar/56-previa.jpg"></a>
<a href="fotos-oscar/57.jpg"><img class="contenido-imagen" src="fotos-oscar/57-previa.jpg"></a>
<a href="fotos-oscar/58.jpg"><img class="contenido-imagen" src="fotos-oscar/58-previa.jpg"></a>
<a href="fotos-oscar/59.jpg"><img class="contenido-imagen" src="fotos-oscar/59-previa.jpg"></a>
<a href="fotos-oscar/60.jpg"><img class="contenido-imagen" src="fotos-oscar/60-previa.jpg"></a>

<a href="fotos-oscar/61.jpg"><img class="contenido-imagen" src="fotos-oscar/61-previa.jpg"></a>
<a href="fotos-oscar/62.jpg"><img class="contenido-imagen" src="fotos-oscar/62-previa.jpg"></a>
<a href="fotos-oscar/63.jpg"><img class="contenido-imagen" src="fotos-oscar/63-previa.jpg"></a>
<a href="fotos-oscar/64.jpg"><img class="contenido-imagen" src="fotos-oscar/64-previa.jpg"></a>
<a href="fotos-oscar/65.jpg"><img class="contenido-imagen" src="fotos-oscar/65-previa.jpg"></a>
<a href="fotos-oscar/66.jpg"><img class="contenido-imagen" src="fotos-oscar/66-previa.jpg"></a>
<a href="fotos-oscar/67.jpg"><img class="contenido-imagen" src="fotos-oscar/67-previa.jpg"></a>
<a href="fotos-oscar/68.jpg"><img class="contenido-imagen" src="fotos-oscar/68-previa.jpg"></a>
<a href="fotos-oscar/69.jpg"><img class="contenido-imagen" src="fotos-oscar/69-previa.jpg"></a>
<a href="fotos-oscar/70.jpg"><img class="contenido-imagen" src="fotos-oscar/70-previa.jpg"></a>

<a href="fotos-oscar/71.jpg"><img class="contenido-imagen" src="fotos-oscar/71-previa.jpg"></a>
<a href="fotos-oscar/72.jpg"><img class="contenido-imagen" src="fotos-oscar/72-previa.jpg"></a>
<a href="fotos-oscar/73.jpg"><img class="contenido-imagen" src="fotos-oscar/73-previa.jpg"></a>
<a href="fotos-oscar/74.jpg"><img class="contenido-imagen" src="fotos-oscar/74-previa.jpg"></a>
<a href="fotos-oscar/75.jpg"><img class="contenido-imagen" src="fotos-oscar/75-previa.jpg"></a>
<a href="fotos-oscar/76.jpg"><img class="contenido-imagen" src="fotos-oscar/76-previa.jpg"></a>
<a href="fotos-oscar/77.jpg"><img class="contenido-imagen" src="fotos-oscar/77-previa.jpg"></a>
<a href="fotos-oscar/78.jpg"><img class="contenido-imagen" src="fotos-oscar/78-previa.jpg"></a>
<a href="fotos-oscar/79.jpg"><img class="contenido-imagen" src="fotos-oscar/79-previa.jpg"></a>
<a href="fotos-oscar/80.jpg"><img class="contenido-imagen" src="fotos-oscar/80-previa.jpg"></a>

<a href="fotos-oscar/81.jpg"><img class="contenido-imagen" src="fotos-oscar/81-previa.jpg"></a>
<a href="fotos-oscar/82.jpg"><img class="contenido-imagen" src="fotos-oscar/82-previa.jpg"></a>
<a href="fotos-oscar/83.jpg"><img class="contenido-imagen" src="fotos-oscar/83-previa.jpg"></a>

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

<a href="fotos-guillermo/41.jpg"><img class="contenido-imagen" src="fotos-guillermo/41-previa.jpg"></a>
<a href="fotos-guillermo/42.jpg"><img class="contenido-imagen" src="fotos-guillermo/42-previa.jpg"></a>
<a href="fotos-guillermo/43.jpg"><img class="contenido-imagen" src="fotos-guillermo/43-previa.jpg"></a>

<!-- Fotos Sunno -->

<a href="fotos-sunno/01.jpg"><img class="contenido-imagen" src="fotos-sunno/01-previa.jpg"></a>
<a href="fotos-sunno/02.jpg"><img class="contenido-imagen" src="fotos-sunno/02-previa.jpg"></a>
<a href="fotos-sunno/03.jpg"><img class="contenido-imagen" src="fotos-sunno/03-previa.jpg"></a>
<a href="fotos-sunno/04.jpg"><img class="contenido-imagen" src="fotos-sunno/04-previa.jpg"></a>
<a href="fotos-sunno/05.jpg"><img class="contenido-imagen" src="fotos-sunno/05-previa.jpg"></a>
<a href="fotos-sunno/06.jpg"><img class="contenido-imagen" src="fotos-sunno/06-previa.jpg"></a>
<a href="fotos-sunno/07.jpg"><img class="contenido-imagen" src="fotos-sunno/07-previa.jpg"></a>
<a href="fotos-sunno/08.jpg"><img class="contenido-imagen" src="fotos-sunno/08-previa.jpg"></a>
<a href="fotos-sunno/09.jpg"><img class="contenido-imagen" src="fotos-sunno/09-previa.jpg"></a>
<a href="fotos-sunno/10.jpg"><img class="contenido-imagen" src="fotos-sunno/10-previa.jpg"></a>

<a href="fotos-sunno/11.jpg"><img class="contenido-imagen" src="fotos-sunno/11-previa.jpg"></a>
<a href="fotos-sunno/12.jpg"><img class="contenido-imagen" src="fotos-sunno/12-previa.jpg"></a>
<a href="fotos-sunno/13.jpg"><img class="contenido-imagen" src="fotos-sunno/13-previa.jpg"></a>
<a href="fotos-sunno/14.jpg"><img class="contenido-imagen" src="fotos-sunno/14-previa.jpg"></a>
<a href="fotos-sunno/15.jpg"><img class="contenido-imagen" src="fotos-sunno/15-previa.jpg"></a>
<a href="fotos-sunno/16.jpg"><img class="contenido-imagen" src="fotos-sunno/16-previa.jpg"></a>
<a href="fotos-sunno/17.jpg"><img class="contenido-imagen" src="fotos-sunno/17-previa.jpg"></a>
<a href="fotos-sunno/18.jpg"><img class="contenido-imagen" src="fotos-sunno/18-previa.jpg"></a>
<a href="fotos-sunno/19.jpg"><img class="contenido-imagen" src="fotos-sunno/19-previa.jpg"></a>
<a href="fotos-sunno/20.jpg"><img class="contenido-imagen" src="fotos-sunno/20-previa.jpg"></a>

<a href="fotos-sunno/21.jpg"><img class="contenido-imagen" src="fotos-sunno/21-previa.jpg"></a>
<a href="fotos-sunno/22.jpg"><img class="contenido-imagen" src="fotos-sunno/22-previa.jpg"></a>
<a href="fotos-sunno/23.jpg"><img class="contenido-imagen" src="fotos-sunno/23-previa.jpg"></a>
<a href="fotos-sunno/24.jpg"><img class="contenido-imagen" src="fotos-sunno/24-previa.jpg"></a>
<a href="fotos-sunno/25.jpg"><img class="contenido-imagen" src="fotos-sunno/25-previa.jpg"></a>
<a href="fotos-sunno/26.jpg"><img class="contenido-imagen" src="fotos-sunno/26-previa.jpg"></a>
<a href="fotos-sunno/27.jpg"><img class="contenido-imagen" src="fotos-sunno/27-previa.jpg"></a>
<a href="fotos-sunno/28.jpg"><img class="contenido-imagen" src="fotos-sunno/28-previa.jpg"></a>
<a href="fotos-sunno/29.jpg"><img class="contenido-imagen" src="fotos-sunno/29-previa.jpg"></a>
<a href="fotos-sunno/30.jpg"><img class="contenido-imagen" src="fotos-sunno/30-previa.jpg"></a>

<a href="fotos-sunno/31.jpg"><img class="contenido-imagen" src="fotos-sunno/31-previa.jpg"></a>
<a href="fotos-sunno/32.jpg"><img class="contenido-imagen" src="fotos-sunno/32-previa.jpg"></a>
<a href="fotos-sunno/33.jpg"><img class="contenido-imagen" src="fotos-sunno/33-previa.jpg"></a>
<a href="fotos-sunno/34.jpg"><img class="contenido-imagen" src="fotos-sunno/34-previa.jpg"></a>
<a href="fotos-sunno/35.jpg"><img class="contenido-imagen" src="fotos-sunno/35-previa.jpg"></a>
<a href="fotos-sunno/36.jpg"><img class="contenido-imagen" src="fotos-sunno/36-previa.jpg"></a>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Fotos

?>
