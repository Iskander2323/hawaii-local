<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Resources\NewsResource;

class NewsController extends Controller
{
    public function index()
    {
        return NewsResource::collection(News::all());
    }

    public function show($id)
    {
        return new NewsResource(News::findOrFail($id));
    }
}
