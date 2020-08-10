<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NoContactNumberTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //No contact number input
       $user = [
              'fname' => 'Joe',
              'lname' => 'Smith',
              'email' => 'testemail@test.com',
              'password' => 'passwordtest'
            ];

            $response = $this->json('POST','/register', $user);
             $response->assertStatus(200);
    }
}
