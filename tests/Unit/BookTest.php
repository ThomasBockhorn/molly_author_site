<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\Book;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;
use Symfony\Component\Debug\Exception\UndefinedFunctionException;
use Mockery\Undefined;

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
        'description' => 'my very first book I love'
    ];

    /**
     * Sets up the Book test
     *
     * @return void
     */
    public function bookTest()
    {
        $this->item = new Book;
    }

    /**
     * This test will see if an book entry is added
     *
     * @return void
     */
    public function testIfBookAddedHasATitle()
    {
        $this->bookTest();

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
    /*public function testIfValidatorForAddingABookWorks()
    {

    }*/


}