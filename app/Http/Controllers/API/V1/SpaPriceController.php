<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpaPrice;
use App\Http\Resources\SpaPriceResource;

class SpaPriceController extends Controller
{
    public function index()
    {   
        return SpaPriceResource::collection(SpaPrice::all());
    }
}