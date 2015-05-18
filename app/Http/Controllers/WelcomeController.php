<?php namespace App\Http\Controllers;
use \Batango\entities\Magazine;
use \Batango\entities\Article;
use Batango\entities\Section;
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
        $article = Article::find(1)->with('magazine', 'section')->get()->toArray()[0];
        dd($article['magazine']['issue'], $article['section']['description']);
        //return view('batango.bat', compact('magazines'));
	}

}
