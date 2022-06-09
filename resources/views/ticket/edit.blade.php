@extends('layouts.app_admin')
@section('content')
<section class="content">
    <!-- Default box -->
    <div class="box box-default">
        <div class="box-body">
            <a href="{{route('ticket.index')}}" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
            <br />
            <br />

            @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ url('/admin/ticket', $ticket->id)}}" accept-charset="UTF-8"
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
                            <label for="title_ru" class="control-label">Название билета RU</label>
                            <input class="form-control" name="ticket_title[ru]" type="text" id="ticket_title_ru"
                                value="{{App\Models\Translates::where('id',$ticket->ticket_title)->value('ru')}}"
                                required>
                        </div>

                        <div class="form-group  ">
                            <label for="title_ru" class="control-label">Краткое описание RU</label>
                            <input class="form-control" name="short_description[ru]" type="text"
                                id="short_description_ru"
                                value="{{App\Models\Translates::where('id',$ticket->short_description)->value('ru')}}"
                                required>
                        </div>

                        <div class="form-group  ">
                            <label for="title_ru" class="control-label">Наименование для взрослого RU</label>
                            <input class="form-control" name="adult_ticket[ru]" type="text" id="adult_ticket_ru"
                                value="{{App\Models\Translates::where('id',$ticket->adult_ticket)->value('ru')}}"
                                required placeholder="Взрослый">
                        </div>

                        <div class="form-group  ">
                            <label for="title_ru" class="control-label">Наименование для деткого RU</label>
                            <input class="form-control" name="child_ticket[ru]" type="text" id="child_ticket_ru"
                                value="{{App\Models\Translates::where('id',$ticket->child_ticket)->value('ru')}}"
                                required placeholder="Детский">
                        </div>

                        <div class="form-group ">
                            <label for="content_ru" class="control-label">Подробное описание RU</label>
                            <div id="toolbar-container"></div>
                            <textarea class="form-control" rows="5" name="large_description[ru]" type="textarea"
                                id="textarea">{{App\Models\Translates::where('id',$ticket->large_description)->value('ru')}}</textarea>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="custom-tabs-kz" role="tabpanel" aria-labelledby="custom-tabs-two-kz">

                        <div class="form-group  ">
                            <label for="title_kz" class="control-label">Название билета KZ</label>
                            <input class="form-control" name="ticket_title[kz]" type="text" id="ticket_title_kz"
                                value="{{App\Models\Translates::where('id',$ticket->ticket_title)->value('kz')}}"
                                required>
                        </div>

                        <div class="form-group  ">
                            <label for="title_kz" class="control-label">Краткое описание KZ</label>
                            <input class="form-control" name="short_description[kz]" type="text"
                                id="short_description_kz"
                                value="{{App\Models\Translates::where('id',$ticket->short_description)->value('kz')}}"
                                required>
                        </div>

                        <div class="form-group  ">
                            <label for="title_kz" class="control-label">Наименование для взрослого KZ</label>
                            <input class="form-control" name="adult_ticket[kz]" type="text" id="adult_ticket_kz"
                                value="{{App\Models\Translates::where('id',$ticket->adult_ticket)->value('kz')}}"
                                required>
                        </div>

                        <div class="form-group  ">
                            <label for="title_kz" class="control-label">Наименование для детского KZ</label>
                            <input class="form-control" name="child_ticket[kz]" type="text" id="child_ticket_kz"
                                value="{{App\Models\Translates::where('id',$ticket->child_ticket)->value('kz')}}"
                                required>
                        </div>

                        <div class="form-group ">
                            <label for="content_kz" class="control-label">Подробное описание KZ</label>
                            <textarea class="form-control" rows="5" name="large_description[kz]" type="textarea"
                                id="textarea"
                                required>{{App\Models\Translates::where('id',$ticket->large_description)->value('kz')}}</textarea>
                        </div>
                    </div>



                    <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel"
                        aria-labelledby="custom-tabs-two-profile-tab">

                        <div class="form-group  ">
                            <label for="title_en" class="control-label">Название билета EN</label>
                            <input class="form-control" name="ticket_title[en]" type="text" id="ticket_title_en"
                                value="{{App\Models\Translates::where('id',$ticket->ticket_title)->value('en')}}"
                                required>
                        </div>

                        <div class="form-group  ">
                            <label for="title_en" class="control-label">Краткое описание EN</label>
                            <input class="form-control" name="short_description[en]" type="text"
                                id="short_description_en"
                                value="{{App\Models\Translates::where('id',$ticket->short_description)->value('en')}}"
                                required>
                        </div>

                        <div class="form-group  ">
                            <label for="title_en" class="control-label">Наименование для взрослого EN</label>
                            <input class="form-control" name="adult_ticket[en]" type="text" id="adult_ticket_en"
                                value="{{App\Models\Translates::where('id',$ticket->adult_ticket)->value('en')}}"
                                required>
                        </div>

                        <div class="form-group  ">
                            <label for="title_en" class="control-label">Наименование для детского EN</label>
                            <input class="form-control" name="child_ticket[en]" type="text" id="child_ticket_en"
                                value="{{App\Models\Translates::where('id',$ticket->child_ticket)->value('en')}}"
                                required>
                        </div>

                        <div class="form-group ">
                            <label for="content_en" class="control-label">Подробное описание EN</label>
                            <textarea class="form-control" rows="5" name="large_description[en]" type="textarea"
                                id="textarea" required>
                                {{App\Models\Translates::where('id',$ticket->large_description)->value('en')}}
                            </textarea>
                        </div>


                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Цена взрослый</label>
                        <input class="form-control" name="adult_actual_price" type="number" id="adult_actual_price"
                            value="{{App\Models\Ticket::where('id',$ticket->id)->value('adult_actual_price')}}"
                            pattern="[0-9]" required data-error="Допускаются цифры и десятичная точка">
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Старая цена для взрослого</label>
                        <input class="form-control" name="adult_old_price" type="number" id="adult_old_price"
                            value="{{App\Models\Ticket::where('id',$ticket->id)->value('adult_old_price')}}" required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Цена детский</label>
                        <input class="form-control" name="child_actual_price" type="number" id="child_actual_price"
                            value="{{App\Models\Ticket::where('id',$ticket->id)->value('child_actual_price')}}"
                            required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Старая цена для детского</label>
                        <input class="form-control" name="child_old_price" type="number" id="child_old_price"
                            value="{{App\Models\Ticket::where('id',$ticket->id)->value('child_old_price')}}" required>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="address">Статус</label>
                        <select name="status" id="status" class="form-control">
                            <option value="0" selected>Off</option>
                            <option value="1">On</option>
                        </select>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="address">Категория билета</label>
                        <select name="category_id" id="status" class="form-control">
                            <option value="0" selected>Аквапарк</option>
                            <option value="1">Spa-Пакеты</option>
                            <option value="2">Дни рождения</option>
                            <option value="3">Клубные карты</option>
                        </select>
                    </div>

                </div>



                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Обновить">
                </div>

            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->

@endsection

@section('scripts')
<script>
tinymce.init({
    selector: '#textarea'
});
</script>
@endsection