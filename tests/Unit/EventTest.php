<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Events;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\EventsController;
use Illuminate\Http\Request;

class EventTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Global variable that holds the database
     */
    private $event;

    /**
     * Global array that provides a prototype entry for event
     */
    private $entry = [
        'event_title' => 'My First Event',
        'location' => '113 Sweet Hollow Way',
        'description' => 'First Book signing',
        'event_date' => 'November 1',
        'event_time' => '2pm'
    ];

    /**
     * Setup for each test
     */
    public function setUp() : Void
    {
        parent::setUp();

        $this->event = new EventsController;
    }

    /**
     * This function will add a demo entry to a database
     *
     * @return void
     */
    public function databaseSetup()
    {
        //adds an entry
        $request = new Request($this->entry);

        $this->event->store($request);
    }

    /**
     * This test will see if an book entry is added
     *
     * @return void
     */
    public function testIfAEventEntryExists()
    {
        $this->databaseSetup();

        $this->assertDatabaseHas('events', $this->entry);
    }

    /**
     * This test to see if the validator works
     *
     * @return void
     */
    public function testIfValidatorForAddingAEventWorks()
    {
        //Gets the validation and sees if it passes
        $validation = \Validator::make($this->entry, EventsController::$rules);

        $this->assertTrue($validation->passes());
    }

    /**
     * This tests if the data can be deleted
     *
     * @return void
     */
    public function testIfEventEntryCanBeDeleted()
    {
        //Adds entry to database
        $this->databaseSetup();

        //Gets an individual record
        $test = Events::firstOrFail();

        //Delete the record
        $this->event->destroy($test->id);

        //Sees if the database record is missing
        $this->assertDatabaseMissing('events', $this->entry);
    }

    /**
     * This test will check to see if the user can update an event entry
     *
     * @return void
     */
    public function testToSeeIfUserCanUpdateAnEventEntry()
    {
        //Adds entry to database
        $this->databaseSetup();

        //Gets the first entry
        $test = Events::firstOrFail();

        //Updated entry
        $updatedEntry = [
            'event_title' => 'My First Event',
            'location' => '113 Sweet Hollow Way',
            'description' => 'First Book signing',
            'event_date' => 'November 30',
            'event_time' => '2pm'
        ];

        //Create a mock request
        $updateRequest = new Request($updatedEntry);

        //Updates Entry
        $this->event->update($updateRequest, $test->id);

        //Tests to see if update works
        $this->assertDatabaseHas('events', $updatedEntry);
    }

    /**
     * This test will check to see if the user can get to the index
     *
     * @return void
     */
    public function testToSeeIfTheUserCanSeeTheIndex()
    {
        $response = $this->call('GET', 'events/');

        $this->assertEquals(200, $response->status());

        $response->assertViewHas('events');
    }

    /**
     * This test will check to see if the user can see the show page
     *
     * @return void
     */
    public function testToSeeIfTheUserCanSeeTheShow()
    {
       //sets up database
        $this->databaseSetup();

       //Gets the first entry
        $test = Events::firstOrFail();

       //Gets the response
        $response = $this->get(route('events.show', ['id' => $test->id]));

       //Sees if the response is 200
        $this->assertEquals(200, $response->status());
    }

    /**
     * This test will see if create form shows up to the user
     *
     * @return void
     */
    public function testToSeeIfTheUserCanSeeTheCreateForm()
    {
        $response = $this->get(route('events.create'));

        //Sees if the response is 200
        $this->assertEquals(200, $response->status());
    }


}