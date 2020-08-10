<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NotAnEmailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Invalid email is input
        $user = [
              'fname' => 'Joe',
              'lname' => 'Smith',
              'email' => 'ThisIsNotAnEmail@@@gmail.com',
              'password' => 'passwordtest',
              'number' => '123456789'
            ];

            $response = $this->json('POST','/register', $user);
             $response->assertStatus(422);
    }
}
