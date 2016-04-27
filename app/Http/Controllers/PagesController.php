<?php namespace App\Http\Controllers;

use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function sendmail2()
	{		

		Mail::send('emails.contacto', [], function($message){
			$message->to('info@atelierlab.com.mx')->cc('diego@atelierlab.com.mx')->subject('Atelier contacto');
		});
	}

}
