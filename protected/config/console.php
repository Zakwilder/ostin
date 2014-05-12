<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

	'import' => array(
		'application.models.*',
		'application.components.*',
	),

	// application components
	'components'=>array(

		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=ostin',
			'emulatePrepare' => true,
			'username' => 'fenrir',
			'password' => '1988',
			'charset' => 'utf8',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
		'authManager' => array(
			'class'        => 'AuthManager',
			'connectionID' => 'db',
		),
	),
);