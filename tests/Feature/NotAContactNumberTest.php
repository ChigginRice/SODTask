<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NotAContactNumberTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Contact number is not a number
       $user = [
              'fname' => 'Joe',
              'lname' => 'Smith',
              'email' => 'testemail@test.com',
              'password' => 'passwordtest',
              'number' => 'ThisIsObviouslyNotAContact'
            ];

            $response = $this->json('POST','/register', $user);
             $response->assertStatus(422);
    }
}
