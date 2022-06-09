<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApBigVid;
use App\Http\Resources\ApBigVidResource;


class ApBigVidController extends Controller
{
    public function index()
    {   
        return ApBigVidResource::collection(ApBigVid::all());
    }
}