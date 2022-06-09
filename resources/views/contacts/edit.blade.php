@extends('layouts.app_admin')
@section('content')

<div class="box box-default">
    <div class="box-body">
        <div class="col-md-9">
            <br />
            <br />
            <form method="POST" action="{{url('admin/contacts')}}" data-toggle="validator">
                @csrf
                <div class="form-group ">
                    <label for="name" class="control-label">Отзывы и предложения</label>
                    <input class="form-control" name="rns" type="text" id="name" autocomplete="off"
                        value="{{App\Models\Contacts::where('id',$info->id)->value('rns')}}" required>
                </div>

                <div class="form-group ">
                    <label for="email" class="control-label">SPA-центр</label>
                    <input class="form-control" name="spa" type="text" id="email" autocomplete="off"
                        value="{{App\Models\Contacts::where('id',$info->id)->value('spa')}}" required>
                </div>

                <div class="form-group ">
                    <label for="email" class="control-label">Отдел кадров 1</label>
                    <input class="form-control" name="hr1" type="text" id="phone_number"
                        value="{{App\Models\Contacts::where('id',$info->id)->value('hr1')}}" autocomplete="off"
                        required>
                </div>

                <div class="form-group ">
                    <label for="email" class="control-label">Отдел кадров 2</label>
                    <input class="form-control" name="hr2" type="text" id="phone_number"
                        value="{{App\Models\Contacts::where('id',$info->id)->value('hr2')}}" autocomplete="off"
                        required>
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Обновить">
                </div>

            </form>
        </div>
    </div>
    <!-- /.box-body -->
</div>
@endsection