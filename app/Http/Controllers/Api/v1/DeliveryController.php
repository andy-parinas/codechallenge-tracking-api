<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeliveryController extends Controller
{
    public function index(){
        return response()->json(["test" => 'OK'], JsonResponse::HTTP_OK);
    }
}
