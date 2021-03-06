<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mandrill' => [
		'secret' => getenv('MANDRILL_KEY')
	],

	'mailgun' => [
	    'domain' => $_ENV['MAILGUN_DOMAIN'],
	    'secret' => $_ENV['MAILGUN_KEY'],
	]

];
