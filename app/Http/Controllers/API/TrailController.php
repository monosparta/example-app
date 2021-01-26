<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Trail; //載進基礎的model


class TrailController extends Controller
{
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->header('X-Secure-Code')!='12345678'){
            return response(['error' => 'Secure code not valide.'], 403);
        } else{
            $trail = new Trail; //利用載入的model
            $trail->title = $request->title;
            $trail->location = $request->location;
            $trail->distance = $request->distance;
            $trail->coverImage = $request->coverImage;
            $trail->save();
        }
        
    }

   
}
