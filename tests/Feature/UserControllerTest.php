<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserControllerTest extends TestCase
{
    public function testGetIndex()
    {
        // Cache::shouldReceive('get')
        //             ->once()
        //             ->with('key')
        //             ->andReturn('value');

        // $response = $this->get('/users');

        // ...
    }
}
