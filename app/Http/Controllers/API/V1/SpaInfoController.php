<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpaInfo;
use App\Http\Resources\SpaInfoResource;
use App\Models\SpaMainGal;
use App\Http\Resources\SpaMainGalResource;

class SpaInfoController extends Controller
{
    public function index()
    {   
        return SpaInfoResource::collection(SpaInfo::all());
    }

    public function spamaingal()
    {   
        return SpaMainGalResource::collection(SpaMainGal::all());
    }
}