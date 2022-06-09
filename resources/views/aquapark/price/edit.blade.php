@extends('layouts.app_admin')
@section('content')
<!-- Default box -->
<div class="box box-default">
    <div class="box-body">
        <a href="{{route('aquapark.price.index')}}" title="Back"><button class="btn btn-warning btn-sm"><i
                    class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
        <br />
        <br />
        <form method="POST" action="{{url('/admin/price', $price->id)}}" accept-charset="UTF-8"
            enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PATCH">
            @csrf

            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">

                <li class="nav-item active">
                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill"
                        href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home"
                        aria-selected="true">Русский</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-kz" data-toggle="pill" href="#custom-tabs-kz" role="tab"
                        aria-controls="custom-tabs-kz" aria-selected="false">Казахский</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill"
                        href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile"
                        aria-selected="false">Английский</a>
                </li>

            </ul>
            <br>
            <div class="tab-content" id="custom-tabs-two-tabContent">

                <div class="tab-pane fade active in" id="custom-tabs-two-home" role="tabpanel"
                    aria-labelledby="custom-tabs-two-home-tab">

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Описание прайса RU</label>
                        <textarea class="form-control" rows="5" name="description[ru]" type="textarea" id="textarea"
                            placeholder="">{{App\Models\Translates::where('id', $price->description)->value('ru')}}</textarea>
                    </div>

                    <div class=" form-group ">
                        <label for=" title_ru" class="control-label">Наименование детский RU</label>
                        <input class="form-control" name="child_ticket_title[ru]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->child_ticket_title)->value('ru')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Время детский часово RU</label>
                        <input class="form-control" name="time_hour_child[ru]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->time_hour_child)->value('ru')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Время детский день RU</label>
                        <input class="form-control" name="time_day_child[ru]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->time_day_child)->value('ru')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Наименование взрослый RU</label>
                        <input class="form-control" name="adult_ticket_title[ru]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->adult_ticket_title)->value('ru')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Время взрослый часово RU</label>
                        <input class="form-control" name="time_hour_adult[ru]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->time_hour_adult)->value('ru')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Время взрослый день RU</label>
                        <input class="form-control" name="time_day_adult[ru]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->time_day_adult)->value('ru')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Наименование детский спа RU</label>
                        <input class="form-control" name="spa_child[ru]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->spa_child)->value('ru')}}" required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Наименование взрослый спа RU</label>
                        <input class="form-control" name="spa_adult[ru]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->spa_adult)->value('ru')}}" required>
                    </div>

                </div>

                <div class="tab-pane fade" id="custom-tabs-kz" role="tabpanel" aria-labelledby="custom-tabs-two-kz">

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Описание прайса KZ</label>
                        <textarea class="form-control" rows="5" name="description[kz]" type="textarea" id="textarea"
                            placeholder="">{{App\Models\Translates::where('id', $price->description)->value('kz')}}</textarea>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Наименование детский KZ</label>
                        <input class="form-control" name="child_ticket_title[kz]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->child_ticket_title)->value('kz')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Время детский часово KZ</label>
                        <input class="form-control" name="time_hour_child[kz]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->time_hour_child)->value('kz')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Время детский день KZ</label>
                        <input class="form-control" name="time_day_child[kz]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->time_day_child)->value('kz')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Наименование взрослый KZ</label>
                        <input class="form-control" name="adult_ticket_title[kz]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->adult_ticket_title)->value('kz')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Время взрослый часово KZ</label>
                        <input class="form-control" name="time_hour_adult[kz]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->time_hour_adult)->value('kz')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Время взрослый день KZ</label>
                        <input class="form-control" name="time_day_adult[kz]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->time_day_adult)->value('kz')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Наименование детский спа KZ</label>
                        <input class="form-control" name="spa_child[kz]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->spa_child)->value('kz')}}" required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Наименование взрослый спа KZ</label>
                        <input class="form-control" name="spa_adult[kz]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->spa_adult)->value('kz')}}" required>
                    </div>
                </div>



                <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-two-profile-tab">

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Описание прайса EN</label>
                        <textarea class="form-control" rows="5" name="description[en]" type="textarea" id="textarea"
                            placeholder="">{{App\Models\Translates::where('id', $price->description)->value('en')}}</textarea>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Наименование детский EN</label>
                        <input class="form-control" name="child_ticket_title[en]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->child_ticket_title)->value('en')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Время детский часово EN</label>
                        <input class="form-control" name="time_hour_child[en]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->time_hour_child)->value('en')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Время детский день EN</label>
                        <input class="form-control" name="time_day_child[en]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->time_day_child)->value('en')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Наименование взрослый EN</label>
                        <input class="form-control" name="adult_ticket_title[en]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->adult_ticket_title)->value('en')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Время взрослый часово EN</label>
                        <input class="form-control" name="time_hour_adult[en]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->time_hour_adult)->value('en')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Время взрослый день EN</label>
                        <input class="form-control" name="time_day_adult[en]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->time_day_adult)->value('en')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Наименование детский спа EN</label>
                        <input class="form-control" name="spa_child[en]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->spa_child)->value('en')}}" required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Наименование взрослый спа EN</label>
                        <input class="form-control" name="spa_adult[en]" type="text" id="ticket_title_ru"
                            value="{{App\Models\Translates::where('id', $price->spa_adult)->value('en')}}" required>
                    </div>
                </div>

            </div>

            <div class="form-group  ">
                <label for="title_ru" class="control-label">Цена часово детский</label>
                <input class="form-control" name="time_hour_price_child" type="number" id="adult_actual_price"
                    value="{{App\Models\Price::where('id',$price->id)->value('time_hour_price_child')}}" required>
            </div>

            <div class="form-group  ">
                <label for="title_ru" class="control-label">Цена день детский</label>
                <input class="form-control" name="time_day_price_child" type="number" id="adult_old_price"
                    value="{{App\Models\Price::where('id',$price->id)->value('time_day_price_child')}}" required>
            </div>

            <div class="form-group  ">
                <label for="title_ru" class="control-label">Цена спа детский</label>
                <input class="form-control" name="spa_child_price" type="number" id="child_actual_price"
                    value="{{App\Models\Price::where('id',$price->id)->value('spa_child_price')}}" required>
            </div>

            <div class="form-group  ">
                <label for="title_ru" class="control-label">Цена часово взрослый</label>
                <input class="form-control" name="time_hour_price_adult" type="number" id="adult_actual_price"
                    value="{{App\Models\Price::where('id',$price->id)->value('time_hour_price_adult')}}" required>
            </div>

            <div class="form-group  ">
                <label for="title_ru" class="control-label">Цена день взрослый</label>
                <input class="form-control" name="time_day_price_adult" type="number" id="adult_old_price"
                    value="{{App\Models\Price::where('id',$price->id)->value('time_day_price_adult')}}" required>
            </div>

            <div class="form-group  ">
                <label for="title_ru" class="control-label">Цена спа взрослый</label>
                <input class="form-control" name="spa_adult_price" type="number" id="child_actual_price"
                    value="{{App\Models\Price::where('id',$price->id)->value('spa_adult_price')}}" required>
            </div>

            <div class="form-group ">
                <label for="image" class="control-label">Изображения</label>
                <input class="form-control" name="img[]" type="file" id="image" multiple value="">
            </div>

            <br>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Обновить">
            </div>

        </form>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection('content')

@section('scripts')
<script>
tinymce.init({
    selector: '#textarea'
});
</script>
@endsection