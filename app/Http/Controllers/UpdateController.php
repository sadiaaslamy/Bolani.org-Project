<?php

namespace App\Http\Controllers;

use App\Models\Update;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $updates = Update::latest()->paginate(3);
        return view('updates.index', compact('updates'))->with(request()->input('page'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('updates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'description' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images/', $file);
            $data['image']=$file;
        }
        Update::create($data);
        return redirect()->route('updates.index')->with('success', 'Fund News created successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function show(Update $update)
    {
        return view('updates.show', compact('update'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function edit(Update $update)
    {
     return view('updates.edit', compact('update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Update $update)
    {
        $data= $request->validate([
            'description' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images/', $file);
            $data['image']=$file;
        }
        $update->update($request->all());
        return redirect()->route('updates.index')->with('success', 'Fund News Updated successfuly');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function destroy(Update $update)
    {
        $update->delete();
        return redirect()->route('updates.index')->with('success','Fund News Deleted successfully');
    }
}
