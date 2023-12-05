<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
   public function index(){

    $videos =Video::latest()->paginate(5);
    $video =Video::first();
    return view('video.index', compact('videos','video'));

   }


   public function store(Request $request)
   {
       $this->validate(\request(),
           [

               'video_url' => 'required',
               'image' => 'required|image|mimes:jpeg,jpg,png',

           ]);

           $videoImage = '';
           try {
               $extension = \request()->file('image')->extension();
               $filename = $filename = time() . '.' . $extension;

               \request()->file('image')->move('images/video', $filename);
               // dd($sliderImage);
           } catch (\Exception $e) {
               dd($e->getMessage());
           }

       Video::create([
             'image' => $filename,
            'video_url' =>\request('video_url'),
       ]);

       return redirect()->back()->with('success',' Video Url Store  Sucessfully');

   }



   public function edit($id){
    $videos = Video::latest()->paginate(5);
    $video = Video::find($id);
    return view ('video.edit',compact('videos','video'));
}



public function update(Request $request, $id){

    $videos =Video::find($id);
    if ($request->hasFile('image')) {
        $destination = 'images/video/' . $videos->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('images/video/', $filename);
        $videos->image = $filename;
    }
    $videos->video_url = $request->input('video_url');

    $videos->update();
    return redirect()->route('video.index')->with('success','Url Updated Sucessfully');


}

public function delete(Request $request, $id)
{

    $videos =Video::find($id);
    $file ='images/video/' . $videos->filename;
    $videos->video_url = $request->input('video_url');

    $videos->delete();
    // if(Storage::delete($data->filename)) {
    //     $data->delete();
    //  }
    return redirect()->route('video.index')->with('success','Video Url Deleted successfully');;
}





}
