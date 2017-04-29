<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Photo;
use App\Area;

class GraffitiController extends Controller
{
    //
    public function index()
    {

        return view('explore');
    }

    public function search()
    {
        $searchterm = request('area');

       $photos = Photo::select('photos.id','link')
       ->join('areas', 'photos.area_id', '=', 'areas.id')
       ->where('area', 'LIKE', "%$searchterm%")
      ->get();

              return view('results', [
                'photos'=> $photos,
                'searchterm' => $searchterm
              ]);



}


  public function details($photoID){
    $photo = Photo::select('photos.id','area','location','link','artist')
    ->join('areas', 'photos.area_id', '=', 'areas.id')
    ->find($photoID);

    return view('details',[
      'photo'=> $photo
    ]);
  }


}
