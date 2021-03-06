<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactFormTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testContactFormPage()
    {
		//just creating a new user in case of no user 
        factory(User::class)->create();
		
		$user = User::first();
        $this->be($user); //You are now authenticated
        $response = $this->get('/contact-us');
        $response->assertStatus(200);
		
    }
}
