<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(10);
        return view('back.client.index', compact('clients'));
    }

    public function create()
    {
        return view('back.client.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name'             => 'required',
            'cover'            => 'image|mimes:jpg,jpeg,png',
            'description'       => 'nullable|string',
        ]);
        if ($request->hasFile('cover')) {
            request()->validate([
                'cover' => 'mimes:jpg,jpeg,png',
            ]);
            $path = $request->file('cover')->store('clients');
        }

          client::create([
            "name"                 => $request->name,
            'description'           => $request->description,
            'cover'                => $path,
            'created_by'            => \Auth::user()->id,
        ]);


        return redirect()->route('client.index')->with('success', __('client created successfully.'));
    }

    public function edit(Client $client)
    {
        return view('back.client.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        request()->validate([
            'name'             => 'required',
            'cover'            => 'image|mimes:jpg,jpeg,png',
            'description'       => 'nullable|string',
        ]);

        if ($request->hasFile('cover')) {
            request()->validate([
                'cover' => 'required|image|mimes:jpg,png,jpeg',
            ]);
            $old_cover = $client->cover;
            $path           = $request->file('cover')->store('clients');
            $client->cover   = $path;
        }

        $client->name                 = $request->name;
        $client->description           = $request->description;
        $client->created_by            = \Auth::user()->id;
        $client->save();
        if(isset($old_cover))
        Storage::delete($old_cover);

        return redirect()->route('client.index')->with('success', __('projects updated successfully.'));
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index')->with('success', __('client deleted successfully.'));
    }
}
