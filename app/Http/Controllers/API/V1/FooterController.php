<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CorpCliResource;
use App\Models\Footer;
class FooterController extends Controller
{
    public function getCorpClients()
    {   
        $id = 1;
        return new CorpCliResource(Footer::findOrFail($id));
    }

    public function getGroup()
    {   
        $id = 2;
        return new CorpCliResource(Footer::findOrFail($id));
    }

    public function getVacancy()
    {   
        $id = 3;
        return new CorpCliResource(Footer::findOrFail($id));
    }

    public function getHowToGo()
    {   
        $id = 4;
        return new CorpCliResource(Footer::findOrFail($id));
    }


}

