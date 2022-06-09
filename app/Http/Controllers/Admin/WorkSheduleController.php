<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkShedule;
use App\Models\Translates;

class WorkSheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $workshedule = WorkShedule::all();

        return view('aquapark.workshedule.index', compact('workshedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aquapark.workshedule.create');
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

        $workshedule = new WorkShedule();

        $shedule_description = new Translates();
        $shedule_description->ru = $requestData['shedule_description']['ru'];
        $shedule_description->kz = $requestData['shedule_description']['kz'];
        $shedule_description->en = $requestData['shedule_description']['en'];

        $shedule_description->save();

        $workshedule->shedule_description = $shedule_description->id;

        $workshedule->save();

        return redirect('admin/workshedule/create')->with('flash_message', 'Добавлен!');
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
        $workshedule = WorkShedule::findOrFail($id);

        return view('aquapark.workshedule.edit', compact('workshedule'));
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
        $workshedule = WorkShedule::findOrFail($id);

        $shedule_description = Translates::find($workshedule->shedule_description);
        $shedule_description->ru = $requestData['shedule_description']['ru'];
        $shedule_description->kz = $requestData['shedule_description']['kz'];
        $shedule_description->en = $requestData['shedule_description']['en'];
        $shedule_description->update();

        $workshedule->update();

        return redirect('admin/workshedule')->with('flash_message', 'Сохранен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workshedule = Workshedule::findOrFail($id);

        $shedule_description = Translates::find($workshedule->shedule_description);
        $shedule_description->delete();

        $workshedule->delete();

        return redirect('admin/workshedule')->with('flash_message', 'Удалено!');
    }
}