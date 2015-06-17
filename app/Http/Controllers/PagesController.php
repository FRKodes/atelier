<?php namespace App\Http\Controllers;

use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function sendmail2()
	{		

		// return 'ok from pages controller';
		// return 'Mandrill key: '.getenv('MANDRILL_KEY').'\nmail driver: '.getenv('MAIL_DRIVER');


		Mail::send('emails.contacto', [], function($message){
			$message->to('frkalderon@gmail.com')->subject('Atelier contacto');
		});

	}

}
