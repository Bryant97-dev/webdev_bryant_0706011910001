<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::all();
        return view ('index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pages = 'event';
        $users = User::all();
        return view ('addEvent', compact('pages', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  $pages = 'event';
        //$users = User::pluck('id','name', 'email');
       // $users = User::pluck('id','name', 'email');
        //
       //dd($request->all());
       Event::create($request->all());
      // return view ('index');
      //return redirect ()->route('/');
     // return redirect ()-> route('indexs');

      //$data = $request->validate([
      // 'title' => 'required|string',
      // 'description' => 'required|unique:events',
      // 'status' => 'required|string',
     // ]);

        //Event::create([
        //    'title' => $data ['title'],
        //    'description' => $data ['description'],
       //     'status' => $data ['status'],
      //  ]);

        return redirect()->route('event.store');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
        return view('editEvent', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
        $event->update($request->all());
        //return redirect()->route('indexs');
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
        $event -> delete();
        return redirect() -> back();
    }
}
