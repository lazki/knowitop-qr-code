<?php
//
// iTop module definition file
// View https://github.com/knowitop/knowitop-qr-code for details
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'knowitop-qr-code/1.0.1',
	array(
		// Identification
		//
		'label' => 'QR code generator',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
		    'itop-config-mgmt/2.4.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'main.knowitop-qr-code.php'
		),
		'webservice' => array(

		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),

		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => 'https://github.com/knowitop/knowitop-qr-code', // hyperlink to more information, if any

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
            'url_only' => true
		),
	)
);
