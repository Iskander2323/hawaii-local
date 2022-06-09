<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SitePolicy;
use App\Models\Translates;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SitePolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Rules(Request $request)
    {
        $id = 1;
        $info = SitePolicy::findOrFail($id);

        return view('sitepolicy.rules', compact('info'));
    }

    public function RulesUpdate(Request $request)
    {
        $id = 1;
        $requestData = $request->all();    
        $info = SitePolicy::findOrFail($id); 

        if ($request->hasFile('file_ru')) {
            if (isset($info->file_ru)) {
                unlink($info->file_ru);
            }
            $file = $request->file('file_ru');
            $pathName = $this->imageUpload($file, 'rules');
            $info->file_ru = $pathName;
        }


        if ($request->hasFile('file_kz')) {
            if (isset($info->file_kz)) {
                unlink($info->file_kz);
            }
            $file = $request->file('file_kz');
            $pathName = $this->imageUpload($file, 'rules');
            $info->file_kz = $pathName;
        }

        $title = Translates::find($info->title);
        $title->ru = $requestData['title']['ru'];
        $title->kz = $requestData['title']['kz'];
        $title->en = $requestData['title']['en'];
        $title->update();

        $description = Translates::find($info->description);
        $description->ru = $requestData['description']['ru'];
        $description->kz = $requestData['description']['kz'];
        $description->en = $requestData['description']['en'];
        $description->update();


        $info->update();

        return redirect('admin/rules');
    }

    public function PaymentRules(Request $request)
    {
        $id = 2;
        $info = SitePolicy::findOrFail($id);

        return view('sitepolicy.payment', compact('info'));
    }

    public function PaymentRulesUpdate(Request $request)
    {
        $id = 2;
        $requestData = $request->all();     
        $info = SitePolicy::findOrFail($id);

        $title = Translates::find($info->title);
        $title->ru = $requestData['title']['ru'];
        $title->kz = $requestData['title']['kz'];
        $title->en = $requestData['title']['en'];
        $title->update();

        $description = Translates::find($info->description);
        $description->ru = $requestData['description']['ru'];
        $description->kz = $requestData['description']['kz'];
        $description->en = $requestData['description']['en'];
        $description->update();

        if ($request->hasFile('file_ru')) 
        {
            if (isset($info->file_ru)) {
                unlink($info->file_ru);
            }
            $file = $request->file('file_ru');
            $pathName = $this->imageUpload($file, 'rules');
            $info->file_ru = $pathName;
        }

        if ($request->hasFile('file_kz')) 
        {
            if (isset($info->file_kz)) {
                unlink($info->file_kz);
            }
            $file = $request->file('file_kz');
            $pathName = $this->imageUpload($file, 'rules');
            $info->file_kz = $pathName;
        }

        $info->update();

        return redirect('admin/payment');
    }

    public function DataProc(Request $request)
    {
        $id = 3;
        $info = SitePolicy::findOrFail($id);

        return view('sitepolicy.dataproc', compact('info'));
    }

    public function DataProcUpdate(Request $request)
    {
        $id = 3;
        $requestData = $request->all();     
        $info = SitePolicy::findOrFail($id);

        $title = Translates::find($info->title);
        $title->ru = $requestData['title']['ru'];
        $title->kz = $requestData['title']['kz'];
        $title->en = $requestData['title']['en'];
        $title->update();

        $description = Translates::find($info->description);
        $description->ru = $requestData['description']['ru'];
        $description->kz = $requestData['description']['kz'];
        $description->en = $requestData['description']['en'];
        $description->update();

        if ($request->hasFile('file_ru')) 
        {
            if (isset($info->file_ru)) {
                unlink($info->file_ru);
            }
            $file = $request->file('file_ru');
            $pathName = $this->imageUpload($file, 'rules');
            $info->file_ru = $pathName;
        }

        if ($request->hasFile('file_kz')) 
        {
            if (isset($info->file_kz)) {
                unlink($info->file_kz);
            }
            $file = $request->file('file_kz');
            $pathName = $this->imageUpload($file, 'rules');
            $info->file_kz = $pathName;
        }

        $info->update();

        return redirect('admin/dataproc');
    }
 
}