<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function upload(Request $request){
    // $params = $request->validate([
    //     'image' => 'required|file|image|max:4000',
    // ]);
    var_dump($request->file('image'));
    var_dump(asset('storage/file.txt'));
    $request->file('image')->move(public_path('images'), 'a.jpg');
    // $file = $request->file('image');
    // Storage::put('decoded.jpg', base64_decode($request['photo']));
    // $url = storage_path('app/decoded.jpg');
    // $image = Image::make($url);
    // $image = \Image::make(file_get_contents($file->getRealPath()));
    // $image
    //     ->save(public_path().'/images/'.$file->hashName())
    //     ->resize(300, 300)
    //     ->save(public_path().'/images/300-300-'.$file->hashName())
    //     ->resize(500, 500)
    //     ->save(public_path().'/images/500-500-'.$file->hashName());

    // return redirect('/images/'.$file->hashName());
    return response()->json(['apple' => 'red', 'peach' => 'pink','a'=> '']);
  }
}
