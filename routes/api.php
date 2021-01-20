<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('collection/{id}', function (Request $request){
    if($request->header('X-Secure-Code') != '12345678'){
        return response(['error' => 'Secure code not valid.'],403);
    }

    return [
            "id" =>"0",
            "title" =>"親子步道",
            "subtitle" =>"老少鹹宜，生活好去處",
            "bgColor"=>"yellow",
            "icon"=>"blahblah/blahblah.png",
            "heyhey" => "heyheyhey",
            "trails"=>[
                [
                "id"=>"1",
                "title"=>"冷水坑步道",
                "location"=>"台北士林區",
                "distance"=>"全程約0.6km",
                "coverImage"=>"blah/blah/blah.jpg"
                ],
                [
                "id"=>"1",
                "title"=>"東吳大學登山步道",
                "location"=>"台北士林區",
                "distance"=>"全程約3.8km",
                "coverImage"=>"blah/blah/blah.jpg"
                ],
                [
                "id"=>"1",
                "title"=>"二子坪步道",
                "location"=>"新北市三芝區",
                "distance"=>"全程約3.6km",
                "coverImage"=>"blah/blah/blah.jpg"
                ]
            ]
            
    ];
});