<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
  protected $fillable = array('name', 'email', 'password', 'avatar');
  
  function __construct() {
    $this->setHidden(['password']);
  }

  public function questions() {
    return $this->hasMany('App\Question');
  }
}
