<?php

namespace App\Http\Controllers\API; // 改成起始的route路徑：API：API

use Illuminate\Support\Facades\DB; // 因用到資料庫存取而載入

use App\Http\Controllers\Controller; // 載入基礎的Controller
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) // 函式於Request回傳用到的變數
    {
        // 檢查開頭是否攜帶(自定義)驗證碼，沒有的話給JSON格式的錯誤訊息，相同格式方便存取
        if ($request->header('X-Secure-Code') != '123456789') {
            return response(['error' => 'Secure code nt valid.'], 403);
        }

        // php laravel不支援直接輸出JSON，物件需用陣列改寫
        return response()->json(DB::table('collections')->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
