<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApBigGal;
use App\Http\Resources\ApBigGalResource;

class ApBigGalController extends Controller
{
    public function index()
    {   
        return ApBigGalResource::collection(ApBigGal::all());
    }
}