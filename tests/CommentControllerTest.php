<?php
/**
 * Created by PhpStorm.
 * User: yangchen
 * Date: 2015/4/24
 * Time: 22:23
 */
use App\User;
use App\Question;
class CommentControllerTest extends TestCase
{
    public function testStore()
    {
        Session::start();
        $users = User::all();
        $response = $this->call('POST', '/question/1/comments',[
            'content' => '评论测试',
            'user_id' => $users[0]->id,
            '_token' => csrf_token(),
        ]);
        $body = json_decode($response->getContent(), true);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('评论测试', $body['content']);
        $this->assertEquals($users[0]->id, $body['user_id']);
    }
}
