<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LackOfContactNumbersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Contact number is less than 8
       $user = [
              'fname' => 'Joe',
              'lname' => 'Smith',
              'email' => 'testemail@test.com',
              'password' => 'passwordtest',
              'number' => '123'
            ];

            $response = $this->json('POST','/register', $user);
             $response->assertStatus(422);
    }
}
