<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package   Efg
 * @author    Thomas Kuhn <mail@th-kuhn.de>
 * @license   http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 * @copyright Thomas Kuhn 2007-2012
 */


/**
 * Table tl_formdata_details
 */
$GLOBALS['TL_DCA']['tl_formdata_details'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'               => 'Formdata',
		'ptable'                      => 'tl_formdata',
		'closed'                      => true,
		'notEditable'                 => false,
		'enableVersioning'            => false,
		'doNotCopyRecords'            => false,
		'doNotDeleteRecords'          => false,
		'switchToEdit'                => false,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary',
				'pid' => 'index',
				'ff_name' => 'index'
			)
		)
	),
	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('ff_name','ff_label','value'),
			'panelLayout'             => 'search,filter',
			'headerFields'            => array('form', 'date', 'ip', 'be_notes'),
			'child_record_callback'   => array('tl_formdata_details', 'listFormdata')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),

		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_formdata']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_formdata']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => 'pid,id,ff_name,ff_label,ff_type,value'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'pid' => array
		(
		//	'foreignKey'              => 'tl_formdata.alias',
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'belongsTo', 'load'=>'eager')
		),
		'sorting' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'ff_id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'ff_type' => array
		(
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'ff_name' => array
		(
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'ff_label' => array
		(
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
 		'value' => array
		(
			'label'                   => array('Value', 'Wert des tl_formdata_details-Datensatzes'),
			'inputType'               => 'text',
			'exclude'                 => false,
			'search'                  => false,
			'sorting'                 => false,
			'filter'                  => false,
			'sql'                     => "text NULL"
		)
	)
);
