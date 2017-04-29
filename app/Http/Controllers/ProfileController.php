<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Photo;
use App\Area;
use App\Profile;

class ProfileController extends Controller
{

//get the favorites the user added
  public function getFaves()
  {
    $user_id = Auth::user()->id;

    $photo =  Profile::select('link_id','link','user_id','photos.id', 'users.id','profiles.id')
    ->where('user_id', $user_id)
    ->join('photos', 'profiles.link_id', '=', 'photos.id')
    ->join('users','profiles.user_id','=','users.id')
    ->get();


    return view('profile',[
      'photo'=> $photo
    ]);
  }
//add the favorite photos to user db
  public function addPhotos(Request $request)
  {

    $user_id = Auth::user()->id;
    $photo_id= request('photo_id');


    $photo = new Profile();
    $photo->user_id = $user_id;
    $photo->link_id = $photo_id;
    $photo->save();

    return redirect() ->back()
    ->with('successStatus', 'Photo was successfully added to your profile!');

  }
//delete the photos the user wants to delete
  public function destroy($id) {

      $photo = Profile::find($id);
      $photo->delete();

    return redirect('/profile')
    ->with('successStatus', 'Photo was successfully deleted!');
  }
}
