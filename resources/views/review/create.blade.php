@extends('layouts.app_admin')
@section('content')

<div class="box box-default">
<a href="{{route('review.index')}}" title="Back"><button class="btn btn-warning btn-sm"><i
                    class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
    <div class="box-body">
        <div class="col-md-9">
            <br />
            <form method="POST" action="{{route('review.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
                <div class="form-group ">
                    <label for="name" class="control-label">Имя пользователя</label>
                    <input class="form-control" name="name" type="text" id="name" autocomplete="off"
                        value="" required>
                </div>
                <div class="form-group ">
                    <label for="email" class="control-label">Дата и источник</label>
                    <input class="form-control" name="date" type="text" id="email" autocomplete="off"
                        value="" required placeholder="24 марта 2022г. 2ГИС">
                </div>
                <div class="form-group ">
                    <label for="email" class="control-label">Отзыв</label>
                    <textarea class="form-control" rows="5" name="review" type="textarea" id="textarea"
                            placeholder="" ></textarea>
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="создать">
                </div>

            </form>
        </div>
    </div>
    <!-- /.box-body -->
</div>
@endsection

@section('scripts')
<script>
tinymce.init({
    selector: '#textarea'
});
</script>
@endsection