<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CollectionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_collection_api_with_header(){
        $response = $this->withHeaders([
            'X-secure-Code' => '1234567',])->getJson('/api/collection/1');
        $response
                ->assertStatus(200)
                ->assertJsonPath('title','親子步道')
                ->assertJsonStructure([
                    'id',
                    'title',
                    'subTitle',
                    'bgColor',
                    ]);

    }
}
