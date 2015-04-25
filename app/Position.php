<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model {
  public function questions() {
    return $this->belongsToMany('App\Question');
  }
}
