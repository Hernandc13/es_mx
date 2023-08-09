<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'book', language 'es_mx', version '4.2'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Añadir capítulo nuevo';
$string['addafterchapter'] = 'Añadir capítulo nuevo después de "{$a->title}"';
$string['book:addinstance'] = 'Agregar un nuevo libro';
$string['book:edit'] = 'Editar capítulos del libro';
$string['book:read'] = 'Ver libro';
$string['book:viewhiddenchapters'] = 'Ver capítulos ocultos del libro';
$string['chapterandsubchaptersdeleted'] = 'El capítulo "{$a->title}" y sus {$a->subchapters} subcapítulos han sido eliminados';
$string['chapterdeleted'] = 'El capítulo "{$a->title}" fue eliminado';
$string['chapters'] = 'Capítulos';
$string['chaptertitle'] = 'Título del capítulo';
$string['confchapterdelete'] = '¿Realmente quiere borrar este capítulo?';
$string['confchapterdeleteall'] = '¿Realmente quiere borrar este capítulo y todos sus sub-capítulos?';
$string['content'] = 'Contenido';
$string['customtitles'] = 'Títulos a la medida';
$string['customtitles_help'] = 'Normalmente el título del capítulo se muestra en la tabla de contenidos (TOC) Y TAMBIÉN como encabezado arriba del contenido.

Si se activa la casilla para títulos a la medida, en título del capítulo NO SE MOSTRARÁ como encabezado arriba del contenido. Se puede escribir un título diferente (posiblemente más largo que el título del capítulo) como parte del contenido.';
$string['deletechapter'] = 'Eliminar capítulo "{$a}"';
$string['editchapter'] = 'Editar capítulo"{$a}"';
$string['editingchapter'] = 'Editando capítulo';
$string['errorchapter'] = 'Error al leer capítulo del libro.';
$string['eventchaptercreated'] = 'Capítulo creado';
$string['eventchapterdeleted'] = 'Capítulo eliminado';
$string['eventchapterupdated'] = 'Capítulo actualizado';
$string['eventchapterviewed'] = 'Capítulo visto';
$string['hidechapter'] = 'Ocultar capítulo"{$a}"';
$string['indicator:cognitivedepth'] = 'Libro cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en un recurso Libro.';
$string['indicator:cognitivedepthdef'] = 'Libro cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje de compromiso cognitivo ofrecido por las actividades de Libro durante este intervalo de análisis (Niveles = Sin ver, Ver)';
$string['indicator:cognitivedepthdef_link'] = 'Indicadores_analitica_aprendizaje#Profundidad_cognitiva';
$string['indicator:socialbreadth'] = 'Libro social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en un recurso Libro.';
$string['indicator:socialbreadthdef'] = 'Libro social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de Libro durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['indicator:socialbreadthdef_link'] = 'Indicadores_analitica_aprendizaje#Amplitud_social';
$string['modulename'] = 'Libro';
$string['modulename_help'] = 'El módulo libro le permite a un profesor crear un recurso multi-página en un formato similar-a-libro, con capítulos y subcapítulos. Los libros pueden contener archivos multimedia y texto y son útiles para mostrar pasajes largos de información que puede dividirse en secciones.

Un libro puede usarse

* Para mostrar material de lectura para módulos individuales de estudio
* Como un manual departamental para los empleados
* Como un portafolio demostrativo del trabajo del estudiante';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'Libros';
$string['movechapterdown'] = 'Mover abajo capítulo"{$a}"';
$string['movechapterup'] = 'Mover arriba capítulo"{$a}"';
$string['navexit'] = 'Salir del libro';
$string['navimages'] = 'Imágenes';
$string['navnext'] = 'Siguiente';
$string['navnexttitle'] = 'Siguiente: {$a}';
$string['navoptions'] = 'Opciones disponibles para los enlaces de la navegación';
$string['navoptions_desc'] = 'Opciones para mostrar la navegación en las páginas de los libros';
$string['navprev'] = 'Anterior';
$string['navprevtitle'] = 'Anterior: {$a}';
$string['navstyle'] = 'Estilo de navegación';
$string['navstyle_help'] = '* Imágenes  - se usan íconos para la navegación
* Texto - se usan los Títulos de los capítulos para la navegación';
$string['navtext'] = 'Texto';
$string['navtoc'] = 'Solamente TabladeContenidos';
$string['nocontent'] = 'Aún no se ha añadido contenido a este libro';
$string['numbering'] = 'Formato del capítulo';
$string['numbering0'] = 'Ninguno';
$string['numbering1'] = 'Números';
$string['numbering2'] = 'Viñetas';
$string['numbering3'] = 'Indentado';
$string['numbering_help'] = '* Ninguno - los títulos de capítulo y sub-capítulo no tienen formato.
* Números - los capítulos y sub-capítulos están numerados (1, 1.1, 1.2, 2, ...)
* Viñetas - Los sub-capítulos están indentados y mostrados con viñetas
* Indentado - los sub-capítulos están indentados en la tabla de contenidos';
$string['numberingoptions'] = 'Opciones disponibles para formato del capítulo';
$string['numberingoptions_desc'] = 'Elija opciones para numeración que deban estar disponibles al crear libros nuevos.';
$string['page-mod-book-x'] = 'Cualquier página del módulo libro';
$string['pluginadministration'] = 'Administración del libro';
$string['pluginname'] = 'Libro';
$string['previouschapter'] = 'Capítulo anterior';
$string['privacy:metadata'] = 'El módulo de actividad Libro no almacena ningún dato personal.';
$string['removeallbooktags'] = 'Quitar todas las marcas de libro';
$string['search:activity'] = 'Libro - información del recurso';
$string['search:chapter'] = 'Libro - capítulos';
$string['showchapter'] = 'Mostrar capítulo"{$a}"';
$string['subchapter'] = 'Subcapítulo';
$string['subchapternotice'] = '(Solamente disponible una vez que haya sido creado el primer capítulo)';
$string['subplugintype_booktool'] = 'Herramienta libro';
$string['subplugintype_booktool_plural'] = 'Herramientas libro';
$string['tagarea_book_chapters'] = 'Capítulos de libro';
$string['tagsdeleted'] = 'Se han eliminado las marcas del libro';
$string['toc'] = 'Tabla de Contenidos';
$string['top'] = 'arriba';
