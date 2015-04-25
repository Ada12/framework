<?php

class SessionControllerTest extends TestCase {

  /**
   * Test store
   *
   * @return void
   */
  public function testStore()
  {
    Session::start();
    $response = $this->call('POST', '/session', [
      'email' => 'test1@interu.com',
      'password' => '123456',
      '_token' => csrf_token()
    ]);

    $body = json_decode($response->getContent(), true);

    $this->assertEquals(201, $response->getStatusCode());
    $this->assertEquals('test1@interu.com', $body['email']);
    $this->assertEquals(false, isset($body['password']));
  }


}
