<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('questions')->delete();
    DB::table('users')->delete();

    Eloquent::unguard();

    $user = new App\User;
    $user->email = 'test1@interu.com';
    $user->avatar = 'http://placehold.it/80x80';
    $user->name = 'John Wu';
    $user->password = 'e10adc3949ba59abbe56e057f20f883e';
    $user->save();

    for($i=0;$i<100;$i++){
      $question[$i] = App\Question::create(array(
        'user_id' => $user->id,
        'content' => '请问在Backbone.js中怎么创建一个Model？' . $i,
      ));
    }
	}

}
