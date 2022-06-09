<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuestionAnswer;
use App\Http\Resources\FAQResource;

class FAQController extends Controller
{
    public function index()
    {   
        return FAQResource::collection(QuestionAnswer::all());
    }
}