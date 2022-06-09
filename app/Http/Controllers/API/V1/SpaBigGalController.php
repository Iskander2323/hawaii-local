<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpaBigGal;
use App\Http\Resources\SpaBigGalResource;

class SpaBigGalController extends Controller
{
    public function index()
    {   
        return SpaBigGalResource::collection(SpaBigGal::all());
    }
}