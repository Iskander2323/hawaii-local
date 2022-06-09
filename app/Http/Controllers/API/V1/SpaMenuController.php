<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpaMenu;
use App\Http\Resources\SpaMenuResource;


class SpaMenuController extends Controller
{
    public function index()
    {   
        return SpaMenuResource::collection(SpaMenu::all());
    }
}