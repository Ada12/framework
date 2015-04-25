<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

  public function questions() {
    return $this->belongsToMany('App\Question');
  }
}