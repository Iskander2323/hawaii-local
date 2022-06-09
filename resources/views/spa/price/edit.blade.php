@extends('layouts.app_admin')
@section('content')
<a href="{{route('spa.price.index')}}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
            aria-hidden="true"></i> Назад</button></a>
<form method="POST" action="{{ url('/admin/spaprice', $spaprice->id) }}" accept-charset="UTF-8"
    enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PATCH">
    @csrf

    <div class="form-group ">
        <label for="image" class="control-label">Изображения</label>
        <input class="form-control" name="img" type="file" id="image" value="">
    </div>

    <br>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Редактировать">
    </div>

</form>

@endsection