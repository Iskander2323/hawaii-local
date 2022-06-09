<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Translates;

class TranslateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');

        $perPage = 25;

        if(!empty($keyword)){
            $translate = Translates::where('ru','LIKE', "%$keyword%")
                ->orWhere('kz','LIKE',"%$keyword%")
                ->orWhere('en','LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        }else {
            $translate = Translates::latest()->paginate($perPage);
        }

        return view('translate.index',compact('translate'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('translate.create');
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
        Translates::create($requestData);
        return redirect('translate')->with('flash_message', 'Translate added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $translate = Translates::findOrFail($id);

        return view('translate.show', compact('translate'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
      $translate = Translates::findOrFail($id);

      return view('translate.edit', compact('translate'));

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
        
        $translate = Translates::findOrFail($id);
        $translate->update($requestData);

        return redirect('translate')->with('flash_message', 'Translate updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Translates::destroy($id);

        return redirect('translate')->with('flash_message', 'Translate deleted!');
    }
}