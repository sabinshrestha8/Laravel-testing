<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_login_form(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_duplication() {
        $user1 = User::make([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Dary',
            'email' => 'dary@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

    public function test_delete_user() {
        $user = User::factory(1)->make();

        $user = User::first();

        if ($user) {
            $user->delete();
        }

        // $user?->delete();

        $this->assertTrue(true);
    }

    public function test_it_stores_new_users() {
        $response = $this->post('/register', [
            'name' => 'Sabin',
            'email' => 'sabin@email.com',
            'password' => 'sabin1234',
            'password_confirmation' => 'sabin1234'
        ]);

        $response->assertRedirect('/home');
    }

    public function test_database() {
        // $this->assertDatabaseHas('users', [
        //     'name' => 'Sabin',
        // ]);
        
        $this->assertDatabaseMissing('users', [
            'name' => 'John',
        ]);
    }

    public function test_if_seeders_works() {
        // the below statement is similar to php artisan db:seed command
        $this->seed(); // seed all seeders in the seeders folder

        // Add your assertions to check if the data has been properly seeded
        // For example, you can check if the count of seeded data matches the expected value
        $this->assertEquals(1, DB::table('users')->count());    }
}
