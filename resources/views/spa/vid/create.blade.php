@extends('layouts.app_admin')
@section('content')

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-default">
        <div class="box-body">
            <a href="{{route('spa.vid.index')}}" title="Back"><button class="btn btn-warning btn-sm">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
            <br />
            <br />
            <form method="POST" action="{{route('spa.vid.store')}}" accept-charset="UTF-8"
                enctype="multipart/form-data">
                @csrf
                <br>
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade active in" id="custom-tabs-two-home" role="tabpanel"
                        aria-labelledby="custom-tabs-two-home-tab">
                        <div class="form-group ">
                            <label for="image" class="control-label">Ссылка на видео</label>
                            <input class="form-control" name="link" type="text" id="link" placeholder="Ссылка на видео">
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
</section>
<!-- /.content -->
@endsection