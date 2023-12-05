<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{

    public function index()
    {

        $client = Client::latest()->paginate(5);
        $clients = Client::first();
        return view('client.index', compact('client', 'clients'));
    }

    public function store()
    {

        $this->validate(\request(),
            [
                'name' => 'required',
                'tag_line' => 'required',
                'details' => 'required',
                'image' => 'required',

            ]);

        $clientImage = '';
        try {
            $clientExtension = \request()->file('image')->extension();
            $clientImage = "client" . uniqid() . "_" . time() . '.' . $clientExtension;

            \request()->file('image')->move('images/client', $clientImage);
            // dd($employeeImage);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        Client::create([
            'name' => \request('name'),
            'tag_line' => \request('tag_line'),
            'details' => \request('details'),
            'image' => $clientImage,
        ]);
        return redirect()->back()->with('success','Client Information Added Successfully');;

    }

    public function edit($id)
    {
        $client = Client::latest()->paginate(5);
        $clients = Client::find($id);
        return view('client.edit', compact('client', 'clients'));
    }

    public function update(Request $request, $id)
    {

        $client = Client::find($id);
        $client->name = $request->input('name');
        $client->tag_line = $request->input('tag_line');
        $client->details = $request->input('details');

        if ($request->hasFile('image')) {
            $destination = 'images/client/' . $client->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/client/', $filename);
            $client->image = $filename;
        }
        $client->update();
        return redirect()->route('client.index')->with('success','Client Information Update Successfully');

    }

    public function delete(Request $request, $id)
    {

        $client = client::find($id);
        $client->name = $request->input('name');
        $client->tag_line = $request->input('tag_line');
        $client->details = $request->input('details');
        $file = 'images/client/' . $client->filename;

        $client->delete();
        // if(Storage::delete($data->filename)) {
        //     $data->delete();
        //  }
        return redirect()->route('client.index')->with('success', 'Client Information Deleted Successfully');
    }

}
