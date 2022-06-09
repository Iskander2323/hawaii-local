<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Refund;

class RefundController extends Controller
{
    public function index()
    {
        $refund = Refund::all();

        return view('refund.index', compact('refund'));
    }

    public function show($id)
    {
        $refund = Refund::findOrFail($id);

        return view('refund.show', compact('refund'));
    }
}