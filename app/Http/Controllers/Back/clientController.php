<?php

namespace App\Http\Controllers\back;

use App\DataTables\ClientDataTable;
use App\Http\Controllers\Controller;
use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ClientDataTable $dataTable)
    {
       
            if (\Auth::user()->can('manage-blog')) {
    
                return $dataTable->render('back/Clients.index');
            } else {
                return redirect()->back()->with('failed', __('Permission denied.'));
            }
        
    }

    /**
     * Show the form for creating a new resource.
     */
  
     public function create()
     {
         if (\Auth::user()->can('create-blog')) {
             return view('back/Clients.create');
         } else {
             return redirect()->back()->with('failed', __('Permission denied.'));
         }
     }

    /**
     * Store a newly created resource in storage.
     */  public function store(Request $request)
    {
        if (\Auth::user()->can('create-blog')) {
            request()->validate([
                'name'             => 'required',
                'cover'            => 'image|mimes:jpg,jpeg,png',
                'body'       => 'required',
            ]);




            if ($request->hasFile('cover')) {
                request()->validate([
                    'cover' => 'mimes:jpg,jpeg,png',
                ]);
                $path = $request->file('cover')->store('clients');
            }

              client::create([
                "name"                 => $request->name,
                'description'           => $request->body,
                'builder'           => request()->builder ?? "off",
                'cover'                => $path,
                'created_by'            => \Auth::user()->id,
            ]);

         

            return redirect()->route('client.index')->with('success', __('client created successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $client)
    {
        if (\Auth::user()->can('edit-blog')) {
            return view('back/Clients.edit', compact('client'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client $client)
    {
        if (\Auth::user()->can('edit-blog')) {
            request()->validate([
                'name'             => 'required',
                'body'       => 'required',
            ]);
         
            if ($request->hasFile('cover')) {
                request()->validate([
                    'cover' => 'required|image|mimes:jpg,png,jpeg',
                ]);
                $old_cover = $client->cover; 
                $path           = $request->file('cover')->store('blog');
                $client->cover   = $path;
            }
            $client->builder               = $request->builder ?? "off";
            $client->name                 = $request->name;
            $client->description           = $request->body;
            $client->created_by            = \Auth::user()->id;
            $client->save();
            if(isset($old_cover))
            Storage::delete($old_cover);

            return redirect()->route('client.index')->with('success', __('projects updated successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        //
    }
}
