<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staywus;
use App\Models\Contacts;

class StaywusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id = 1;
        $info = Staywus::findOrFail($id);

        return view('stayws.edit', compact('info'));
    }

    public function update(Request $request)
    {
        $requestData = $request->all();
        $id = 1;

        $info = Staywus::findOrFail($id);

        $info->servis = $requestData['servis'];
        $info->market = $requestData['market'];
        $info->num1 = $requestData['num1'];
        $info->num2 = $requestData['num2'];
        
        $info->update();
        
        return redirect('admin/staywithus');
    }

    public function Contacts()
    {
        $id = 1;
        $info = Contacts::findOrFail($id);

        return view('contacts.edit', compact('info'));
    }

    public function ContactsUpdate(Request $request) 
    {
        $requestData = $request->all();
        $id = 1;
        $info = Contacts::findOrFail($id);

        $info = Contacts::findOrFail($id);

        $info->rns = $requestData['rns'];
        $info->spa = $requestData['spa'];
        $info->hr1 = $requestData['hr1'];
        $info->hr2 = $requestData['hr2'];
        
        $info->update();
        
        return redirect('admin/contacts');
            
    }


}