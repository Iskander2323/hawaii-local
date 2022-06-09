<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staywus;
use App\Http\Resources\StawusResource;

class StaywusController extends Controller
{
    public function index()
    {
        return StawusResource::collection(Staywus::all());
    }
}
