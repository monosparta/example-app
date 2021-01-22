<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\CollectionController;

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

// 只有不加其他資訊的GET可以在瀏覽器直接測試，其他建議用postman(簡易：unix curl指令)

// 使用Controller的寫法
Route::resource('collection', CollectionController::class); 

// 將動作直接放在route的寫法
// php laravel不支援直接輸出JSON，物件需用陣列改寫
// Route::get('/collection/{id}', function (Request $request) {
//       if ($request->header('X-Secure-Code') != '12345678') {	
//         return response(['error' => 'Secure code not valid.'], 403);	
//     }	

//     return [json => content];	
// }); 
