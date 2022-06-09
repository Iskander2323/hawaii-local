@extends('layouts.app_admin')
@section('content')

<form method="POST" action="{{ url('/admin/dataproc', $info->id) }}" accept-charset="UTF-8"
    enctype="multipart/form-data">
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
            <div class="form-group  ">
                <label for="title_ru" class="control-label">Наименование RU</label>
                <input class="form-control" name="title[ru]" type="text" id="ticket_title_ru"
                    value="{{App\Models\Translates::where('id',$info->title)->value('ru')}}" required>
            </div>

            <div class="form-group ">
                <label for="content_ru" class="control-label">Описание RU</label>
                <div id="toolbar-container"></div>
                <textarea class="form-control" rows="5" name="description[ru]" type="textarea" id="textarea"
                    placeholder="{{App\Models\Translates::where('id',$info->description)->value('ru')}}">{{App\Models\Translates::where('id', $info->description)->value('ru')}}</textarea>
            </div>
        </div>

        <div class="tab-pane fade" id="custom-tabs-kz" role="tabpanel" aria-labelledby="custom-tabs-two-kz">
            <div class="form-group  ">
                <label for="title_ru" class="control-label">Наименование KZ</label>
                <input class="form-control" name="title[kz]" type="text" id="ticket_title_ru"
                    value="{{App\Models\Translates::where('id',$info->title)->value('kz')}}" required>
            </div>

            <div class="form-group ">
                <label for="content_ru" class="control-label">Описание KZ</label>
                <div id="toolbar-container"></div>
                <textarea class="form-control" rows="5" name="description[kz]" type="textarea" id="textarea"
                    placeholder="{{App\Models\Translates::where('id',$info->description)->value('kz')}}">{{App\Models\Translates::where('id', $info->description)->value('kz')}}</textarea>
            </div>
        </div>

        <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel"
            aria-labelledby="custom-tabs-two-profile-tab">
            <div class="form-group  ">
                <label for="title_ru" class="control-label">Наименование EN</label>
                <input class="form-control" name="title[en]" type="text" id="ticket_title_ru"
                    value="{{App\Models\Translates::where('id',$info->title)->value('en')}}" required>
            </div>

            <div class="form-group ">
                <label for="content_ru" class="control-label">Описание EN</label>
                <div id="toolbar-container"></div>
                <textarea class="form-control" rows="5" name="description[en]" type="textarea" id="textarea"
                    placeholder="{{App\Models\Translates::where('id',$info->description)->value('en')}}">{{App\Models\Translates::where('id', $info->description)->value('en')}}</textarea>
            </div>
        </div>
    </div>

    <div class="form-group ">
        <label for="image" class="control-label">Файл RU</label>
        <input class="form-control" name="file_ru" type="file" id="image" value="">
    </div>
    <div class="form-group ">
        <label for="image" class="control-label">Файл KZ</label>
        <input class="form-control" name="file_kz" type="file" id="image" value="">
    </div>
    <br>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Редактировать">
    </div>

</form>

@endsection

@section('scripts')
<script>
tinymce.init({
    selector: '#textarea'
});
</script>

@endsection