@extends('layouts.app_admin')
@section('content')

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-default">
        <div class="box-body">
            <a href="{{route('aquapark.shedule.index')}}" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
            <br />
            <br />

            <form method="POST" action="{{ url('/admin/workshedule', $workshedule->id)}}" accept-charset="UTF-8"
                enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                @csrf

                <br>
                <div class="tab-content" id="custom-tabs-two-tabContent">

                    <div class="tab-pane fade active in" id="custom-tabs-two-home" role="tabpanel"
                        aria-labelledby="custom-tabs-two-home-tab">

                        <div class="form-group  ">
                            <label for="title_ru" class="control-label">Расписание RU</label>
                            <input class="form-control" name="shedule_description[ru]" type="text" id="ticket_title_ru"
<<<<<<< HEAD
                                value="{{App\Models\Translates::where('id',$workshedule->shedule_description)->value('ru')}}"
=======
                                value="{{App\Models\Staywus::where('id',$workshedule->shedule_description)"
>>>>>>> 8253cc7 (Сделал футер сайта)
                                required>
                        </div>

                        <div class="form-group  ">
                            <label for="title_kz" class="control-label">Расписание KZ</label>
                            <input class="form-control" name="shedule_description[kz]" type="text" id="ticket_title_kz"
<<<<<<< HEAD
                                value="{{App\Models\Translates::where('id',$workshedule->shedule_description)->value('kz')}}">
=======
                                value="{{App\Models\Staywus::where('id',$workshedule->shedule_description)->value('kz')}}">
>>>>>>> 8253cc7 (Сделал футер сайта)
                        </div>

                        <div class="form-group  ">
                            <label for="title_en" class="control-label">Расписание EN</label>
                            <input class="form-control" name="shedule_description[en]" type="text" id="ticket_title_en"
<<<<<<< HEAD
                                value="{{App\Models\Translates::where('id',$workshedule->shedule_description)->value('en')}}">
=======
                                value="{{App\Models\Staywus::where('id',$workshedule->shedule_description)->value('en')}}">
>>>>>>> 8253cc7 (Сделал футер сайта)
                        </div>
                    </div>
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
</section>
<!-- /.content -->


<!-- /.content-wrapper -->

@endsection