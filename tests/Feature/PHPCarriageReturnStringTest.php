<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PHPCarriageReturnStringTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Test using carriage return
       $user = [
              'fname' => 'Joe\r\n',
              'lname' => 'Smith\r\n',
              'email' => 'testemail@test.com',
              'password' => 'passwordtest\r\n',
              'number' => '123456789'
            ];

            $response = $this->json('POST','/register', $user);
             $response->assertStatus(200);

    }
}
