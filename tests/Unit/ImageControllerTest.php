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
     * This test will see if the image reference gets added to database.
     * This test will also consequently check if the validation work.
     *
     * @return void
     */
    public function testToSeeIfImageReferenceGetsAddedToDatabase()
    {
        $this->image->store($this->response);

        $this->assertDatabaseHas('images', $this->testRequest);
    }

    /**
     * This will test if the image reference gets deleted
     *
     * @return void
     */
    public function testToSeeIfImageReferenceGetsDeletedFromDatabase()
    {
        //Adding the image to database
        $this->image->store($this->response);

        //Getting the image from database
        $example = Images::firstOrFail();

        //destroying the image
        $this->image->destroy($example->id);

        //checking to see if its missing
        $this->assertDatabaseMissing('images', $this->testRequest);
    }

    /**
     * This test will check to see if an image reference in the database can be swapped
     *
     * @return void
     */
    public function testToSeeIfImageReferenceCanBeSwappedWithAnotherImageReference()
    {
        //Creates a simulated image file from a fake file in resources/test
        $exampleImage2 = new File(resource_path('tests/resources/testfile2.jpg'));

        //Create a new request
        $testRequest2 = [
            'image' => $exampleImage2
        ];

        $response = new Request($testRequest2);

        //Gets the current id
        $this->image->store($this->response);
        $example = Images::firstOrFail();

        //Updates the image
        $this->image->update($response, $example->id);

        $this->assertDatabaseHas('images', $testRequest2);
    }
}