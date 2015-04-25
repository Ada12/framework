<?php

use App\User;

class UserControllerTest extends TestCase {

  /**
   * Test store
   *
   * @return void
   */
  public function testStore()
  {
    Session::start();
    $response = $this->call('POST', '/users', [
      'email' => 'test2@interu.com',
      'password' => '234567',
      'name' => 'John Wu (2)',
      '_token' => csrf_token(),
    ]);

    $body = json_decode($response->getContent(), true);

    $this->assertEquals(201, $response->getStatusCode());
    $this->assertEquals('test2@interu.com', $body['email']);
    $this->assertEquals(false, isset($body['password']));

    $user = User::where('email', '=', 'test2@interu.com')->firstOrFail();
    $user->delete();
  }


}
