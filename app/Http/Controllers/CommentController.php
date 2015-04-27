<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: yangchen
 * Date: 2015/4/24
 * Time: 20:58
 */
use App\Comment;
use App\Question;
use App\User;
class CommentController extends Controller{

    public function store($questionId){
        $content = \Request::input('content');
        $userId = \Request::input('user_id');
        if(!$content){
            return $this->reportJsonError("评论内容不能为空");
        }
        if(!$userId){
            return $this->reportJsonError("用户名不能为空");
        }
        try{
            $question = Question::findOrFail($questionId);
        }catch (ModelNotFoundException $e){
            return $this->reportJSONError("问题不存在");
        }
        try{
            $user = User::findOrFail($userId);
        }catch (ModelNotFoundException $e){
            return $this->reportJSONError("用户不存在");
        }
        $comments = new Comment();
        $comments->content = $content;
        $comments->user_id = $userId;
        $comments->question_id = $questionId;
        $comments->save();
        return $comments->toJson();
    }
}
