<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

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
    private $entry = [];
}