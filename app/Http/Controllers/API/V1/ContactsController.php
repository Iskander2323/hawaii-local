<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Http\Resources\ContactsResource;

class ContactsController extends Controller
{
    public function index()
    {
        return ContactsResource::collection(Contacts::all());
    }
}
