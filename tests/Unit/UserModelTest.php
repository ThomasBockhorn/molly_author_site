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
     * This is the prototype entry for testing
     *
     */
    public function setInfo()
    {
        $entry = [
            'name' => 'Thomas',
            'email' => 'thomas.bockhorn@tecktonet.com',
            'password' => 'password'
        ];

        $this->user = User::create($entry);
    }

    /**
     * A test to see if the first name is shown
     *
     * @return void
     */
    public function testUserHasNameAttribute()
    {
        $this->setInfo();

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
        $this->setInfo();

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
        $this->setInfo();

        //assort user has a password
        $this->assertEquals('password', $this->user->password);
    }
}