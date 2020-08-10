<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LongerThanXCharTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Names are longers than 30 characters
       $user = [
              'fname' => 'ThisNameIsLongerThanThirtyCharactersIAssureYou',
              'lname' => 'SmithIsAlsoLongerThanThirtyCharactersIThink',
              'email' => 'testemail@test.com',
              'password' => 'passwordtest',
              'number' => '123456789'
            ];

            $response = $this->json('POST','/register', $user);
             $response->assertStatus(422);
    }
}
