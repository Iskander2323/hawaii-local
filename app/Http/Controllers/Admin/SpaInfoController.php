<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpaInfo;
use App\Models\SpaMainGal;
use App\Models\Translates;
use Illuminate\Filesystem\Filesystem;

class SpaInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $spaInfo = SpaInfo::all();

        return view('spa.info.index', compact('spaInfo'));
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
        $spainfo = SpaInfo::find($id);

        return view('spa.info.edit', compact('spainfo'));
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

        $spainfo = SpaInfo::findOrFail($id);

        if ($request->hasFile('img')) 
        {
            $files = new Filesystem();
            $files->cleanDirectory('storage/spa_main_gal');
            SpaMainGal::truncate();
                foreach ($request->file('img') as $gallery) {
                    $gal = new SpaMainGal();
                    $pathName = $this->imageUpload($gallery, 'spa_main_gal');
                    $gal->img = $pathName;
                    $gal->save();
                    }
        }

        $description = Translates::find($spainfo->description);
        $description->ru = $requestData['description']['ru'];
        $description->kz = $requestData['description']['kz'];
        $description->en = $requestData['description']['en'];
        $description->update();

        $spainfo->update();

        return redirect('admin/spainfo')->with('success', 'Сохранено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}