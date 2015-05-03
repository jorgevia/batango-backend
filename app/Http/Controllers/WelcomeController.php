<?php namespace App\Http\Controllers;
use \Laravelrus\LocalizedCarbon\Traits\LocalizedEloquentTrait;
use \App\models\Magazine;
use \Carbon\Carbon;


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
        $magazines = Magazine::all()->toArray();
        return view('batango.bat', compact('magazines'));
	}

}

/*

array:1 [
  0 => array:7 [
    "issue" => "216"
    "summary" => null
    "fromDate" => "2013-11-01 00:00:00"
    "toDate" => "2014-02-28 00:00:00"
    "year" => 19
    "created_at" => "2015-05-01 23:53:03"
    "updated_at" => "2015-05-01 23:53:03"
  ]
]
*/
