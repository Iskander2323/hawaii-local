<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpaMenu;
use App\Models\Translates;


class SpaMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spamenu = SpaMenu::all();

        return view('spa.menu.index', compact('spamenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spa.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spamenu = new SpaMenu();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $pathName = $this->imageUpload($file, 'spamenu');
            $spamenu->file = $pathName;
        }

        $spamenu->save();

        return redirect('admin/spamenu');
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
        $spamenu = SpaMenu::findOrFail($id);

        return view('spa.menu.edit', compact('spamenu'));
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
        $spamenu = SpaMenu::findOrFail($id);

        if ($request->hasFile('file')) {
            if (isset($spamenu->file)) {
                unlink($spamenu->file);
            } {
                $file = $request->file('file');
                $pathName = $this->imageUpload($file, 'spamenu');
                $spamenu->file = $pathName;
            }
            $spamenu->update();
        }
        return redirect('admin/spamenu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $spamenu = SpaMenu::findOrFail($id);

        if (isset($spamenu->file)) {
            unlink($spamenu->file);
        }

        $spamenu->delete();

        return redirect('admin/spamenu');
    }
}