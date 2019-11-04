<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\File;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Images;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\ImageController;

class ImageControllerTest extends TestCase
{
    use DatabaseTransactions;

    private $image;
    private $exampleImage;
    private $response;
    private $testRequest;

    /**
     * Setup for each test
     */
    public function setUp() : Void
    {
        parent::setUp();

        $this->image = new ImageController;

        //Creates a simulated image file from a fake file in resources/test
        $this->exampleImage = new File(resource_path('tests/resources/testfile.jpg'));

        //Create a new request
        $this->testRequest = [
            'image' => $this->exampleImage
        ];

        $this->response = new Request($this->testRequest);
    }

    /**
     * This test will see if the image reference gets added to database
     *
     * @return void
     */
    public function testToSeeIfImageReferenceGetsAddedToDatabase()
    {
        $this->image->store($this->response);

        $this->assertDatabaseHas('images', $this->testRequest);
    }

}