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
        'event_time' => 'pm'
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
    public function testIfABookEntryCanBeDeleted()
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
}