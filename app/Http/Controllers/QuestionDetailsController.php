<?php namespace App\Http\Controllers;


use App\Comment;
use App\Company;
use App\Question;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use \Illuminate\Support\Facades\DB;
use App\User;

class QuestionDetailsController extends Controller {

    public function details(){
        if (!\Request::isMethod('get')) {
            return $this->reportError("非法请求");

        }

        $questionId = 103;

        $question = $this->getQuestion($questionId);
        if($question==null) return $this->reportError("问题不存在");

        $userCreatingQuestion = $this->getUser($question->user_id);

        $companiesUsingQuestion = $this->getCompanies($questionId);

        $comments = $this->getComments($questionId);


        echo "test233<br>";
        echo "问题： ".$question->content."<br>";
        echo "出题时间： ".$question->created_at."<br>";
        echo "出题人： ".$userCreatingQuestion->name."<br>";
        echo "用过这道题的公司: ";
        if($companiesUsingQuestion){
            foreach($companiesUsingQuestion as $cuq){
                echo $cuq->name."  ";
            }
        }

        echo "<br>";
        echo "评论： <br>";
        if($comments){
            foreach($comments as $comment){
                echo $comment->user->name." : ".$comment->content." 发表于".$comment->created_at;
                echo "<br>";
            }
        }


      //  return \Response::json(['question'=>$question,'userCreatingQuestion'=>$userCreatingQuestion,'companiesUsingQuestion'=>$companiesUsingQuestion,'comments'=>$comments]);


    }

    private function getComments($questionId){
        try {
            $comments = Comment::where('question_id', '=',  $questionId)->get();
            foreach($comments as $c){
                $c["user"] = $this->getUser($c->user_id);
            }
            return $comments;

        } catch (ModelNotFoundException $e) {
        }
        return null;
    }

    private function getUser($userId){
        try {
            $user = User::where('id', '=',  $userId)->firstOrFail();
            return $user;

        } catch (ModelNotFoundException $e) {
        }
        return null;
    }

    private function getCompanies($questionId){
        $questionCompany = DB::select('select * from question_company where question_id = ?', [$questionId]);
        if( $questionCompany == null) return null;
        $i = 0;
        foreach($questionCompany as $qc){
            try {
                $company = Company::where('id', '=',  $qc->company_id)->firstOrFail();
                $results[$i] = $company;
                $i++;

            } catch (ModelNotFoundException $e) {
            }
        }
        return $results;
    }

    private function getQuestion($questionId){
        try {
            $question = Question::where('id', '=',  $questionId)->firstOrFail();
            return $question;
        } catch (ModelNotFoundException $e) {
        }
        return null;
    }
    private function reportError($st) {
        $response =  \Response::json(['error' => $st],400);
        return $response;
    }
}
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/3/30
 * Time: 15:43
 */