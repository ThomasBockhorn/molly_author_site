<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class Book extends Controller
{
    /**
     * private variable that defines the database entries
     */
    private $book;

    /**
     * validation rules
     */
    public static $rules = [
        'title' => 'required | max:255',
        'author' => 'required',
        'description' => 'required',
    ];

    /**
     * Constructor that sets up the book instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->book = new Books;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retrieves data and binds it to the index page
        return view('books.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


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
        $this->validate($request, book::$rules);

        //stores a new entry into the books database
        $this->book->title = $request->title;
        $this->book->author = $request->author;
        $this->book->author_id = $request->author_id;
        $this->book->description = $request->description;

        //saves the entry
        $this->book->save();
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
        //Validates
        $this->validate($request, book::$rules);

        //Finds the record then updates it
        $this->book->findOrFail($id);
        $this->book->title = $request->title;
        $this->book->author = $request->author;
        $this->book->author_id = $request->author_id;
        $this->book->description = $request->description;

        //Saves entry
        $this->book->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //gets the data of the particular id
        $item = $this->book->findOrFail($id);

        //Deletes it
        $item->delete();
    }
}