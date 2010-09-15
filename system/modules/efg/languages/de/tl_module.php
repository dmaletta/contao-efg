<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * Extended language file for table tl_module (de).
 *
 * PHP version 5
 * @copyright  Thomas Kuhn 2007 - 2010
 * @author     Thomas Kuhn <mail@th-kuhn.de>
 * @package    efg
 * @license    LGPL
 * @filesource
 */


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_module']['efgSearch_legend'] = "Sucheinstellungen";
$GLOBALS['TL_LANG']['tl_module']['comments_legend'] = "Kommentare";

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['list_formdata'] = array('Formular-Daten-Tabelle', 'Bitte wählen Sie die Formular-Daten-Tabelle, deren Datensätze Sie auflisten möchten.');
$GLOBALS['TL_LANG']['tl_module']['efg_DetailsKey'] = array('URL-Fragment der Detailseite', 'Anstelle der Vorgabe "details" in der URL der Auflistungs-Detailseite können Sie hier einen abweichenden Begriff angeben.<br />Dadurch kann z.B. eine URL www.domain.tld/page/<b>info</b>/alias.html statt der Standard-URL www.domain.tld/page/<b>details</b>/alias.html erzeugt werden');
$GLOBALS['TL_LANG']['tl_module']['efg_iconfolder'] = array('Verzeichnis der Icons', 'Tragen Sie hier das Verzeichnis Ihrer Icons ein. Falls das Feld nicht ausgefüllt wird, werden die Icons im Verzeichnis "system/modules/efg/html/" verwendet.');
$GLOBALS['TL_LANG']['tl_module']['efg_list_access'] = array('Anzeige Einschränkung', 'Wählen Sie, welche Daten angezeigt werden dürfen.');
$GLOBALS['TL_LANG']['tl_module']['efg_list_fields'] = array('Felder', 'Bitte wählen Sie die Felder, die Sie auflisten möchten.');
$GLOBALS['TL_LANG']['tl_module']['efg_list_searchtype'] = array('Typ des Such-Formulars', 'Bitte wählen Sie, welchen Typ des Such-Formulars Sie verwenden möchten.');
$GLOBALS['TL_LANG']['tl_module']['efg_list_search'] = array('Durchsuchbare Felder', 'Bitte wählen Sie die Felder, die im Frontend durchsuchbar sein sollen.');
$GLOBALS['TL_LANG']['tl_module']['efg_list_info'] = array('Felder der Detailseite', 'Bitte wählen Sie die Felder, die Sie auf der Detailseite anzeigen möchten. Wählen Sie kein Feld, um die Detailansicht eines Datensatzes zu deaktivieren.');
$GLOBALS['TL_LANG']['tl_module']['efg_fe_keep_id'] = array('Datensatz-ID beibehalten bei Frontendbearbeitung', 'Bei der Frontendbearbeitung wird normalerweise ein neuer Datensatz -somit neue ID- angelegt, anschließend der alte gelöscht. Wählen Sie diese Option, falls Sie auf eine unveränderte Datensatz-ID angewiesen sind.');

$GLOBALS['TL_LANG']['efg_list_searchtype']['none'] = array('Keine Suche', 'Kein Suchformular');
$GLOBALS['TL_LANG']['efg_list_searchtype']['dropdown'] = array('Dropdown und Eingabefeld', 'Das Suchformular enthält ein DropDown zur Auswahl des zu durchsuchenden Feldes und ein Eingabefeld für den Suchbegriff.');
$GLOBALS['TL_LANG']['efg_list_searchtype']['singlefield'] = array('Einzelnes Eingabefeld', 'Das Suchformular enthält ein einzelndes Eingabefeld für den Suchbegriff. Bei der Suche werden alle als durchsuchbare Felder definierten Felder berücksichtigt.');
$GLOBALS['TL_LANG']['efg_list_searchtype']['multiplefields'] = array('Mehrere Eingabefelder', 'Das Suchformular enthält für jedes durchsuchbare Feld ein separates Eingabefeld für den Suchbegriff.');

$GLOBALS['TL_LANG']['efg_list_access']['public'] = array('Öffentlich', 'Jeder Seitenbesucher darf alle Daten sehen.');
$GLOBALS['TL_LANG']['efg_list_access']['member'] = array('Besitzer', 'Mitglieder dürfen nur ihre eigenen Daten sehen.');
$GLOBALS['TL_LANG']['efg_list_access']['groupmembers'] = array('Gruppen-Mitglieder', 'Mitglieder dürfen ihre eigenen und die Daten ihrer Gruppen-Mitglieder sehen.');

$GLOBALS['TL_LANG']['tl_module']['efg_fe_edit_access'] = array('Bearbeitung im Frontend', 'Wählen Sie, ob Daten im Frontend bearbeitet werden dürfen.');
$GLOBALS['TL_LANG']['efg_fe_edit_access']['none'] = array('Keine Bearbeitung', 'Daten können nicht im Frontend bearbeitet werden.');
$GLOBALS['TL_LANG']['efg_fe_edit_access']['public'] = array('Öffentlich', 'Jeder Seitenbesucher darf alle Daten bearbeiten.');
$GLOBALS['TL_LANG']['efg_fe_edit_access']['member'] = array('Besitzer', 'Mitglieder dürfen nur ihre eigenen Daten bearbeiten.');
$GLOBALS['TL_LANG']['efg_fe_edit_access']['groupmembers'] = array('Gruppen-Mitglieder', 'Mitglieder dürfen ihre eigenen und die Daten ihrer Gruppen-Mitglieder bearbeiten.');

$GLOBALS['TL_LANG']['tl_module']['efg_fe_delete_access'] = array('Löschen im Frontend', 'Wählen Sie, ob Daten im Frontend gelöscht werden dürfen.');
$GLOBALS['TL_LANG']['efg_fe_delete_access']['none'] = array('Kein Löschen', 'Daten können nicht im Frontend gelöscht werden.');
$GLOBALS['TL_LANG']['efg_fe_delete_access']['public'] = array('Öffentlich', 'Jeder Seitenbesucher darf alle Daten löschen.');
$GLOBALS['TL_LANG']['efg_fe_delete_access']['member'] = array('Besitzer', 'Mitglieder dürfen nur ihre eigenen Daten löschen.');
$GLOBALS['TL_LANG']['efg_fe_delete_access']['groupmembers'] = array('Gruppen-Mitglieder', 'Mitglieder dürfen ihre eigenen und die Daten ihrer Gruppen-Mitglieder löschen.');

$GLOBALS['TL_LANG']['tl_module']['efg_fe_export_access'] = array('CSV-Export im Frontend', 'Wählen Sie, ob Daten im Frontend als CSV-Datei exportiert werden dürfen.');
$GLOBALS['TL_LANG']['efg_fe_export_access']['none'] = array('Kein Export', 'Daten können nicht im Frontend exportiert werden.');
$GLOBALS['TL_LANG']['efg_fe_export_access']['public'] = array('Öffentlich', 'Jeder Seitenbesucher darf alle Daten exportieren.');
$GLOBALS['TL_LANG']['efg_fe_export_access']['member'] = array('Besitzer', 'Mitglieder dürfen nur ihre eigenen Daten exportieren.');
$GLOBALS['TL_LANG']['efg_fe_export_access']['groupmembers'] = array('Gruppen-Mitglieder', 'Mitglieder dürfen ihre eigenen und die Daten ihrer Gruppen-Mitglieder exportieren.');

?>