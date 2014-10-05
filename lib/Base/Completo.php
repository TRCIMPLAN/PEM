<?php
/*
 * SMIbeta - Completo
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
namespace Base;

/**
 * Clase Completo
 */
class Completo {

    public $publicacion; // Instancia de Publicacion

    /**
     * Constructor
     *
     * @param mixed Instancia de Publicacion
     */
    public function __construct($publicacion) {
        $this->publicacion = $publicacion;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        if (!is_object($this->publicacion)) {
            throw new \Exception("Error en Completo, html: La propiedad publicacion no es una instancia.");
        }
        if (!($this->publicacion instanceof Publicacion)) {
            throw new \Exception("Error en Completo, html: La propiedad publicacion no es instancia de Publicacion.");
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<article>';
        $a[] = '  <header>';
        if ($this->publicacion->encabezado != '') {
            $a[] = $this->publicacion->encabezado;
            if ($this->publicacion->nombre != '') {
                $a[] = "    <h1 style=\"display:none;\">{$this->publicacion->nombre}</h1>";
            }
        } elseif ($this->publicacion->nombre != '') {
            $a[] = "    <h1>{$this->publicacion->nombre}</h1>";
        }
        $a[] = sprintf('    <p class="autor-fecha">Por %s, %s</p>', $this->publicacion->autor, $this->publicacion->fecha_con_formato_humano());
        $a[] = '  </header>';
        $a[] = $this->publicacion->contenido;
        $a[] = '</article>';
        // Agregar botones para compartir en redes sociales
        if ($p->para_compartir) {
            $a[] = '<div class="contenido-social">';
            $a[] = '  <h5>Compartir en Redes Sociales</h5>';
            $a[] = '  <a href="https://twitter.com/share" class="twitter-share-button" data-via="trcimplan" data-lang="es">Twittear</a>';
            $a[] = '  <iframe src="//www.facebook.com/plugins/like.php?href='.urlencode($this->publicacion->url_absoluto()).'&amp;width=300&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:21px;" allowTransparency="true"></iframe>';
            $a[] = '</div>';
        }
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Javascript Twitter
        if ($p->para_compartir) {
            return '!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");';
        } else {
            return '';
        }
    } // javascript

} // Clase Completo

?>
