<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DatabaseTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }

    // public function testDataBase()
    // {
    //     $this->assertDatabaseHas('users', [
    //         'email' => 'jbeer@example.com',
    //         'name' => 'Leta Mitchell'
    //     ]);
    // }

    // public function testDataBase2()
    // {
    //     $this->assertDatabaseMissing('users', [
    //         'email' => 'jbeer@example.com',
    //         'name' => 'test'
    //     ]);
    // }

    public function testDataBase()
    {
        // $user = factory(User::class)->make();

        // $users = factory(User::class, 5)->states('delinquent')->make();

        // $users = factory(User::class, 5)->states('premium', 'delinquent')->make();

        // $user = factory(User::class)->make([
        //     'name' => 'Abigail',
        // ]);

        // $user = factory(User::class, 3)->create([
        //     'name' => 'Abigail'
        // ]);

        // $users = factory(User::class, 3)
        // ->create()
        // ->each(function ($user) {
        //      $user->posts()->save(factory(Post::class)->make());
        //  });
    }
}
