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
    public function testCollectionWithoutSecureCodeTest()
    {
        $response = $this->getJson('/api/collection/0');
        $response->assertStatus(403);
    }

    public function testCollectionWithSecureCodeTest()
    {
            $response = $this->withHeaders([
                'X-token' => 123456,
            ])->getJson('/api/collection/0');
            $response->assertStatus(200)->assertJsonPath('title','親子步道')->assertJsonStructure([
                'id',
                'title',
                'subTitle',
                'bgColor',
                'iconImage',
                'trails'
            ]);        
    }
}
