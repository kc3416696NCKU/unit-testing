<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Log;
use App\Http\Controllers\GetDataController;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;


class GetData extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetdata()
    {
        //================測試true, false================
        // $getIndex = new GetDataController();
        // $this->assertEquals(true,$getIndex->Index(true));
        // $this->assertTrue($getIndex->Index(true));
        // Log::info("result : ".$getIndex->data);
        // $this->assertFalse($getIndex->Index(false));

        //================測試HTTP狀態================
        // $response = $this->get('/GetDataGet/data');
        // $response -> assertStatus(200);

        //================測試header================
        // $response = $this->withHeaders([
        //     'X-Header' => 'Value',
        // ])->json('POST', '/GetDataPOST', [
        //                                 'name' => 'Sally'
        // ]);

        // $response
        //     ->assertStatus(201)
        //     ->assertJson([
        //         'name' => 'Sally'
        //     ]);

        //================測試session驗證================
        // $user = factory(User::class)->create();     //產生user

        // $response = $this->actingAs($user)
        //                  ->withSession(['foo' => 'bar'])
        //                  ->get('/');

        //================測試檔案上傳================
        // Storage::fake('avatars');

        // $file = UploadedFile::fake()->image('avatar.jpg');

        // $response = $this->json('POST', '/GetDataPOST', [
        //     'avatar' => $file,
        // ]);

        // Assert the file was stored...
        // Storage::disk('avatars')->assertExists($file->hashName());

        // Assert a file does not exist...
        // Storage::disk('avatars')->assertMissing('missing.jpg');

        //================測試console================
        // Artisan::command('question', function () {
        //     $name = $this->ask('What is your name?');

        //     $language = $this->choice('Which language do you program in?', [
        //         'PHP',
        //         'Ruby',
        //         'Python',
        //     ]);

        //     $this->line('Your name is '.$name.' and you program in '.$language.'.');

        //     Log::info($name);
        //     Log::info($language);
        // });

        // $this->artisan('question')
        // ->expectsQuestion('What is your name?', 'Taylor Otwell')
        // ->expectsQuestion('Which language do you program in?', 'Ruby')
        // ->expectsOutput('Your name is Taylor Otwell and you program in Ruby.')
        // ->assertExitCode(0);


    }
}
