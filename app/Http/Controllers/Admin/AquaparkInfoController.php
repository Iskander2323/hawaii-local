<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\AquaparkInfo;
use App\Models\Translates;
use App\Models\Gallery;

class AquaparkInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $aquaparkInfo = AquaparkInfo::all();

        return view('aquapark.info.index', compact('aquaparkInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aquaparkInfo = AquaparkInfo::find($id);

        return view('aquapark.info.edit', compact('aquaparkInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $aquaparkInfo = AquaparkInfo::find($id);
        
        if ($request->hasFile('img')) {
                   $files = Gallery::all();
                   foreach ($files as $file) {
                   Storage::disk('public')->delete($file);
                   }
                Gallery::truncate();
                    foreach ($request->file('img') as $gallery) {
                        $gal = new Gallery();
                        $pathName = $this->imageUpload($gallery, 'gallery');
                        $gal->img = $pathName;
                        $gal->save();
                        }
                }
               
        //надо сделать add/drop фоток

        $description = Translates::find($aquaparkInfo->description);
        $description->ru = $requestData['description']['ru'];
        $description->kz = $requestData['description']['kz'];
        $description->en = $requestData['description']['en'];
        $description->update();

        $aquaparkInfo->update();

        return redirect('/admin/aquaparkinfo')->with('sucsess', 'Сохранено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}