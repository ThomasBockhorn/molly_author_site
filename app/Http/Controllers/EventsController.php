<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

class EventsController extends Controller
{
    /**
     * private variable that defines the database entries
     */
    private $event;

    /**
     * validation rules
     */
    public static $rules = [
        'event_title' => 'required | max:255',
        'location' => 'required',
        'description' => 'required',
        'event_date' => 'required',
        'event_time' => 'required'
    ];

    /**
     * Constructor that sets up the book instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->event = new Events;
    }

    /**
     * This protected function adds the data to the database
     *
     * @return void
     */
    protected function addValue($request)
    {
        $this->event->event_title = $request->event_title;
        $this->event->location = $request->location;
        $this->event->description = $request->description;
        $this->event->event_date = $request->event_date;
        $this->event->event_time = $request->event_time;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //This validates if the information was sent
        $this->validate($request, EventsController::$rules);

         //stores a new entry into the events database
        $this->addValue($request);

         //saves the entry
        $this->event->save();
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $single_event = $this->event->findOrFail($id);

        $single_event->delete();
    }
}