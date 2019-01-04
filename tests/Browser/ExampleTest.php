<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Pages\Login;
use Tests\Browser\Components\Datepicker;

class ExampleTest extends DuskTestCase
{
    // use DatabaseMigrations;

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->assertSee('Laravel');
        // });

        //測試驗證登入
        // $user = factory(User::class)->create([
        //     'email' => 'taylor@laravel.com',
        // ]);

        // $this->browse(function ($browser) use ($user) {
        //     $browser->visit('/')
        //             ->type('email', $user->email)
        //             ->type('password', 'secret')
        //             ->press('Login')
        //             ->assertPathIs('/');
        // });

        //測試多個瀏覽器
        // $this->browse(function ($first, $second) {
        //     $first->loginAs(User::find(1))
        //           ->visit('/')
        //           ->waitForText('Message');

        //     $second->loginAs(User::find(2))
        //            ->visit('/')
        //            ->waitForText('Message')
        //            ->type('message', 'Hey Taylor')
        //            ->press('Send');

        //     $first->waitForText('Hey Taylor')   //這邊有錯誤
        //           ->assertSee('Hey Taylor');
        // });

        //測試Dusk選擇器
        // $this->browse(function (Browser $browser) {
            // $browser->visit('/')
            //         ->click('@test-btn')    //模擬點擊button
            //         ->assertSee('Laravel');  //預測會看到的字

        //     $browser->visit('/')
        //             ->clickLink('News')    //模擬點擊link
        //             ->assertSee('PARTNERS'); //預測會看到的字

        // });

        //測試取得值和設定值
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->value('@input_test','test')   //設定值
        //             ->assertInputValue('@input_test','test');   //看input_test的值是否為'test'

            // $value = $browser->value('selector');    //取值
        // });

        //輸入值
        // $this->browse(function (Browser $browser) {
        //         $browser->visit('/')
        //                 ->type('@email', 'taylor@laravel.com')  //輸入值
        //                 ->assertInputValue('@email','taylor@laravel.com');
        // });

        //既有值後面加入值
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->type('@email', 'taylor@laravel.com')  //輸入值
        //             ->append('@email','.tw')    //加入值
        //             ->assertInputValue('@email','taylor@laravel.com.tw');
        // });

        //測試下拉式選單
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->select('choice','1')      //選擇的值
        //             ->assertSelected('choice','1');     //選擇的值是否為'1'
        // });

        //測試checkbox
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->check('check_box')      //勾選checkbox
        //             ->assertChecked('check_box');     //是否勾選
        // });

        //測試radio
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->radio('radio_test','1')      //勾選radio
        //             ->assertRadioSelected('radio_test','1');     //勾選的值是否為'1'
        // });

        //測試鍵盤輸入
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->keys('@input_test',['{shift}','test'],'test')     //按住shift再打字和正常打字
        //             ->assertInputValue('@input_test','TESTtest');
        // });

        //測試範圍選擇器    (未成功)
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //     ->with('@test_a', function ($table) {
        //         $table->assertSee('Documentation');
        //     });
        // });

        //測試暫停測試
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->pause(1000)
        //             ->radio('radio_test','1')      //勾選radio
        //             ->assertRadioSelected('radio_test','1');     //勾選的值是否為'1'
        // });

        //測試在頁面等待
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->waitForLocation('/')
        //             ->assertSee('Laravel');
        // });

        //測試等待頁面重新載入  (未成功)
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->clickLink('Home')
        //             ->waitForReload()
        //             ->assertSee('Laravel');
        // });

        //測試等待和回傳
        // $this->browse(function (Browser $browser) {
        //     $browser->waitUsing(10, 1, function () use ($browser) {
        //         return $browser->visit('/')
        //                         ->assertSee('Laravel');
        //     }, "Something wasn't ready in time.");
        // });

        //使用Page
        $this->browse(function (Browser $browser) {
            $browser->visit(new Login)
                    ->assertSee('Laravel');
        });

        //使用on方法載入Page
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //     ->clickLink('Home')
        //     ->on(new Login)
        //     ->assertSee('Message');
        // });

        //使用Page中自行定義的方法
        // $this->browse(function (Browser $browser) {
        //         $browser->visit(new Login)
        //                 ->createPlaylist('My Playlist')
        //                 ->assertSee('My Playlist');//
        // });

        //使用Component中自行定義的方法
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             // ->within(new DatePicker, function ($browser) {
        //             //     $browser->selectDate(1, 2018);
        //             // })
        //             ->assertSee('January');
        // });
    }
}
