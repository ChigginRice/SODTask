<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SpacesAsEmailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //email will contain carriage return, spaces and letter
        $user = [
              'fname' => 'Joe',
              'lname' => 'Smith',
              'email' => ' \r a   @ \n b  .com',
              'password' => 'passwordtest',
              'number' => '123456789'
            ];

            $response = $this->json('POST','/register', $user);
             $response->assertStatus(422);

    }
}
