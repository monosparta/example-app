<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\DB; // 因用到資料庫存取而載入

use App\Http\Controllers\Controller; // 載入基礎的Controller
use App\Models\Trail; // 載入基礎的Model
use Illuminate\Http\Request;

class TrailController extends Controller
{
    public function store(Request $request) {
        if ($request->header('X-Secure-Code') != '123456789') {
            return response(['error' => 'Secure code nt valid.'], 403);
        } else {
            $Trail = new Trail;
            $Trail->title = $request->title;
            $Trail->location = $request->location;
            $Trail->distance = $request->distance;
            $Trail->coverImage = $request->coverImage;
            $Trail->save();
            return ['status' => 'Done'];
        }
    }
}
