<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuestionAnswer;
use App\Models\Translates;

class QuestionAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = QuestionAnswer::all();

        return view('faq.index', compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faq.create');
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
        $faq = new QuestionAnswer();

        $question = new Translates();
        $question->ru = $requestData['question']['ru'];
        $question->kz = $requestData['question']['kz'];
        $question->en = $requestData['question']['en'];
        $question->save();

        $answer = new Translates();
        $answer->ru = $requestData['answer']['ru'];
        $answer->kz = $requestData['answer']['kz'];
        $answer->en = $requestData['answer']['en'];
        $answer->save();

        $faq->question = $question->id;
        $faq->answer = $answer->id;
        $faq->save();

        return redirect('admin/faq');
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
        $faq = QuestionAnswer::findOrFail($id);

        return view('faq.edit', compact('faq'));
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
        $faq = QuestionAnswer::findOrFail($id);

        $question = Translates::find($faq->question);
        $question->ru = $requestData['question']['ru'];
        $question->kz = $requestData['question']['kz'];
        $question->en = $requestData['question']['en'];
        $question->update();

        $answer = Translates::find($faq->answer);
        $answer->ru = $requestData['answer']['ru'];
        $answer->kz = $requestData['answer']['kz'];
        $answer->en = $requestData['answer']['en'];
        $answer->update();

        $faq->update();

        return redirect('admin/faq')->with('flash_message', 'Изменения сохранены!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = QuestionAnswer::findOrFail($id);

        $question = Translates::find($faq->question);
        $question->delete();

        $answer = Translates::find($faq->answer );
        $answer ->delete();

        $faq->delete();

        return redirect('admin/faq');
    }
}