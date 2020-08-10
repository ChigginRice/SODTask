<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LongerThanTenNumbersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Contact number is longer than 10 numbers
        $user = [
              'fname' => 'Joe',
              'lname' => 'Smith',
              'email' => 'testemail@test.com',
              'password' => 'passwordtest',
              'number' => '123456789101112'
            ];

            $response = $this->json('POST','/register', $user);
             $response->assertStatus(422);
    }
}
