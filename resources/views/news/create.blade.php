@extends('layouts.app_admin')

@section('content')

<!-- Default box -->
<div class="box box-default">
    <div class="box-body">
        <a href="{{route('news.index')}}" title="Back"><button class="btn btn-warning btn-sm"><i
                    class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
        <br />
        <br />
        <form method="POST" action="{{route('news.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
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
                        <label for="title_ru" class="control-label">Заголовок RU</label>
                        <input class="form-control" name="title[ru]" type="text" id="ticket_title_ru" value="" required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_ru" class="control-label">Описание RU</label>
                        <textarea class="form-control" rows="5" name="description[ru]" type="textarea" id="textarea"
                            placeholder="" ></textarea>
                    </div>

                </div>

                <div class="tab-pane fade" id="custom-tabs-kz" role="tabpanel" aria-labelledby="custom-tabs-two-kz">

                    <div class="form-group  ">
                        <label for="title_kz" class="control-label">Заголовок KZ</label>
                        <input class="form-control" name="title[kz]" type="text" id="ticket_title_kz" value="" required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_kz" class="control-label">Описание KZ</label>
                        <textarea class="form-control" rows="5" name="description[kz]" type="textarea" id="textarea"
                            ="" ></textarea>
                    </div>
                </div>



                <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-two-profile-tab">

                    <div class="form-group  ">
                        <label for="title_en" class="control-label">Заголовок EN</label>
                        <input class="form-control" name="title[en]" type="text" id="ticket_title_en" value="" required>
                    </div>

                    <div class="form-group  ">
                        <label for="title_en" class="control-label">Описание EN</label>
                        <textarea class="form-control" rows="5" name="description[en]" type="textarea" id="textarea"
                            placeholder=""></textarea>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Создать">
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