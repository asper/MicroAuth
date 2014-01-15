<?php

Configure::write('MicroAuth', array(
	'sessionKey' => 'MicroAuth',
	'password' => '13Interactif',
	'loginAction' => array(
		'admin' => false,
		'plugin' => 'micro_auth',
		'controller' => 'micro_auth',
		'action' => 'login'
	),
	'loginRedirect' => '/admin',
	'logoutRedirect' => array(
		'admin' => false,
		'plugin' => 'micro_auth',
		'controller' => 'micro_auth',
		'action' => 'logout'
	),
	'logoutRedirect' => '/'
));