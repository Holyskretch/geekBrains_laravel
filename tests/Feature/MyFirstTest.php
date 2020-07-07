<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyFirstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertSeeText('Sample');
        $this->assertGuest($guard = null);
    }

    public function testAuthorization()
    {
        $response = $this->get('/news/authorization');

        $response->assertStatus(200);

    }
    public function testFeedback()
    {
        $response = $this->get('/form/feedback');

        $response->assertStatus(200);

        $response->assertSuccessful();
    }
    public function testUploading()
    {
        $response = $this->get('/form/uploading');

        $response->assertStatus(200);

        $response->assertSuccessful();
    }
    public function testAdmin()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);

        $response->assertSeeText('Welcome');
    }
    public function testAdminAdding()
    {
        $response = $this->get('/admin/adding');

        $response->assertStatus(200);
    }

}
