<?php namespace App\Http\Controllers;

use Mail;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.home');
	}

	public function logosDesdeCero(){
		return view('courses.logos');
	}

	public function acuarelaBasica(){
		return view('courses.acuarela');
	}

	public function behanceReviews(){
		return view('courses.behance');
	}

	public function pacoCalles(){
		return view('courses.paco-calles');
	}

}