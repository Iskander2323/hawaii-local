<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\ApPriceGal;
use App\Models\Translates;
use Illuminate\Filesystem\Filesystem;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $price = Price::all();

        return view('aquapark.price.index', compact('price'));
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
        $price = Price::findOrFail($id);

        return view('aquapark.price.edit', compact('price'));
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
        $price = Price::findOrFail($id);

        if ($request->hasFile('img')) 
            {
                $appricegal = ApPriceGal::all();
                $appricegal->each->delete();
                $file = new Filesystem;
                $file->cleanDirectory('storage/ap_price');
                    foreach ($request->file('img') as $gallery) {
                        $gal = new ApPriceGal();
                        $pathName = $this->imageUpload($gallery, 'ap_price');
                        $gal->img = $pathName;
                        $gal->save();
                        }
            }

        $description = Translates::find($price->description);
        $description->ru = $requestData['description']['ru'];
        $description->kz = $requestData['description']['kz'];
        $description->en = $requestData['description']['en'];
        $description->update();

        $child_ticket_title = Translates::find($price->child_ticket_title);
        $child_ticket_title->ru = $requestData['child_ticket_title']['ru'];
        $child_ticket_title->kz = $requestData['child_ticket_title']['kz'];
        $child_ticket_title->en = $requestData['child_ticket_title']['en'];
        $child_ticket_title->update();

        $time_hour_child = Translates::find($price->time_hour_child);
        $time_hour_child->ru = $requestData['time_hour_child']['ru'];
        $time_hour_child->kz = $requestData['time_hour_child']['kz'];
        $time_hour_child->en = $requestData['time_hour_child']['en'];
        $time_hour_child->update();

        $price->time_hour_price_child = $requestData['time_hour_price_child'];

        $time_day_child = Translates::find($price->time_day_child);
        $time_day_child->ru = $requestData['time_day_child']['ru'];
        $time_day_child->kz = $requestData['time_day_child']['kz'];
        $time_day_child->en = $requestData['time_day_child']['en'];
        $time_day_child->update();

        $price->time_day_price_child = $requestData['time_day_price_child'];

        $spa_child = Translates::find($price->spa_child);
        $spa_child->ru = $requestData['spa_child']['ru'];
        $spa_child->kz = $requestData['spa_child']['kz'];
        $spa_child->en = $requestData['spa_child']['en'];
        $spa_child->update();

        $price->spa_child_price = $requestData['spa_child_price'];

        $adult_ticket_title = Translates::find($price->adult_ticket_title);
        $adult_ticket_title->ru = $requestData['adult_ticket_title']['ru'];
        $adult_ticket_title->kz = $requestData['adult_ticket_title']['kz'];
        $adult_ticket_title->en = $requestData['adult_ticket_title']['en'];
        $adult_ticket_title->update();

        $time_hour_adult = Translates::find($price->time_hour_adult);
        $time_hour_adult->ru = $requestData['time_hour_adult']['ru'];
        $time_hour_adult->kz = $requestData['time_hour_adult']['kz'];
        $time_hour_adult->en = $requestData['time_hour_adult']['en'];
        $time_hour_adult->update();

        $price->time_hour_price_adult = $requestData['time_hour_price_adult'];

        $time_day_adult = Translates::find($price->time_day_adult);
        $time_day_adult->ru = $requestData['time_day_adult']['ru'];
        $time_day_adult->kz = $requestData['time_day_adult']['kz'];
        $time_day_adult->en = $requestData['time_day_adult']['en'];
        $time_day_adult->update();

        $price->time_day_price_adult = $requestData['time_day_price_adult'];

        $spa_adult = Translates::find($price->spa_adult);
        $spa_adult->ru = $requestData['spa_adult']['ru'];
        $spa_adult->kz = $requestData['spa_adult']['kz'];
        $spa_adult->en = $requestData['spa_adult']['en'];
        $spa_adult->update();

        $price->spa_adult_price = $requestData['spa_adult_price'];

        $price->description = $description->id;
        $price->child_ticket_title = $child_ticket_title->id;
        $price->time_hour_child = $time_hour_child->id;
        $price->time_day_child = $time_day_child->id;
        $price->spa_child = $spa_child->id;
        $price->adult_ticket_title = $adult_ticket_title->id;
        $price->time_hour_adult = $time_hour_adult->id;
        $price->time_day_adult = $time_day_adult->id;
        $price->spa_adult = $spa_adult->id;

        $price->update();

        return redirect('admin/price')->with('flash_message', 'Сохранено!');
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