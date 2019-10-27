<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class BookController extends Controller
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
     * This protected function adds the data to the database
     *
     * @return void
     */
    protected function addValue($request)
    {
        $this->book->title = $request->title;
        $this->book->author = $request->author;
        $this->book->author_id = $request->author_id;
        $this->book->description = $request->description;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Books::orderBy('id', 'desc');

        //Retrieves data and binds it to the index page
        return view('book.index')->with('book', $book);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
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
        $this->validate($request, BookController::$rules);

        //stores a new entry into the books database
        $this->addValue($request);

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
        //Use the model to get 1 record from the database
        $oneBook = Books::findOrFail($id);

        //Show the view and pass the record
        return view('book.show')->with('oneBook', $oneBook);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Use the model to get 1 record from the database
        $oneBook = Books::findOrFail($id);

        //Show the view and pass the record
        return view('book.edit')->with('oneBook', $oneBook);
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
        $this->validate($request, BookController::$rules);

        //Finds the record then updates it
        $this->book->findOrFail($id);

        //stores a new entry into the books database
        $this->addValue($request);

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