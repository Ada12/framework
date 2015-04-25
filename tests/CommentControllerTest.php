<?php
/**
 * Created by PhpStorm.
 * User: yangchen
 * Date: 2015/4/24
 * Time: 22:23
 */
class CommentControllerTest extends TestCase
{
    public function testStore()
    {
        Session::start();
        $response = $this->call('POST', '/question/104/comment',[
            'content' => '第一个评论',
            'user_id' => '3',
            '_token' => csrf_token(),
        ]);
        $body = json_decode($response->getContent(), true);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('第一个评论', $body['content']);
        $this->assertEquals('3', $body['user_id']);
    }
}