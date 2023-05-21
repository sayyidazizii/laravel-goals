<?php

namespace App\Http\Controllers;
use App\Models\Goals;

use Illuminate\Http\Request;

class GoalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //get all posts from Models
          //$goals = Goals::latest()->get();

          //return view with data
          return view('index');
    }



    public function read()
    {
          //get all posts from Models
          $data = Goals::all();
          //return view with data
          return view('read')->with([
            'data' => $data
          ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data['image'] = $request->image; 
        $data['goals'] = $request->goals; 
        $data['amount'] = $request->amount; 
        $data['current'] = $request->current; 
        $data['balance'] = $request->balance; 
        $data['duedate'] = $request->duedate; 
        Goals::insert($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Goals::findOrFail($id);
        return view('edit')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Goals::findOrFail($id);
        $data->id = $id; 
        $data->image = $request->image; 
        $data->goals = $request->goals; 
        $data->amount = $request->amount; 
        $data->current = $request->current; 
        $data->balance = $request->balance; 
        $data->duedate = $request->duedate;
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Goals::findOrFail($id);
        $data->delete();
    }
}
