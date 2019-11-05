<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;

class ImageController extends Controller
{
    /**
     * Global variable
     */
    private $image;

    /**
     * Validation
     */
    public static $imageValidation = [
        'image' => 'nullable|max:1999|image'
    ];

    /**
     * constructor that initiates a new image
     *
     * @return void
     */
    public function __construct()
    {
        $this->image = new Images;
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
        $this->validate($request, ImageController::$imageValidation);

        $this->image->image = $request->image;

        $this->image->save();
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
        //This validates if the information was sent
        $this->validate($request, ImageController::$imageValidation);

        $this->image->findOrFail($id);

        $this->image->image = $request->image;

        $this->image->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = $this->image->findOrFail($id);
        $image->delete();
    }
}