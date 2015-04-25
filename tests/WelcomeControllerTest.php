<?php

class WelcomeControllerTest extends TestCase {


	public function testIndex()
	{
		Session::start();
		Session::set('user',$user = \App\User::all()->first());
		$questions = \App\Question::where('user_id', '=', $user->id)->paginate(20);
		$response = $this->call('GET','/',[]);

		$this->assertResponseStatus(200);
		$this->assertViewHas("questions", $questions);
		$this->assertViewHas("user", $user);
	}
}