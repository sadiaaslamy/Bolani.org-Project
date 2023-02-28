<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FundController extends Controller
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
        $funds = Fund::whereUserId(auth()->user()->id)->latest()->paginate(3);
        return view('layouts.index', compact('funds'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('layouts.create');
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
            'title' =>'required',
            'goal' =>'required',
            'description' => 'required',
            'file_path' => 'required',
        ]);

        $fundImg = 'file_path';

        if($request->hasFile($fundImg)){
            $file = $request->file($fundImg)->getClientOriginalName();
            $request->file($fundImg)->storeAs('public/images/', $file);
            $data[$fundImg]=$file;

        }

        $data['user_id']=auth()->user()->id;
        // dd(auth()->user()->id);
        Fund::create($data);
        return redirect()->route('funds.index')->with('success', 'Fund created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function show(Fund $fund)
    {
         if($fund->user->id!==auth()->user()->id)
           abort(403);
        return view('layouts.show', compact('fund'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function edit(Fund $fund)
    {
        if($fund->user->id!==auth()->user()->id){
            abort(403);
        }
        return view('layouts.edit',compact('fund'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fund $fund)
    {
        if($fund->user->id!==auth()->user()->id){
            abort(403);
        }
        $data= $request->validate([
            'title' =>'required',
            'goal' =>'required',
            'description' => 'required',
            'file_path' => 'required',
        ]);

        if($request->hasFile('file_path')){
            $file = $request->file('file_path')->getClientOriginalName();
            $request->file('file_path')->storeAs('public/images/', $file);
            $data['file_path']=$file;

        }

        $fund->update($request->all());
        return redirect()->route('funds.index')->with('success', 'Fund Updated successfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fund $fund)
    {
        $fund->delete();
        return redirect()->route('funds.index')->with('success', 'Fund deleted successfuly');

    }
}

