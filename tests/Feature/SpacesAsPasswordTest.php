<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SpacesAsPasswordTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Password will be made up of purely spaces
       $user = [
              'fname' => 'Joe',
              'lname' => 'Smith',
              'email' => 'testemail@test.com',
              'password' => '           ',
              'number' => '123456789'
            ];

            $response = $this->json('POST','/register', $user);
             $response->assertStatus(422);
    }
}
