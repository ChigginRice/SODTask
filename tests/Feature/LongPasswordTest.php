<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LongPasswordTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Password is longer than 128 characters
       $user = [
              'fname' => 'Joe',
              'lname' => 'Smith',
              'email' => 'testemail@test.com',
              'password' => 'passwordislongerthan128passwordislongerthan128passwordislongerthan128passwordislongerthan128passwordislongerthan128passwordislongerthan128passwordislongerthan128passwordislongerthan128passwordislongerthan128passwordislongerthan128passwordislongerthan128passwordislongerthan128',
              'number' => '123456789'
            ];

            $response = $this->json('POST','/register', $user);
             $response->assertStatus(422);
    }
}
