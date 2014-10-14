<?php
/*
 * TrcIMPLAN PEM - Mesa 1 - Desarrollo Social
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
 * Clase CTDesarrolloSocial
 */
class CTDesarrolloSocial extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'Desarrollo Social';
     // $this->autor         = 'Autor';
        $this->fecha         = '2014-10-01';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = 'ct-desarrollo-social';
     // $this->imagen_previa = 'ct-desarrollo-social/imagen-previa.jpg';
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="ct-desarrollo-social/encabezado.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = '';
        $this->claves        = 'IMPLAN, Torreon';
        $this->categorias    = array('Mesa 1', 'Desarrollo Social');
        // Directorio desde la raiz del sitio donde se depositará y opción activa de NavegacionConfig
        $this->directorio    = 'mesa-1';
        $this->nombre_menu   = 'Mesa 1 > Desarrollo Social';
        // El estado ordena a Imprenta e Índice si debe 'publicar', 'revisar' o 'ignorar'
        $this->estado        = 'publicar';
        //
        // Definir lenguetas
        //
        $lenguetas = new \Base\Lenguetas();
        $lenguetas->agregar('miembros',     'Miembros',     $this->cargar_archivo_markdown_extra('lib/Mesa1/CTDesarrolloSocialMiembros.md'));
        $lenguetas->agregar('diagnostico',  'Diagnóstico',  $this->cargar_archivo_markdown_extra('lib/Mesa1/CTDesarrolloSocialDiagnostico.md'));
        $lenguetas->agregar('conclusiones', 'Conclusiones', $this->cargar_archivo_markdown('lib/Mesa1/CTDesarrolloSocialConclusiones.md'));
        $lenguetas->agregar('minuta',       'Minuta',       $this->cargar_archivo_markdown('lib/Mesa1/CTDesarrolloSocialMinuta.md'));
        $lenguetas->agregar('multimedia',   'Multimedia',   $this->cargar_archivo_markdown('lib/Mesa1/CTDesarrolloSocialMultimedia.md'));
        //
        // El contenido HTML y el JavaScript
        //
        $this->contenido  = $lenguetas->html();
        $this->javascript = $lenguetas->javascript();
    } // constructor

} // CTDesarrolloSocial

?>
