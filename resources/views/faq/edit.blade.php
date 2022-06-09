@extends('layouts.app_admin')
@section('content')

<form method="POST" action="{{ url('/admin/faq', $faq->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PATCH">
    @csrf

    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
        <li class="nav-item active">
            <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home"
                role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Русский</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-two-kz" data-toggle="pill" href="#custom-tabs-kz" role="tab"
                aria-controls="custom-tabs-kz" aria-selected="false">Казахский</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile"
                role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Английский</a>
        </li>
    </ul>
    <br>
    <div class="tab-content" id="custom-tabs-two-tabContent">
        <div class="tab-pane fade active in" id="custom-tabs-two-home" role="tabpanel"
            aria-labelledby="custom-tabs-two-home-tab">
            <div class="form-group ">
                <label for="name" class="control-label">Вопрос RU</label>
                <input class="form-control" name="question[ru]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$faq->question)->value('ru')}}" required>
            </div>
            <div class="form-group ">
                <label for="content_ru" class="control-label">Ответ RU</label>
                <div id="toolbar-container"></div>
                <input class="form-control" name="answer[ru]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$faq->answer)->value('ru')}}" required>
            </div>
        </div>
        <div class="tab-pane fade" id="custom-tabs-kz" role="tabpanel" aria-labelledby="custom-tabs-two-kz">
            <div class="form-group ">
                <label for="name" class="control-label">Вопрос KZ</label>
                <input class="form-control" name="question[kz]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$faq->question)->value('kz')}}" required>
            </div>
            <div class="form-group ">
                <label for="content_ru" class="control-label">Ответ KZ</label>
                <div id="toolbar-container"></div>
                <input class="form-control" name="answer[kz]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$faq->answer)->value('kz')}}" required>
            </div>
        </div>
        <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel"
            aria-labelledby="custom-tabs-two-profile-tab">
            <div class="form-group ">
                <label for="name" class="control-label">Вопрос EN</label>
                <input class="form-control" name="question[en]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$faq->question)->value('en')}}" required>
            </div>
            <div class="form-group ">
                <label for="content_ru" class="control-label">Ответ EN</label>
                <div id="toolbar-container"></div>
                <input class="form-control" name="answer[en]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$faq->answer)->value('en')}}" required>
            </div>
        </div>
    </div>
    <br>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Редактировать">
    </div>
</form>
@endsection