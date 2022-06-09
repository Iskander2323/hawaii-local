<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Translates;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $promo = Promo::all();

        return view('promo.index', compact('promo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $promo = new Promo();
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $pathName = $this->imageUpload($file, 'promo');
            $promo->img = $pathName;
        }

        $title = new Translates();
        $title->ru = $requestData['title']['ru'];
        $title->kz = $requestData['title']['kz'];
        $title->en = $requestData['title']['en'];
        $title->save();

        $description = new Translates();
        $description->ru = $requestData['description']['ru'];
        $description->kz = $requestData['description']['kz'];
        $description->en = $requestData['description']['en'];
        $description->save();

        $promo->title = $title->id;
        $promo->description = $description->id;
        $promo->save();


        return redirect('admin/promo')->with('flash_message', 'Акция добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promo = Promo::findOrFail($id);

        return view('promo.show', compact('promo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promo = Promo::findOrFail($id);

        return view('promo.edit', compact('promo'));
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
        $promo = Promo::findOrFail($id);

        if ($request->hasFile('img')) {
            if (isset($promo->img)) {
                unlink($promo->img);
            }
            $file = $request->file('img');
            $pathName = $this->imageUpload($file, 'promo');
            $promo->img = $pathName;
         
        }

        $title = Translates::find($promo->title);
        $title->ru = $requestData['title']['ru'];
        $title->kz = $requestData['title']['kz'];
        $title->en = $requestData['title']['en'];
        $title->update();

        $description = Translates::find($promo->description);
        $description->ru = $requestData['description']['ru'];
        $description->kz = $requestData['description']['kz'];
        $description->en = $requestData['description']['en'];
        $description->update();

        $promo->update();

        return redirect('admin/promo')->with('flash_message', 'Изменения сохранены!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        if (isset($promo->img)) {
            unlink($promo->img);
        }

        $title = Translates::find($promo->title);
        $title->delete();

        $description = Translates::find($promo->description);
        $description->delete();

        $promo->delete();

        return redirect('admin/promo')->with('flash_message', 'Акция удалена!');
    }
}