<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rules;
use App\Models\Payment;
use App\Models\Dataproc;
use App\Http\Resources\SitePolicyResource;

class SitePolicyController extends Controller
{
    public function Rules()
    {
        return SitePolicyResource::collection(Rules::all());
    }

    public function Payment()
    {
        return SitePolicyResource::collection(Payment::all());
    }

    public function Dataproc()
    {
        return SitePolicyResource::collection(Dataproc::all());
    }

}
