<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApiWithCorrectKey() // 函式要以test開頭命名，否則不被識別與執行
    {
        $response = $this->withHeaders([
            'X-Secure-Code' => '123456789',
        ])->get('/api/collection/1');

        $response
            ->assertStatus(200)
            ->assertJsonPath('title', '親子步道') // 包含特定資料
            ->assertJsonStructure([ // 檢查資料架構
            "id",
            "title",
            "subTitle",
            "bgColor",
            "iconImage",
            // "trails"
            ]);
    }

    public function testApiWithoutCorrectKey()
    {
        $response = $this->withHeaders([ // 檢查header是否攜帶key 
            'X-Secure-Code' => '12345679',
        ])->get('/api/collection/1');

        $response
            ->assertStatus(403);
    }
}
