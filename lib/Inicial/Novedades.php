<?php
/*
 * SMIbeta - Novedades
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
 * Clase Novedades
 */
class Novedades {

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Entregar
        return <<<FINAL
<h3>¿Qué es el Plan Estratégico Metropolitano?</h3>

<p>El <strong>Plan Estratégico Metropolitano (PEM)</strong> es un esfuerzo de planeación participativa que encabeza el Consejo Directivo del IMPLAN Torreón, para <strong>atender la necesidad urgente de elevar el nivel de competitividad</strong> para el desarrollo económico y social de la <strong>Zona Metropolitana de La Laguna</strong>.</p>

<h3>¿En qué me beneficia?</h3>

<p>El PEM es un amplio ejercicio de corresponsabilidad y gobernanza que concentrará las visiones y opiniones de seis grandes temas: <strong>Buen Gobierno, Desarrollo Económico y Competitividad, Desarrollo Social, Movilidad y Transporte, Sustentabilidad y Entorno Urbano.</strong></p>

<p>Tu participación será vital para <strong>identificar y concretar las líneas de acción más efectivas</strong> que seguirán <strong>gobernantes y gobernados</strong>, de la gran cantidad de necesidades y proyectos que requiere La Laguna para ser mejor.</p>

<h3>¿Quiénes lo elaboran?</h3>

<p>El PEM es realizado por <strong>sobresalientes y diversos actores locales</strong>, motivados por su compromiso de mejorar la zona metropolitana. Entre ellos están representantes de instituciones gubernamentales y no gubernamentales, grupos de profesionales expertos y personajes sociales estratégicos.</p>

<p>Se apoyarán con las propuestas proporcionadas por los <strong>ciudadanos</strong> y con el equipo técnico del IMPLAN Torreón, quienes coordinarán, ordenarán y publicarán este proceso.</p>

<h3>¿De qué forma puedo participar?</h3>

<p>La convocatoria está abierta para que Ciudadanos e Instituciones tengan un formulario en Internet dónde puedan entregar sus proyectos y aportaciones. Sólo se necesita tener una dirección de correo electrónico válida e ingresar a <a href="http://trcimplan.mx/plan" target="_blank">http://trcimplan.mx/plan</a> para hacer llegar su propuesta.</p>

<p>Le informamos que, como forma de control, la encuesta sólo puede ser llenada una vez por cada dirección de correo electrónico.</p>

FINAL;
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Entregar
        return false;
    } // javascript

} // Clase Novedades

?>
