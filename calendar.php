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
 * Strings for component 'calendar', language 'es_mx', version '4.2'.
 *
 * @package     calendar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityevent'] = 'Evento de actividad';
$string['addevent'] = 'Añadir eventos';
$string['advancedoptions'] = 'Opciones avanzadas';
$string['allday'] = 'Todo el día';
$string['annually'] = 'Anualmente';
$string['calendar'] = 'Calendario';
$string['calendarexporturl'] = 'URL del calendario';
$string['calendarheading'] = '{$a} Calendario';
$string['calendarpreferences'] = 'Preferencias de calendario';
$string['calendartypes'] = 'Tipos de calendario';
$string['calendarurl'] = 'URL del calendario: {$a}';
$string['calendarurlcopiedtoclipboard'] = 'URL del calendario copiada al portapapeles';
$string['category'] = 'Categoría';
$string['categoryevent'] = 'Evento de categoría';
$string['categoryevents'] = 'Eventos de categoría';
$string['clickhide'] = 'clic para ocultar';
$string['clickshow'] = 'clic para mostrar';
$string['colactions'] = 'Acciones';
$string['colcalendar'] = 'Calendario';
$string['collastupdated'] = 'Última actualización';
$string['colpoll'] = 'Refrescar intervalo';
$string['commontasks'] = 'Opciones';
$string['confirmeventdelete'] = '¿Está seguro de que desea eliminar el evento  "{$a}" ?';
$string['confirmeventseriesdelete'] = 'El evento "{$a->name}" es parte de una serie. ¿ Quiere Usted eliminar solamente este evento, o todos los {$a->count} eventos en la serie ?';
$string['confirmsubscriptiondelete'] = '¿Está seguro de querer eliminar la suscripción al calendario "{$a}" ?';
$string['copycalendarurl'] = 'Copiar URL del calendario';
$string['copyurl'] = 'Copiar URL';
$string['course'] = 'Curso';
$string['coursecalendar'] = 'calendario {$a}';
$string['courseevent'] = 'Evento de curso';
$string['courseevents'] = 'Eventos de curso';
$string['courses'] = 'Cursos';
$string['customexport'] = 'Rango personalizado ({$a->timestart} - {$a->timeend})';
$string['daily'] = 'Diariamente';
$string['day'] = 'Día';
$string['dayeventsmany'] = '{$a->num} eventos, {$a->day}';
$string['dayeventsnone'] = 'Sin eventos, {$a}';
$string['dayeventsone'] = '1 evento, {$a}';
$string['daynext'] = 'Día siguiente';
$string['dayprev'] = 'Día anterior';
$string['dayviewfor'] = 'Vista por día para:';
$string['dayviewtitle'] = 'Vista por día: {$a}';
$string['daywithnoevents'] = 'No hay eventos este día.';
$string['default'] = 'Por defecto';
$string['deleteallevents'] = 'Eliminar todos los eventos';
$string['deleteevent'] = 'Eliminar evento';
$string['deleteevents'] = 'Eliminar eventos';
$string['deleteoneevent'] = 'Eliminar este evento';
$string['detailedmonthviewfor'] = 'Vista mensual detallada para:';
$string['detailedmonthviewtitle'] = 'Vista mensual detallada: {$a}';
$string['durationminutes'] = 'Duración en minutos';
$string['durationnone'] = 'Sin duración';
$string['durationuntil'] = 'Hasta';
$string['editevent'] = 'Editando evento';
$string['erroraddingevent'] = 'No se pudo añadir evento';
$string['errorbadsubscription'] = 'No se encontró la suscripción al calendario.';
$string['errorbeforecoursestart'] = 'No puede programar un evento antes de la fecha de comienzo del curso';
$string['errorcannotimport'] = 'No se puede configurar una suscripción de calendario en este momento.';
$string['errorhasuntilandcount'] = 'Ya sea UNTIL (hasta) o COUNT (número) pueden aparecer en una regla de recurrencia, pero UNTIL y COUNT juntos NO DEBEN de aparecer en la misma regla de recurrencia.';
$string['errorinvalidbydayprefix'] = 'Valores de números enteros, precediendo reglas de BYDAY solamente pueden estar presentes para regla MONTHLY o YEARLY.';
$string['errorinvalidbydaysuffix'] = 'Los valores válidos para la parte del día de la semana de la regla BYDAY son MO, TU, WE, TH, FR, SA y SU';
$string['errorinvalidbyhour'] = 'Los valores válidos para la regla BYHOUR son 0 a 23.';
$string['errorinvalidbyminute'] = 'Los valores válidos para la regla BYMONTH son 1 a 12.';
$string['errorinvalidbymonth'] = 'Los valores válidos para la regla BYMONTH son 1 a 12';
$string['errorinvalidbymonthday'] = 'Los valores válidos para la regla BYMONTHDAY son 1 a 31  o -31 a -1.';
$string['errorinvalidbysecond'] = 'Los valores válidos para la regla BYSECOND son 0 a 59.';
$string['errorinvalidbysetpos'] = 'Los valores válidos para la regla BYSETPOS son 1 a 366 o -366 a -1.';
$string['errorinvalidbyweekno'] = 'Los valores válidos para la regla BYWEEKNO son 1 a 53 o -53 a -1.';
$string['errorinvalidbyyearday'] = 'Los valores válidos para la regla BYYEARDAY son 1 a 366 o -366 a -1.';
$string['errorinvaliddate'] = 'Fecha no válida';
$string['errorinvalidicalurl'] = 'La URL para iCal es inválida';
$string['errorinvalidinterval'] = 'El valor para la regla INTERVAL debe ser un número entero positivo.';
$string['errorinvalidminutes'] = 'Especifique la duración en minutos con un número entre 1 y 999.';
$string['errorinvalidrepeats'] = 'Especifique el número de eventos con un número entre 1 y 99.';
$string['errormustbeusedwithotherbyrule'] = 'La regla BYSETPOS solamente debe de ser usada en conjunto con otra parte de regla BYxxx.';
$string['errornodescription'] = 'Se requiere una descripción';
$string['errornoeventname'] = 'Se requiere un nombre';
$string['errornonyearlyfreqwithbyweekno'] = 'La regla BYWEEKNO solamente es válida para reglas YEARLY.';
$string['errorrequiredurlorfile'] = 'Se requiere una URL o un archivo para importar un calendario.';
$string['errorrrule'] = 'la regla de recurrencia pasada parece incorrecta.';
$string['errorrruleday'] = 'La regla de recurrencia tiene un parámetro de día inválido.';
$string['errorrrulefreq'] = 'La regla de recurrencia tiene un parámetro de frecuencia inválido.';
$string['eventcalendareventcreated'] = 'Evento de calendario creado';
$string['eventcalendareventdeleted'] = 'Evento de calendario eliminado';
$string['eventcalendareventupdated'] = 'Evento de calendario actualizado';
$string['eventdate'] = 'Fecha';
$string['eventdescription'] = 'Descripción';
$string['eventduration'] = 'Duración';
$string['eventendtime'] = 'Hora final';
$string['eventendtimewrapped'] = '{$a} (Hora de fin)';
$string['eventinstanttime'] = 'Hora';
$string['eventkind'] = 'Tipo de evento';
$string['eventname'] = 'Nombre del evento';
$string['eventnameandcategory'] = '{$a->category}: {$a->name}';
$string['eventnameandcourse'] = '{$a->course}: {$a->name}';
$string['eventnamelocation'] = '{$a->name} localización: {$a->location}';
$string['eventnone'] = 'No hay eventos';
$string['eventrepeat'] = 'Repeticiones';
$string['events'] = 'Eventos';
$string['eventsall'] = 'Todos los eventos';
$string['eventsdeleted'] = '{$a} eventos fueron eliminados';
$string['eventsfor'] = '{$a} eventos';
$string['eventsimported'] = '{$a} eventos fueron importados';
$string['eventskey'] = 'Clave de eventos';
$string['eventsource'] = 'Origen del evento';
$string['eventspersonal'] = 'Mis eventos personales';
$string['eventsrelatedtocategories'] = 'Eventos relacionados con categorías';
$string['eventsrelatedtocourses'] = 'Eventos referidos a los cursos';
$string['eventsrelatedtogroups'] = 'Eventos relacionados con grupos';
$string['eventsskipped'] = '{$a} eventos fueron saltados';
$string['eventstarttime'] = 'Hora de comienzo';
$string['eventstoexport'] = 'Eventos a exportar';
$string['eventsubscriptioncreated'] = 'Suscripción a calendario creada';
$string['eventsubscriptiondeleted'] = 'Suscripción a calendario eliminada';
$string['eventsubscriptioneditwarning'] = 'El evento del calendario es parte de una suscripción. Cualquier cambio que haga en este evento se perderá si se elimina la suscripción.';
$string['eventsubscriptionupdated'] = 'Suscripción a calendario actualizada';
$string['eventsupdated'] = '{$a} eventos fueron actualizados';
$string['eventtime'] = 'Hora';
$string['eventtype'] = 'Tipo de evento';
$string['eventtypecategory'] = 'categoría';
$string['eventtypecourse'] = 'curso';
$string['eventtypegroup'] = 'grupo';
$string['eventtypemodule'] = 'módulo';
$string['eventtypeother'] = 'otro';
$string['eventtypesite'] = 'sitio';
$string['eventtypeuser'] = 'usuario';
$string['eventview'] = 'Detalles del evento';
$string['expired'] = 'Expirado';
$string['explain_site_timeformat'] = 'Puede seleccionar el formato en que se ve la hora (12 o 24) en todo el sitio. Si selecciona la opción por defecto, el formato se elegirá automáticamente de acuerdo con el idioma que utilice en el sitio. Este ajuste puede pasarse por alto mediante las preferencias del usuario.';
$string['export'] = 'Exportar';
$string['exportbutton'] = 'Exportar';
$string['exportcalendar'] = 'Exportar calendario';
$string['exporthelp'] = '<p>La URL del calendario proporciona un enlace dinámico para importar eventos hacia otros calendarios. Cualquier evento nuevo, cambiado o eliminado en el calendario de orígen <strong>será</strong> reflejado en los otros calendarios.</p>
<p>La exportación del calendario le permite a usted crear una copia de respaldo de eventos, la cual podría ser importada a otros calendarios. LAs actualizaciones hechas en el calendario de orígen <strong>NO se verán</strong> reflejadas en los otros calendarios.</p>';
$string['forcecalendartype'] = 'Forzar calendario';
$string['fri'] = 'Vie';
$string['friday'] = 'Viernes';
$string['fullcalendar'] = 'Calendario completo';
$string['generateurlbutton'] = 'Obtener URL del calendario';
$string['gotoactivity'] = 'Ir a la actividad';
$string['gotocalendar'] = 'Ir al calendario';
$string['group'] = 'Grupo';
$string['groupevent'] = 'Evento de grupo';
$string['groupevents'] = 'Eventos de grupo';
$string['hideeventtype'] = 'Ocultar eventos de {$a}';
$string['hourly'] = 'Cada hora';
$string['importcalendar'] = 'Importar calendario';
$string['importcalendarexternal'] = '¿Importar un calendario externo?';
$string['importcalendarfrom'] = 'Importar desde';
$string['importcalendarheading'] = 'Importar calendario...';
$string['importfromfile'] = 'Archivo de calendario (.ics)';
$string['importfrominstructions'] = 'Por favor proporcione una URL hacia un calendario remoto o suba un archivo.';
$string['importfromurl'] = 'URL a calendario';
$string['invalideventtype'] = 'El tipo de evento que Usted ha seleccionado es inválido.';
$string['invalidtimedurationminutes'] = 'La duración en minutos introducida no es válida; por favor, introduzca una duración en minutos mayor que 0 o seleccione sin duración.';
$string['invalidtimedurationuntil'] = 'La fecha y hora seleccionadas para la duración hasta es anterior a la fecha de inicio del evento. Por favor, corríjalo antes de seguir.';
$string['iwanttoexport'] = 'Exportar';
$string['less'] = 'Menos';
$string['managesubscriptions'] = 'Importar o exportar calendarios';
$string['manyevents'] = '{$a} eventos';
$string['mon'] = 'Lun';
$string['monday'] = 'Lunes';
$string['monthly'] = 'Mensualmente';
$string['monthlyview'] = 'Vista mensual';
$string['monthnext'] = 'Mes próximo';
$string['monthprev'] = 'Mes anterior';
$string['monththis'] = 'Este mes';
$string['more'] = 'Más';
$string['moreevents'] = '{$a} más';
$string['namewithsource'] = '{$a->name} ({$a->source})';
$string['never'] = 'Nunca';
$string['newevent'] = 'Nuevo evento';
$string['nocalendarsubscriptions'] = 'Aun no hay suscripciones a calendarios. ¿Desea usted {$a}';
$string['notitle'] = 'Sin título';
$string['noupcomingevents'] = 'No hay eventos próximos';
$string['oneevent'] = '1 evento';
$string['pollinterval'] = 'Intervalo de actualización';
$string['pollinterval_help'] = 'Con qué frecuencia le gustaría que se actualizara el calendario con nuevos eventos.';
$string['pref_lookahead'] = 'Plazo de comienzo de eventos próximos';
$string['pref_lookahead_help'] = 'Esta opción ajusta el número (máximo) de días en que un evento debe comenzar a fin de poder mostrarse como evento pendiente. Por favor tenga en cuenta que <strong>no hay garantía</strong> de que se muestren todos los eventos que comiencen en esa fecha; si hay demasiados (más que los señalados en la preferencia "Número máximo de eventos pendientes"), los eventos más distantes no se mostrarán.';
$string['pref_maxevents'] = 'Nº máximo de eventos próximos';
$string['pref_maxevents_help'] = 'Esta opción fija el número máximo de eventos pendientes que pueden mostrarse. Si escribe un número elevado, es posible que mostrar los eventos ocupe mucho espacio en la pantalla.';
$string['pref_persistflt'] = 'Recordar ajustes de filtro';
$string['pref_persistflt_help'] = 'Si se habilita, Moodle recordará los últimos ajustes del filtro de eventos y los restaurará de forma automática cada vez que Usted ingrese al sitio.';
$string['pref_startwday'] = 'Primer día de la semana';
$string['pref_startwday_help'] = 'Las semanas del calendario se mostrarán comenzando el día que se seleccione aquí.';
$string['pref_timeformat'] = 'Formato de hora';
$string['pref_timeformat_help'] = 'Puede elegir ver la hora en formato de 12 o 24 horas. Si elige "valor por defecto", el formato será elegido automáticamente en función del idioma usado en el sitio.';
$string['preferences'] = 'Preferencias';
$string['preferences_available'] = 'Sus preferencias personales';
$string['preferredcalendar'] = 'Calendario preferido';
$string['privacy:metadata:calendar:event'] = 'El componente del Calendario puede almacenar detalles de evento del calendario adentro del subsistema del núcleo.';
$string['privacy:metadata:calendar:event:description'] = 'La descripción del evento del calendario.';
$string['privacy:metadata:calendar:event:eventtype'] = 'El tipo de evento del evento del calendario.';
$string['privacy:metadata:calendar:event:name'] = 'El nombre del evento del calendario.';
$string['privacy:metadata:calendar:event:timeduration'] = 'La duración del evento del calendario.';
$string['privacy:metadata:calendar:event:timestart'] = 'La fecha de inicio del evento del calendario.';
$string['privacy:metadata:calendar:event_subscriptions'] = 'El componente del Calendario puede almacenar detalles de suscripciones a calendario del usuario adentro del subsistema del núcleo.';
$string['privacy:metadata:calendar:event_subscriptions:eventtype'] = 'El tipo de evento de la suscripción al calendario.';
$string['privacy:metadata:calendar:event_subscriptions:name'] = 'El nombre de la suscripción del calendario.';
$string['privacy:metadata:calendar:event_subscriptions:url'] = 'La URL de la suscripción del calendario.';
$string['privacy:metadata:calendar:preferences:calendar_savedflt'] = 'El tipo de evento del calendario configurado a mostrar en las preferencias del usuario.';
$string['recentupcoming'] = '60 días recientes y próximos';
$string['repeatedevents'] = 'Eventos repetidos';
$string['repeateditall'] = 'Aplicar también los cambios a todos los  {$a} eventos de esta serie de repeticiones';
$string['repeateditthis'] = 'Aplicar los cambios sólo a este evento';
$string['repeatevent'] = 'Repetir este evento';
$string['repeatnone'] = 'No repeticiones';
$string['repeatweeksl'] = 'Repetir semanalmente, creando juntos';
$string['repeatweeksr'] = 'eventos';
$string['requiresaction'] = '{$a} requiere acción';
$string['sat'] = 'Sáb';
$string['saturday'] = 'Sábado';
$string['showeventtype'] = 'Mostrar {$a} eventos';
$string['shown'] = 'visibles';
$string['site'] = 'Sitio';
$string['siteevent'] = 'Evento del sitio';
$string['siteevents'] = 'Eventos del sitio';
$string['spanningevents'] = 'Eventos en marcha';
$string['subscriptionname'] = 'Nombre del calendario';
$string['subscriptionremoved'] = 'Suscripción al calendario {$a} removida';
$string['subscriptions'] = 'Suscripciones';
$string['subscriptionsource'] = 'Origen del evento: {$a}';
$string['subscriptionupdated'] = 'La suscripción al calendario \'{$a}\' ha sido actualizada';
$string['sun'] = 'Dom';
$string['sunday'] = 'Domingo';
$string['thu'] = 'Jue';
$string['thursday'] = 'Jueves';
$string['timeformat_12'] = '12 horas (am/pm)';
$string['timeformat_24'] = '24 horas';
$string['timeperiod'] = 'Período de tiempo';
$string['today'] = 'Hoy';
$string['todayplustitle'] = 'Hoy {$a}';
$string['tomorrow'] = 'Mañana';
$string['tt_deleteevent'] = 'Eliminar evento';
$string['tt_editevent'] = 'Editar evento';
$string['tue'] = 'Mar';
$string['tuesday'] = 'Martes';
$string['typecategory'] = 'evento de categoría';
$string['typeclose'] = 'Evento cerrar';
$string['typecourse'] = 'Evento de curso';
$string['typedue'] = 'Evento esperado';
$string['typegradingdue'] = 'Evento de calificación pendiente';
$string['typegroup'] = 'Evento de grupo';
$string['typeopen'] = 'Evento abrir';
$string['typesite'] = 'Evento de sitio';
$string['typeuser'] = 'Evento de usuario';
$string['upcomingevents'] = 'Eventos próximos';
$string['upcomingeventsfor'] = 'Eventos próximos para:';
$string['urlforical'] = 'URL para exportar a iCalendar, para suscribirse al calendario';
$string['user'] = 'Usuario';
$string['userevent'] = 'Evento de usuario';
$string['userevents'] = 'Eventos de usuario';
$string['viewupcomingactivitiesdue'] = 'Ver las actividades próximas pendientes';
$string['wed'] = 'Mié';
$string['wednesday'] = 'Miércoles';
$string['weekly'] = 'Semanalmente';
$string['weeknext'] = 'Semana próxima';
$string['weekthis'] = 'Esta semana';
$string['when'] = 'Cuando';
$string['whendate'] = 'Cuando: {$a}';
$string['yesterday'] = 'Ayer';
$string['youcandeleteallrepeats'] = 'Este evento es parte de una serie de eventos repetidos. Puede eliminar sólo este evento, o todos los eventos {$a} de la serie de una vez.';
$string['yoursubscriptions'] = 'Calendarios importados';
