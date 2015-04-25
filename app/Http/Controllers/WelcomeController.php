<?php namespace App\Http\Controllers;

use App\Question;

class WelcomeController extends Controller {

	public function index()
	{
		$user = \Session::get('user');
		if ( $user ) {
			$questions = Question::where('user_id', '=', $user->id)->paginate(20);
			return view('home', [
					'questions' => $questions,
					'user' => $user
				]);
		}
		else {
			return redirect('sign-in');
		}
	}

}
