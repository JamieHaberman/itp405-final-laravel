<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

  public function PhotoArea(){
  return $this->belongsTo('App\Area');
}

}
