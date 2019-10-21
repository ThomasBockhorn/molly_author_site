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
     * Setup for each test
     */
    public function setUp() : Void
    {
        parent::setUp();
        $this->item = new Book;
    }
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
     * This test will see if an book entry is added
     *
     * @return void
     */
    public function testIfABookEntryExists()
    {
        //converts an array to a request
        $request = new Request($this->entry);
        $this->item->store($request);
        $this->assertDatabaseHas('books', $this->entry);
    }

    /**
     * This test to see if the validator works
     *
     * @return void
     */
    public function testIfValidatorForAddingABookWorks()
    {

        $validation = \Validator::make($this->entry, Book::$rules);

        $this->assertTrue($validation->passes());
    }

    /**
     * This tests if the data is deleted
     *
     * @return void
     */



}