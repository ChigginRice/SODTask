<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SpecialCharacterNameTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        
       $user = [
              'fname' => 'Не имя',
              'lname' => 'Не фамилия',
              'email' => 'testemail@test.com',
              'password' => 'passwordtest',
              'number' => '123456789'
            ];

            $response = $this->json('POST','/register', $user);
             $response->assertStatus(200);
    }
}
