<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class bannercontroller extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        return view('banner.index',compact('banner'));
    }

    public function update(Request $request)
    {
        $this->validate(\request(),
            [
                // 'banner1' => 'required',
                // 'banner2' => 'required',
                // 'banner3' => 'required',
                // 'background1' => 'required',
                // 'background2' => 'required',
                // 'about' => 'required',
                // 'service' => 'required',
                // 'team' => 'required',
                // 'contact' => 'required',
            ]);

        $banner = Banner::first();

        // if ($request->hasFile('banner1')) {
        //     $destination = 'images/' . $banner->banner1;
        //     if (File::exists($destination)) {
        //         File::delete($destination);
        //     }
        //     $file = $request->file('banner1');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = "image" . '.' . $extension;
        //     $file->move('images/', $filename);
        //     $banner->banner1 = $filename;
        // }
        // if ($request->hasFile('banner2')) {
        //     $destination = 'images/' . $banner->banner2;
        //     if (File::exists($destination)) {
        //         File::delete($destination);
        //     }
        //     $file = $request->file('banner2');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('images/', $filename);
        //     $banner->banner2 = $filename;
        // }

        // if ($request->hasFile('banner3')) {
        //     $destination = 'images/' . $banner->banner3;
        //     if (File::exists($destination)) {
        //         File::delete($destination);
        //     }
        //     $file = $request->file('banner3');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('images/', $filename);
        //     $banner->banner3 = $filename;
        // }

           if ($request->hasFile('background1')) {
            $destination = 'images/' . $banner->background1;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('background1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $banner->background1 = $filename;
        }

               if ($request->hasFile('background2')) {
            $destination = 'images/' . $banner->background2;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('background2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $banner->background2 = $filename;
        }


               if ($request->hasFile('about')) {
            $destination = 'images/' . $banner->about;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('about');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $banner->about = $filename;
        }


               if ($request->hasFile('service')) {
            $destination = 'images/' . $banner->service;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('service');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $banner->service = $filename;
        }

              if ($request->hasFile('team')) {
            $destination = 'images/' . $banner->team;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('team');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $banner->team = $filename;
        }


             if ($request->hasFile('contact')) {
            $destination = 'images/' . $banner->contact;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('contact');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $banner->contact = $filename;
        }

        $banner->update();
        return redirect()->back()->with('success', 'Company Information Added');

    }
}
