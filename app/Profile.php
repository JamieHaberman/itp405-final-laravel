<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  public $timestamps=false;
protected $table = 'profiles';
protected $fillable = ['id', 'user_id', 'link_id', 'update_at', 'created_at'];

}
