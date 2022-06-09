<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\MenuGal;
use App\Http\Resources\MenuResource;
use App\Http\Resources\MenuGalResource;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MenuResource::collection(Menu::all());
    }

    public function menugal()
    {
        return MenuGalResource::collection(MenuGal::all());
    }

}