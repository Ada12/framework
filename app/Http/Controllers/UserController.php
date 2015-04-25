<?php namespace App\Http\Controllers;



use App\User;

class UserController extends Controller {

	/**
	 * store
	 *
	 * @return [type] [description]
	 */
	public function store() {
		$name = \Request::input('name');
		$password = \Request::input('password');
		$email = \Request::input('email');
		if (!$name || !$password || !$email) {
			return $this->reportJSONError("用户名、密码和邮箱不能为空");
		}
		if (User::where('name', '=', $name)->count() != 0) {
			return $this->reportJSONError("该用户名已被注册");
		}
		if (User::where('email', '=', $email)->count() != 0) {
			return $this->reportJSONError("该邮箱已被注册");
		}
		$user = new User();
		$user->name = $name;
		$user->password = md5($password);
		$user->email = $email;
		$user->save();
		return \Response::make($user->toJson(), 201);
	}

	public function signIn() {
		$user = \Session::get('user');
		if ( $user ) {
			return redirect('/');
		}
		return view('users/sign-in');
	}

	public function signUp() {
		return view('users/sign-up');
	}
}
