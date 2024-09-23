<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $userId)
    {
        return response()->json(['status'=> 'ok', 'user' => $userId], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $deliveryNumber)
    {
        return response()->json(['status'=> 'ok', 'delivery' => $deliveryNumber], 200);
    }


}
