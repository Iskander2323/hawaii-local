<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\MenuGal;
use App\Models\Translates;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menu = Menu::all();  
        
        return view('aquapark.menu.index', compact('menu'));
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
          $menu = Menu::findOrFail($id);

          return view('aquapark.menu.edit', compact('menu'));
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
        $menu = Menu::findOrFail($id);

        if ($request->hasFile('file_common')) 
        {
            if (isset($menu->file_common)) {
                unlink($menu->file_common);
            }
            $file = $request->file('file_common');
            $pathName = $this->imageUpload($file, 'menu');
            $menu->file_common = $pathName;
        }

        if ($request->hasFile('file_florida')) 
        {
            if (isset($menu->file_florida)) {
                unlink($menu->file_florida);
            }
            $file = $request->file('file_florida');
            $pathName = $this->imageUpload($file, 'menu');
            $menu->file_florida = $pathName;        
        }


        if ($request->hasFile('file_aloha')) 
        {
            if (isset($menu->file_aloha)) {
                unlink($menu->file_aloha);
            }
            $file = $request->file('file_aloha');
            $pathName = $this->imageUpload($file, 'menu');
            $menu->file_aloha = $pathName;
        }

        if ($request->hasFile('img')) 
        {
            MenuGal::truncate();
            $files = new Filesystem();
            $files->cleanDirectory('storage/menugal');
                foreach ($request->file('img') as $gallery) {
                    $gal = new MenuGal();
                    $pathName = $this->imageUpload($gallery, 'menugal');
                    $gal->img = $pathName;
                    $gal->save();
                    }
            }


        $description = Translates::find($menu->description);
        $description->ru = $requestData['description']['ru'];
        $description->kz = $requestData['description']['kz'];
        $description->en = $requestData['description']['en'];
        $description->update();

        $open_menu = Translates::find($menu->open_menu);
        $open_menu->ru = $requestData['open_menu']['ru'];
        $open_menu->kz = $requestData['open_menu']['kz'];
        $open_menu->en = $requestData['open_menu']['en'];
        $open_menu->update();

        $open_menu_florida = Translates::find($menu->open_menu_florida);
        $open_menu_florida->ru = $requestData['open_menu_florida']['ru'];
        $open_menu_florida->kz = $requestData['open_menu_florida']['kz'];
        $open_menu_florida->en = $requestData['open_menu_florida']['en'];
        $open_menu_florida->update();

        $open_menu_aloha = Translates::find($menu->open_menu_aloha);
        $open_menu_aloha->ru = $requestData['open_menu_aloha']['ru'];
        $open_menu_aloha->kz = $requestData['open_menu_aloha']['kz'];
        $open_menu_aloha->en = $requestData['open_menu_aloha']['en'];
        $open_menu_aloha->update();

        $menu->update();

        return redirect('admin/menu')->with('flash_message', 'Сохранен!');
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