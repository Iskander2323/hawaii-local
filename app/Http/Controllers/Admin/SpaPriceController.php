<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpaPrice;
use App\Models\Translates;

class SpaPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spaprice = SpaPrice::all();

        return view('spa.price.index', compact('spaprice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spa.price.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $spaprice = new SpaPrice();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $pathName = $this->imageUpload($file, 'spaprice');
            $spaprice->file = $pathName;
        }

        $spaprice->save();

        return redirect('admin/spaprice');
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
        $spaprice = SpaPrice::findOrFail($id);

        return view('spa.price.edit', compact('spaprice'));
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
        $spaprice = SpaPrice::findOrFail($id);

        if ($request->hasFile('file')) 
        {
            if (isset($spaprice->file)) {
                unlink($spaprice->file);
            } {
                $file = $request->file('file');
                $pathName = $this->imageUpload($file, 'spaprice');
                $spaprice->file = $pathName;
            }
            $spaprice->update();
        }
        return redirect('admin/spaprice');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $spaprice = SpaPrice::findOrFail($id);

        if (isset($spaprice->file)) {
            unlink($spaprice->file);
        }

        $spaprice->delete();

        return redirect('admin/spaprice');
    }
}