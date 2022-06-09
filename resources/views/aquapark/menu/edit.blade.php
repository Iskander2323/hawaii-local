@extends('layouts.app_admin')
@section('content')

<form method="POST" action="{{ url('/admin/menu', $menu->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
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

                <label for="content_ru" class="control-label">Описание RU</label>
                <div id="toolbar-container"></div>
                <textarea class="form-control" rows="5" name="description[ru]" type="textarea" id="textarea"
                    placeholder="{{App\Models\Translates::where('id',         $menu->description)->value('ru')}}">{{App\Models\Translates::where('id', $menu->description)->value('ru')}}</textarea>
            </div>

            <div class="form-group ">
                <label for="name" class="control-label">Наименование общего меню RU</label>
                <input class="form-control" name="open_menu[ru]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$menu->open_menu)->value('ru')}}" required>
            </div>

            <div class="form-group ">
                <label for="name" class="control-label">Наименование меню Флорида RU</label>
                <input class="form-control" name="open_menu_florida[ru]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$menu->open_menu_florida)->value('ru')}}" required>
            </div>

            <div class="form-group ">
                <label for="name" class="control-label">Наименование меню Алоха RU</label>
                <input class="form-control" name="open_menu_aloha[ru]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$menu->open_menu_aloha)->value('ru')}}" required>
            </div>

        </div>


        <div class="tab-pane fade" id="custom-tabs-kz" role="tabpanel" aria-labelledby="custom-tabs-two-kz">

            <div class="form-group ">
                <label for="content_kz" class="control-label">Описание KZ</label>
                <textarea class="form-control" rows="5" name="description[kz]" type="textarea" id="textarea"
                    placeholder="{{App\Models\Translates::where('id', $menu->description)->value('kz')}}">{{App\Models\Translates::where('id', $menu->description)->value('kz')}}</textarea>
            </div>

            <div class="form-group ">
                <label for="name" class="control-label">Наименование общего меню KZ</label>
                <input class="form-control" name="open_menu[kz]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$menu->open_menu)->value('kz')}}" required>
            </div>

            <div class="form-group ">
                <label for="name" class="control-label">Наименование меню Флорида KZ</label>
                <input class="form-control" name="open_menu_florida[kz]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$menu->open_menu_florida)->value('kz')}}" required>
            </div>

            <div class="form-group ">
                <label for="name" class="control-label">Наименование меню Алоха KZ</label>
                <input class="form-control" name="open_menu_aloha[kz]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$menu->open_menu_aloha)->value('kz')}}" required>
            </div>

        </div>

        <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel"
            aria-labelledby="custom-tabs-two-profile-tab">
            <div class="form-group ">
                <label for="content_en" class="control-label">Описание EN</label>
                <textarea class="form-control" rows="5" name="description[en]" type="textarea" id="textarea"
                    placeholder="{{App\Models\Translates::where('id',$menu->description)->value('en')}}">{{App\Models\Translates::where('id', $menu->description)->value('en')}}</textarea>
            </div>

            <div class="form-group ">
                <label for="name" class="control-label">Наименование общего меню EN</label>
                <input class="form-control" name="open_menu[en]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$menu->open_menu)->value('en')}}" required>
            </div>

            <div class="form-group ">
                <label for="name" class="control-label">Наименование меню Флорида EN</label>
                <input class="form-control" name="open_menu_florida[en]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$menu->open_menu_florida)->value('en')}}" required>
            </div>

            <div class="form-group ">
                <label for="name" class="control-label">Наименование меню Алоха EN</label>
                <input class="form-control" name="open_menu_aloha[en]" type="text" id="name" autocomplete="off"
                    value="{{App\Models\Translates::where('id',$menu->open_menu_aloha)->value('en')}}" required>
            </div>

        </div>
    </div>

    <div class="form-group ">
        <label for="image" class="control-label">Общее меню</label>
        <input class="form-control" name="file_common" type="file" id="image" value="">
    </div>

    <div class="form-group ">
        <label for="image" class="control-label">Меню Флорида</label>
        <input class="form-control" name="file_florida" type="file" id="image" value="">
    </div>

    <div class="form-group ">
        <label for="image" class="control-label">Меню Алоха</label>
        <input class="form-control" name="file_aloha" type="file" id="image" value="">
    </div>

    <div class="form-group ">
        <label for="image" class="control-label">Изображения</label>
        <input class="form-control" name="img[]" type="file" id="image" multiple value="">
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