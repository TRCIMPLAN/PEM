<?php
/*
 * TrcIMPLAN PEM - Mesa 1 - Fotos
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
 * Clase Fotos
 */
class Fotos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'Fotos';
     // $this->autor         = 'Autor';
        $this->fecha         = '2014-10-01';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = 'fotos';
     // $this->imagen_previa = 'datos-generales/imagen-previa.jpg';
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="datos-generales/encabezado.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = '';
        $this->claves        = 'IMPLAN, Torreon, Fotos';
        $this->categorias    = array('Mesa 1', 'Fotos');
        // Directorio desde la raiz del sitio donde se depositará y opción activa de NavegacionConfig
        $this->directorio    = 'mesa-1';
        $this->nombre_menu   = 'Mesa 1 > Fotos';
        // El estado ordena a Imprenta e Índice si debe 'publicar', 'revisar' o 'ignorar'
        $this->estado        = 'publicar';
        //
        // Contenido en un archivo markdown
        //
        $this->contenido  = <<<FINAL
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

<a href="fotos-guillermo/50.jpg"><img class="contenido-imagen" src="fotos-guillermo/50-previa.jpg"></a>

<a href="fotos-guillermo/51.jpg"><img class="contenido-imagen" src="fotos-guillermo/51-previa.jpg"></a>
<a href="fotos-guillermo/52.jpg"><img class="contenido-imagen" src="fotos-guillermo/52-previa.jpg"></a>
<a href="fotos-guillermo/53.jpg"><img class="contenido-imagen" src="fotos-guillermo/53-previa.jpg"></a>
<a href="fotos-guillermo/54.jpg"><img class="contenido-imagen" src="fotos-guillermo/54-previa.jpg"></a>
<a href="fotos-guillermo/59.jpg"><img class="contenido-imagen" src="fotos-guillermo/59-previa.jpg"></a>
<a href="fotos-guillermo/60.jpg"><img class="contenido-imagen" src="fotos-guillermo/60-previa.jpg"></a>

<a href="fotos-guillermo/61.jpg"><img class="contenido-imagen" src="fotos-guillermo/61-previa.jpg"></a>
<a href="fotos-guillermo/62.jpg"><img class="contenido-imagen" src="fotos-guillermo/62-previa.jpg"></a>
<a href="fotos-guillermo/63.jpg"><img class="contenido-imagen" src="fotos-guillermo/63-previa.jpg"></a>
<a href="fotos-guillermo/64.jpg"><img class="contenido-imagen" src="fotos-guillermo/64-previa.jpg"></a>
<a href="fotos-guillermo/65.jpg"><img class="contenido-imagen" src="fotos-guillermo/65-previa.jpg"></a>
<a href="fotos-guillermo/66.jpg"><img class="contenido-imagen" src="fotos-guillermo/66-previa.jpg"></a>
<a href="fotos-guillermo/67.jpg"><img class="contenido-imagen" src="fotos-guillermo/67-previa.jpg"></a>
<a href="fotos-guillermo/68.jpg"><img class="contenido-imagen" src="fotos-guillermo/68-previa.jpg"></a>
<a href="fotos-guillermo/69.jpg"><img class="contenido-imagen" src="fotos-guillermo/69-previa.jpg"></a>
<a href="fotos-guillermo/70.jpg"><img class="contenido-imagen" src="fotos-guillermo/70-previa.jpg"></a>

<a href="fotos-guillermo/72.jpg"><img class="contenido-imagen" src="fotos-guillermo/72-previa.jpg"></a>
<a href="fotos-guillermo/73.jpg"><img class="contenido-imagen" src="fotos-guillermo/73-previa.jpg"></a>
<a href="fotos-guillermo/74.jpg"><img class="contenido-imagen" src="fotos-guillermo/74-previa.jpg"></a>
<a href="fotos-guillermo/75.jpg"><img class="contenido-imagen" src="fotos-guillermo/75-previa.jpg"></a>
<a href="fotos-guillermo/76.jpg"><img class="contenido-imagen" src="fotos-guillermo/76-previa.jpg"></a>
<a href="fotos-guillermo/77.jpg"><img class="contenido-imagen" src="fotos-guillermo/77-previa.jpg"></a>
<a href="fotos-guillermo/78.jpg"><img class="contenido-imagen" src="fotos-guillermo/78-previa.jpg"></a>
<a href="fotos-guillermo/79.jpg"><img class="contenido-imagen" src="fotos-guillermo/79-previa.jpg"></a>
<a href="fotos-guillermo/80.jpg"><img class="contenido-imagen" src="fotos-guillermo/80-previa.jpg"></a>

<a href="fotos-guillermo/81.jpg"><img class="contenido-imagen" src="fotos-guillermo/81-previa.jpg"></a>
<a href="fotos-guillermo/82.jpg"><img class="contenido-imagen" src="fotos-guillermo/82-previa.jpg"></a>
<a href="fotos-guillermo/83.jpg"><img class="contenido-imagen" src="fotos-guillermo/83-previa.jpg"></a>
<a href="fotos-guillermo/84.jpg"><img class="contenido-imagen" src="fotos-guillermo/84-previa.jpg"></a>
<a href="fotos-guillermo/85.jpg"><img class="contenido-imagen" src="fotos-guillermo/85-previa.jpg"></a>
<a href="fotos-guillermo/86.jpg"><img class="contenido-imagen" src="fotos-guillermo/86-previa.jpg"></a>
<a href="fotos-guillermo/87.jpg"><img class="contenido-imagen" src="fotos-guillermo/87-previa.jpg"></a>
<a href="fotos-guillermo/88.jpg"><img class="contenido-imagen" src="fotos-guillermo/88-previa.jpg"></a>
<a href="fotos-guillermo/89.jpg"><img class="contenido-imagen" src="fotos-guillermo/89-previa.jpg"></a>
<a href="fotos-guillermo/90.jpg"><img class="contenido-imagen" src="fotos-guillermo/90-previa.jpg"></a>

<a href="fotos-guillermo/91.jpg"><img class="contenido-imagen" src="fotos-guillermo/91-previa.jpg"></a>
FINAL;
        $this->javascript = '';
    } // constructor

} // Fotos

?>
