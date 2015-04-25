<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {
  protected $fillable = array('user_id',
                              'content');

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function comments() {
    return $this->hasMany('App\Comment');
  }

  public function companies() {
    return $this->belongsToMany('App\Company');
  }

  public function positions() {
    return $this->belongsToMany('App\Position');
  }
  
}
