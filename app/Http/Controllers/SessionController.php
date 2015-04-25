<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class SessionController extends Controller {


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$email = \Request::input('email', null);
		$password = \Request::input('password', null);
		if (!$email || !$password) {
			return $this->reportJSONError("用户名和密码不能为空");
		}
		try {
			$user = User::where('email', '=', $email)->firstOrFail();
		} catch (ModelNotFoundException $e) {
			return $this->reportJSONError("该用户名不存在");
		}
		if(md5($password) != $user->password)
			return $this->reportJSONError("密码错误");
		\Session::put('user', $user);
		return \Response::make($user->toJson(), 201);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 * @todo Implementation
	 */
	public function destroy($id)
	{
		
	}

}
