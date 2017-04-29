<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Area;
class LoggedInController extends Controller
{
    public function index()
    {
       $photos = Photo::join('areas', 'photos.area_id', '=', 'areas.id')
          ->select('area')->distinct()
     ->get();
          //
          return view('explore', [
            'photos'=> $photos,

          ]);
    }

}
