<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CollectionController;
use App\Http\Controllers\API\TrailController;

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

Route::resource('collection', CollectionController::class); //上述程式為新增一個路由 collection 並使用 resource 這個 function 可以自動處理 CollectionController 中的方法，自動判別是要使用 show, destroy, update 等 function. //resouce({路由名字}, {controller中要使用的class名字})

Route::resource('/trail', TrailController::class);