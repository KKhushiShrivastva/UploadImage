<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;   
// use Image;


class UploadController extends Controller
{
    public function upload(Request $req)
    {
        $name = $req->name;  // Assuming $req is your request object
        
        $image = $req->file('file');
// dd($image);
        $imageName = time().'.jpg';
        // dd($imageName);
       

        $destinationPathThumbnail = public_path('Image_300');

        $img = Image::make($image);

        $img->resize(300, 300, function ($constraint) {

            $constraint->aspectRatio();

        })->save($destinationPathThumbnail.'/'.$imageName);

     
        $destinationPath = public_path('Image_300');

        $uploaded = $image->move($destinationPath, $imageName);

        if($uploaded ){
 // uploding 1000px
 $destinationPathThumbnail1 = public_path('Image_1000');

 $img->resize(1000, 1000, function ($constraint) {

     $constraint->aspectRatio();

 })->save($destinationPathThumbnail1.'/'.$imageName);

 $destinationPathnew = public_path('Image_1000');

//  $image->move($destinationPathnew, $imageName);
$user = User::create([
   'name' => $name,
   'image_3' => time().'.jpg',
   'image_6' => time().'.jpg',
]);
 if($user){
    return redirect('/image');
 }
        }
        
    }

    public function getImages(){
        $getUser = User::all();
        return view('/viewImage',compact('getUser'));
    }
}
