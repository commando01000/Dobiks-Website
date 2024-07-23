<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(10);
        return view('back.client.index', compact('clients'));
    }

    public function create()
    {
        
        $categories = ClientCategory::where('status', 1)->get();
        return view('back.client.create', compact('categories'));
    }

    public function show(Client $client)
    {
        // if (\Auth::user()->can('edit-project')) {
        //     // dd($project);

        //     return view('back/project.view', compact('project'));
        // } else {
        //     return redirect()->back()->with('failed', __('Permission denied.'));
        // }
        // dd($client);
        return view('back/client.view', compact('client'));
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
            'client_category'       => $request->category_id,
            'created_by'            => \Auth::user()->id,
        ]);


        return redirect()->route('customer.index')->with('success', __('client created successfully.'));
    }

    public function edit(Client $client)
    {
        $categories = ClientCategory::where('status', 1)->get();
        return view('back.client.edit', compact('client', 'categories'));
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
        $client->client_category       = $request->category_id;
        $client->created_by            = \Auth::user()->id;
        $client->save();
        if (isset($old_cover))
            Storage::delete($old_cover);

        return redirect()->route('customer.index')->with('success', __('projects updated successfully.'));
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('customer.index')->with('success', __('client deleted successfully.'));
    }
}
