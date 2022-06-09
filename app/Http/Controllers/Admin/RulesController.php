<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rules;
use App\Models\Translates;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class RulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Rules::all();

        return view('rules.index', compact('info'));
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
        $info = Rules::findOrFail($id);

        return view('rules.edit', compact('info'));
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
        $info = Rules::findOrFail($id); 

        if ($request->hasFile('file_ru')) {
            // if($info->file_ru != NULL)
            // {
            //     $info->file_ru->delete();
            // }
            $file = $request->file('file_ru');
            $pathName = $this->imageUpload($file, 'rules');
            $info->file_ru = $pathName;
        }


        if ($request->hasFile('file_kz')) {
            // if($info->file_kz != NULL)
            // {
            //     $info->file_kz->delete();
            // }
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