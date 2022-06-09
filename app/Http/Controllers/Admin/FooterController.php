<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;  
use App\Models\Translates;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CorpClients(Request $request)
    {
        $id = 1;
        $footer = Footer::findOrFail($id);

        return view('footer.corpclient', compact('footer'));
    }

    public function CorpClientsUpdate(Request $request)
    {
        $id = 1;
        $requestData = $request->all();     
        $footer = Footer::findOrFail($id);

        // if ($request->hasFile('img')) {
        //     if (isset($promo->img)) {
        //         unlink($promo->img);
        //     }
        //     $file = $request->file('img');
        //     $pathName = $this->imageUpload($file, 'promo');
        //     $promo->img = $pathName;
        // }

        $title = Translates::find($footer->title);
        $title->ru = $requestData['title']['ru'];
        $title->kz = $requestData['title']['kz'];
        $title->en = $requestData['title']['en'];
        $title->update();

        $description = Translates::find($footer->description);
        $description->ru = $requestData['description']['ru'];
        $description->kz = $requestData['description']['kz'];
        $description->en = $requestData['description']['en'];
        $description->update();

        $footer->update();

        return redirect('admin/corpclient');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function SchoolGroup(Request $request)
    {
        $id = 2;
        $footer = Footer::findOrFail($id);

        return view('footer.groupschool', compact('footer'));
    }

    public function SchoolGroupUpdate(Request $request)
    {
        $id = 2;
        $requestData = $request->all();     
        $footer = Footer::findOrFail($id);

        // if ($request->hasFile('img')) {
        //     if (isset($promo->img)) {
        //         unlink($promo->img);
        //     }
        //     $file = $request->file('img');
        //     $pathName = $this->imageUpload($file, 'promo');
        //     $promo->img = $pathName;
        // }

        $title = Translates::find($footer->title);
        $title->ru = $requestData['title']['ru'];
        $title->kz = $requestData['title']['kz'];
        $title->en = $requestData['title']['en'];
        $title->update();

        $description = Translates::find($footer->description);
        $description->ru = $requestData['description']['ru'];
        $description->kz = $requestData['description']['kz'];
        $description->en = $requestData['description']['en'];
        $description->update();

        $footer->update();

        return redirect('admin/groupschool');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Employment(Request $request)
    {
        $id = 3;
        $footer = Footer::findOrFail($id);

        return view('footer.employment', compact('footer'));
    }

    public function EmploymentUpdate(Request $request)
    {
        $id = 3;
        $requestData = $request->all();     
        $footer = Footer::findOrFail($id);

        // if ($request->hasFile('img')) {
        //     if (isset($promo->img)) {
        //         unlink($promo->img);
        //     }
        //     $file = $request->file('img');
        //     $pathName = $this->imageUpload($file, 'promo');
        //     $promo->img = $pathName;
        // }

        $title = Translates::find($footer->title);
        $title->ru = $requestData['title']['ru'];
        $title->kz = $requestData['title']['kz'];
        $title->en = $requestData['title']['en'];
        $title->update();

        $description = Translates::find($footer->description);
        $description->ru = $requestData['description']['ru'];
        $description->kz = $requestData['description']['kz'];
        $description->en = $requestData['description']['en'];
        $description->update();

        $footer->update();

        return redirect('admin/employment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function HowToGo(Request $request)
    {
        $id = 4;
        $footer = Footer::findOrFail($id);

        return view('footer.howtogo', compact('footer'));
    }
    public function HowToGoUpdate(Request $request)
    {
        $id = 4;
        $requestData = $request->all();     
        $footer = Footer::findOrFail($id);

        // if ($request->hasFile('img')) {
        //     if (isset($promo->img)) {
        //         unlink($promo->img);
        //     }
        //     $file = $request->file('img');
        //     $pathName = $this->imageUpload($file, 'promo');
        //     $promo->img = $pathName;
        // }

        $title = Translates::find($footer->title);
        $title->ru = $requestData['title']['ru'];
        $title->kz = $requestData['title']['kz'];
        $title->en = $requestData['title']['en'];
        $title->update();

        $description = Translates::find($footer->description);
        $description->ru = $requestData['description']['ru'];
        $description->kz = $requestData['description']['kz'];
        $description->en = $requestData['description']['en'];
        $description->update();

        $footer->update();

        return redirect('admin/howtogo');
    }

}