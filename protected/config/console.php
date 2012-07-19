<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',
	// application components
	'components'=>array(
		/*
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
				*/
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=books',
			'emulatePrepare' => true,
			'username' => 'alex',
			'password' => 'alex',
			'charset' => 'utf8',
		),

	),
	
	'modules'=>array(
	        #...
	        'user'=>array(
	            # encrypting method (php hash function)
	            'hash' => 'md5',

	            # send activation email
	            'sendActivationMail' => false,

	            # allow access for non-activated users
	            'loginNotActiv' => false,

	            # activate user on registration (only sendActivationMail = false)
	            'activeAfterRegister' => true,

	            # automatically login from registration
	            'autoLogin' => true,

	            # registration path
	            'registrationUrl' => array('/user/registration'),

	            # recovery password path
	            'recoveryUrl' => array('/user/recovery'),

	            # login form path
	            'loginUrl' => array('/user/login'),

	            # page after login
	            'returnUrl' => array('/user/profile'),

	            # page after logout
	            'returnLogoutUrl' => array('/user/login'),
	        ),
	        #...
	    ),
	
	
);