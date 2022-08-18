<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_landing_page()
    {
        $this->get('/user')->assertStatus(200);
    }

    public function test_get_create_landing_page()
    {
        $this->get('/user/create')->assertStatus(200);
    }

    public function test_register_user()
    {
        $this->post('/user/create', [
            'name' => 'Hooman',
            'email' => 'test@sample.com',
            'password'=> 'password',
        ])->assertStatus(200);
    }


    public function test_user_delete_account()
    {
        $this->delete('user/1')->assertStatus(200);
    }


    public function test_edit_user_account()
    {
        $this->put('/user/create/2')->assertStatus(200);
    }
}