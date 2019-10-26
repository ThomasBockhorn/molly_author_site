<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\Book;
use App\Books;
use Illuminate\Validation\Rules;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;
use Symfony\Component\Debug\Exception\UndefinedFunctionException;
use Mockery\Undefined;
use phpDocumentor\Reflection\Types\Void_;

class BookTest extends TestCase
{
    use DatabaseTransactions;

    private $item;

    /**
     * This is the prototype entry for testing
     *
     */
    private $entry = [
        'title' => 'My First Book',
        'author' => 'Molly Felder',
        'author_id' => 1,
        'description' => 'my very first book I love',
    ];

    /**
     * Setup for each test
     */
    public function setUp() : Void
    {
        parent::setUp();

        $this->item = new Book;
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

        $this->item->store($request);
    }

    /**
     * This test will see if an book entry is added
     *
     * @return void
     */
    public function testIfABookEntryExists()
    {
        $this->databaseSetup();

        $this->assertDatabaseHas('books', $this->entry);
    }

    /**
     * This test to see if the validator works
     *
     * @return void
     */
    public function testIfValidatorForAddingABookWorks()
    {
        //Gets the validation and sees if it passes
        $validation = \Validator::make($this->entry, Book::$rules);

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
        $test = Books::firstOrFail();

        //Delete the record
        $this->item->destroy($test->id);

        //Sees if the database record is missing
        $this->assertDatabaseMissing('books', $this->entry);
    }

    /**
     * This test will check to see if the user can update a book entry
     *
     * @return void
     */
    public function testToSeeIfUserCanUpdateABookEntry()
    {
        //Adds entry to database
        $this->databaseSetup();

        //Gets the first entry
        $test = Books::firstOrFail();

        //Updated entry
        $updatedEntry = [
            'title' => 'My First Book',
            'author' => 'Thomas Bockhorn',
            'author_id' => 1,
            'description' => 'my very first book I love',
        ];

        //Create a mock request
        $updateRequest = new Request($updatedEntry);

        //Updates Entry
        $this->item->update($updateRequest, $test->id);

        //Tests to see if update works
        $this->assertDatabaseHas('books', $updatedEntry);
    }

    /**
     * This test will check to see if the user can get to the index
     *
     * @return void
     */
    public function testToSeeIfTheUserCanSeeTheIndex()
    {
        $response = $this->get('book/index');

        $response->assertStatus(200);
    }

    /**
     * This test will check to see if the user can see the data from index
     *
     * @return void
     */
    public function testToSeeIfDataIsBeingPassedToIndex()
    {
        $response = $this->call('GET', 'book');

        $response->assertViewHas('book');
    }

    /**
     * This test will check to see if the user can see the book.show
     *
     * @return void
     */
    public function testToSeeIfUserCanSeeTheShowPage()
    {
        $response = $this->get('book/show');

        $response->assertStatus(200);
    }
}