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
        Session::set('user',$user = User::all()->first());
        $response = $this->call('POST', '/question/1/comments',[
            'content' => '评论测试',
            '_token' => csrf_token(),
        ]);
        $body = json_decode($response->getContent(), true);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('评论测试', $body['content']);
    }
}
