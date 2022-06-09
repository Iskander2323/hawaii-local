<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Translates;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {

        //$perPage = 10;

        $tickets = Ticket::all();

        return view('ticket.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        // $request->validate(
        //     [
        //         'ticket_title.ru' => 'required',
        //         'short_description.ru' => 'required',
        //         'adult_ticket.ru' => 'required',
        //         'child_ticket.ru' => 'required',
        //         'adult_actual_price' => 'required|numeric',
        //         'adult_old_price' => 'required|numeric',
        //         'child_actual_price' => 'required|numeric',
        //         'child_old_price' => 'required|numeric',
        //         'large_description_ru' => 'required',

        //     ],
        //     [
        //         'ticket_title.ru' => 'Заголовок обязателен!',
        //         'short_description.ru' => 'Краткое описание обязательно',
        //         'adult_ticket.ru' => 'Поле обязательно',
        //         'child_ticket.ru' => 'Поле обязательно',
        //         'adult_actual_price' => 'Поле должно содержать только цифры',
        //         'adult_old_price' => 'Поле должно содержать только цифры',
        //         'child_actual_price' => 'Поле должно содержать только цифры',
        //         'child_old_price' => 'Поле должно содержать только цифры',
        //         'large_description_ru' => 'Поле обязательно',
        //     ],
        //     [
        //         'ticket_title.kz' => 'required',
        //         'short_description.kz' => 'required',
        //         'adult_ticket.kz' => 'required',
        //         'child_ticket.kz' => 'required',
        //         'adult_actual_price' => 'required|numeric',
        //         'adult_old_price' => 'required|numeric',
        //         'child_actual_price' => 'required|numeric',
        //         'child_old_price' => 'required|numeric',
        //         'large_description_kz' => 'required',
        //     ],
        //     [ 'ticket_title.ru' => 'Заголовок обязателен!',
        //     'short_description.ru' => 'Краткое описание обязательно',
        //     'adult_ticket.ru' => 'Поле обязательно',
        //     'child_ticket.ru' => 'Поле обязательно',
        //     'adult_actual_price' => 'Поле должно содержать только цифры',
        //     'adult_old_price' => 'Поле должно содержать только цифры',
        //     'child_actual_price' => 'Поле должно содержать только цифры',
        //     'child_old_price' => 'Поле должно содержать только цифры',
        //     'large_description_ru' => 'Поле обязательно',],
        //     [
        //         'ticket_title.en' => 'required',
        //         'short_description.en' => 'required',
        //         'adult_ticket.en' => 'required',
        //         'child_ticket.en' => 'required',
        //         'adult_actual_price' => 'required|numeric',
        //         'adult_old_price' => 'required|numeric',
        //         'child_actual_price' => 'required|numeric',
        //         'child_old_price' => 'required|numeric',
        //         'large_description_en' => 'required',
        //     ],
        //     [ 'ticket_title.ru' => 'Заголовок обязателен!',
        //     'short_description_ru' => 'Краткое описание обязательно',
        //     'adult_ticket.ru' => 'Поле обязательно',
        //     'child_ticket.ru' => 'Поле обязательно',
        //     'adult_actual_price' => 'Поле должно содержать только цифры',
        //     'adult_old_price' => 'Поле должно содержать только цифры',
        //     'child_actual_price' => 'Поле должно содержать только цифры',
        //     'child_old_price' => 'Поле должно содержать только цифры',
        //     'large_description_ru' => 'Поле обязательно',],
        // );


        $requestData = $request->all();
        $ticket = new Ticket();

        $ticket_title = new Translates();
        $ticket_title->ru = $requestData['ticket_title']['ru'];
        $ticket_title->kz = $requestData['ticket_title']['kz'];
        $ticket_title->en = $requestData['ticket_title']['en'];
        $ticket_title->save();

        $short_description = new Translates();
        $short_description->ru = $requestData['short_description']['ru'];
        $short_description->kz = $requestData['short_description']['kz'];
        $short_description->en = $requestData['short_description']['en'];
        $short_description->save();

        $ticket->status = $requestData['status'];
        $ticket->category_id = $requestData['category_id'];

        $adult_ticket = new Translates();
        $adult_ticket->ru = $requestData['adult_ticket']['ru'];
        $adult_ticket->kz = $requestData['adult_ticket']['kz'];
        $adult_ticket->en = $requestData['adult_ticket']['en'];
        $adult_ticket->save();

        $ticket->adult_actual_price = $requestData['adult_actual_price'];

        $ticket->adult_old_price = $requestData['adult_old_price'];

        $child_ticket = new Translates();
        $child_ticket->ru = $requestData['child_ticket']['ru'];
        $child_ticket->kz = $requestData['child_ticket']['kz'];
        $child_ticket->en = $requestData['child_ticket']['en'];
        $child_ticket->save();

        $ticket->child_actual_price = $requestData['child_actual_price'];

        $ticket->child_old_price = $requestData['child_old_price'];

        $large_description = new Translates();
        $large_description->ru = $requestData['large_description']['ru'];
        $large_description->kz = $requestData['large_description']['kz'];
        $large_description->en = $requestData['large_description']['en'];
        $large_description->save();

        $ticket->ticket_title = $ticket_title->id;
        $ticket->short_description = $short_description->id;
        $ticket->adult_ticket = $adult_ticket->id;
        $ticket->child_ticket = $child_ticket->id;
        $ticket->large_description = $large_description->id;
        $ticket->save();

        return redirect('admin/ticket')->with('flash_message', 'Билет добавлен!');
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
        $ticket = Ticket::findOrFail($id);

        return view('ticket.edit', compact('ticket'));
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
        $ticket = Ticket::findOrFail($id);

        $ticket_title = Translates::find($ticket->ticket_title);
        $ticket_title->ru = $requestData['ticket_title']['ru'];
        $ticket_title->kz = $requestData['ticket_title']['kz'];
        $ticket_title->en = $requestData['ticket_title']['en'];
        $ticket_title->update();

        $short_description = Translates::find($ticket->short_description);
        $short_description->ru = $requestData['short_description']['ru'];
        $short_description->kz = $requestData['short_description']['kz'];
        $short_description->en = $requestData['short_description']['en'];
        $short_description->update();

        $ticket->status = $requestData['status'];
        $ticket->category_id = $requestData['category_id'];

        $adult_ticket = Translates::find($ticket->adult_ticket);
        $adult_ticket->ru = $requestData['adult_ticket']['ru'];
        $adult_ticket->kz = $requestData['adult_ticket']['kz'];
        $adult_ticket->en = $requestData['adult_ticket']['en'];
        $adult_ticket->update();

        $ticket->adult_actual_price = $requestData['adult_actual_price'];

        $ticket->adult_old_price = $requestData['adult_old_price'];

        $child_ticket = Translates::find($ticket->child_ticket);
        $child_ticket->ru = $requestData['child_ticket']['ru'];
        $child_ticket->kz = $requestData['child_ticket']['kz'];
        $child_ticket->en = $requestData['child_ticket']['en'];
        $child_ticket->update();

        $ticket->child_actual_price = $requestData['child_actual_price'];

        $ticket->child_old_price = $requestData['child_old_price'];

        $large_description = Translates::find($ticket->large_description);
        $large_description->ru = $requestData['large_description']['ru'];
        $large_description->kz = $requestData['large_description']['kz'];
        $large_description->en = $requestData['large_description']['en'];
        $large_description->update();


        $ticket->ticket_title = $ticket_title->id;
        $ticket->short_description = $short_description->id;
        $ticket->adult_ticket = $adult_ticket->id;
        $ticket->child_ticket = $child_ticket->id;
        $ticket->large_description = $large_description->id;
        $ticket->update();

        return redirect('admin/ticket')->with('flash_message', 'Изменения сохранены!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);

        $ticket_title = Translates::find($ticket->ticket_title);
        $ticket_title->delete();

        $short_description = Translates::find($ticket->short_description);
        $short_description->delete();

        $adult_ticket = Translates::find($ticket->adult_ticket);
        $adult_ticket->delete();


        $child_ticket = Translates::find($ticket->child_ticket);
        $child_ticket->delete();

        $large_description = Translates::find($ticket->large_description);
        $large_description->delete();

        $ticket->delete();
        return redirect('admin/ticket')->with('flash_message', 'Билет Удален!');
    }
}