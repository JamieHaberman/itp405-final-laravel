<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Photo;
use App\Area;

class UploadController extends Controller
{
  public function index()
  {
    //get areas and ids to fill dropdown
    $photos = Photo::join('areas', 'photos.area_id', '=', 'areas.id')
       ->select('area', 'areas.id','area_id')->distinct()
       ->get();
       return view('upload.upload', [
         'photos'=> $photos,

       ]);
  }

  public function upload()
  {
    //add photo and info to table
      $photo= new Photo();
      $photo->link = request('link');
      $photo->title = request('title');
      $photo->artist = request('artist');
      $photo->location = request('address');
      $photo->area_id = request('area');
      $photo->save();

      //flash messaging
      $link = request('link');

      if($link == ""){
        return redirect('/upload')
        ->with('successStatus', 'Please enter a photo link!');

      }else{
        return view('upload.thanks');
      }
  }
}
