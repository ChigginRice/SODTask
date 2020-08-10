<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AllInputCorrectTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //All correct input
       $user = [
              'fname' => 'Joe',
              'lname' => 'Smith',
              'email' => 'testemail@test.com',
              'password' => 'passwordtest',
              'number' => '123456789'
            ];

            $response = $this->json('POST','/register', $user);
             $response->assertStatus(200);
    }
}
