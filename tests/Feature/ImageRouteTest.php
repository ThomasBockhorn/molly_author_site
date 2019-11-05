<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;

class ImageRouteTest extends TestCase
{
    //This test will check to see if the ImageController Index doesn't exits
    public function testToSeeIfImageControllerIndexDoesntExist()
    {
        $response = $this->get('ImageController@index');
        $response->assertNotFound($response);
    }

    //This test will check to see if the ImageController Index doesn't exits
    public function testToSeeIfImageControllerCreateDoesntExist()
    {
        $response = $this->get('ImageController@create');
        $response->assertNotFound($response);
    }

    //This test will check to see if the ImageController Index doesn't exits
    public function testToSeeIfImageControllerShowDoesntExist()
    {
        $response = $this->get('ImageController@show');
        $response->assertNotFound($response);
    }

    //This test will check to see if the ImageController Index doesn't exits
    public function testToSeeIfImageControllerEditDoesntExist()
    {
        $response = $this->get('ImageController@edit');
        $response->assertNotFound($response);
    }
}