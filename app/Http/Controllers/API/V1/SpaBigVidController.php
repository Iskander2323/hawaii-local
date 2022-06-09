<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpaBigVid;
use App\Http\Resources\SpaBigVidResource;

class SpaBigVidController extends Controller
{
    public function index()
    {   
        return SpaBigVidResource::collection(SpaBigVid::all());
    }
}