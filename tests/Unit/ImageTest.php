<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Http\Controllers\ImageController;
use App\Image;

class ImageTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Global variable for database transactions
     */
    private $imageData;

    /**
     * Prototype for image entry
     */
    private $imageEntry = [
        'image' => 'testfile.jpg'
    ];

    /**
     * Setup for each test
     */
    public function setUp() : Void
    {
        parent::setUp();

        $this->imageData = new ImageController;
    }


    /**
     * Test to see if the image gets added
     *
     * @return void
     */
    public function testToSeeIfImageGetsAdded()
    {
        //adds an entry
        $request = new Request($this->imageEntry);

        $this->imageData->store($request);

        $this->assertDatabaseHas('images', $this->imageEntry);
    }


}