<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserModelTest extends TestCase
{
    use DatabaseTransactions;

    private $user;

    /**
     * Entry prototype for testing
     *
     */
    private $entry = [
        'name' => 'Thomas',
        'email' => 'thomas.bockhorn@tecktonet.com',
        'password' => 'password'
    ];

    /**
     * Setup for each test
     */
    public function setUp() : Void
    {
        parent::setUp();
        $this->user = User::create($this->entry);
    }

    /**
     * A test to see if the first name is shown
     *
     * @return void
     */
    public function testUserHasNameAttribute()
    {
        //assert user has a first name
        $this->assertEquals('Thomas', $this->user->name);
    }

    /**
     * A test to see if the last name is shown
     *
     * @return void
     */
    public function testUserHasEmailAttribute()
    {
        //assert user has a email
        $this->assertEquals('thomas.bockhorn@tecktonet.com', $this->user->email);
    }

    /**
     * Test to see if password is in the mock database
     *
     * @return void
     */
    public function testUserHasPasswordAttribute()
    {
        //assort user has a password
        $this->assertEquals('password', $this->user->password);
    }
}