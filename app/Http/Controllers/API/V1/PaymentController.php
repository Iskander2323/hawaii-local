<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    const API_SECRET = "";
    const API_KEY = "F3AD8556847B4736B391CB4D5CFDD14D";

    public function payment(Request $request)
    {
        $request->validate([
            'ticket_id' => 'required|exists:tickets,id',
            'count_adults'  => 'required',
            'count_childrens'  => 'required',
            'price'  => 'required'
        ]);

        $URL = Http::post('https://mtokentest.kaspi.kz:8543/r1/v01/qr/create', $request);

        return $URL->json();
    }
}
