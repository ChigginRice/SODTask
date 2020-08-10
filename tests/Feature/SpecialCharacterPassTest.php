<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SpecialCharacterPassTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Password is made up of special characters
       $user = [
              'fname' => 'Не имя',
              'lname' => 'Не фамилия',
              'email' => 'testemail@test.com',
              'password' => 'Этопарольда',
              'number' => '123456789'
            ];

            $response = $this->json('POST','/register', $user);
             $response->assertStatus(200);
    }
}
