@extends('layouts.app_admin')
@section('content')

<div class="box box-default">
    <div class="box-body">
        <div class="col-md-9">
            <br />
            <br />
            <form method="POST" action="{{url('admin/staywithus')}}" data-toggle="validator">
                @csrf
                <div class="form-group ">
                    <label for="name" class="control-label">Сервис</label>
                    <input class="form-control" name="servis" type="text" id="name" autocomplete="off"
                        value="{{App\Models\Staywus::where('id',$info->id)->value('servis')}}" required>
                </div>

                <div class="form-group ">
                    <label for="email" class="control-label">Маркетинг</label>
                    <input class="form-control" name="market" type="text" id="email" autocomplete="off"
                        value="{{App\Models\Staywus::where('id',$info->id)->value('market')}}" required>
                </div>

                <div class="form-group ">
                    <label for="email" class="control-label">Номер телефона 1</label>
                    <input class="form-control" name="num1" type="text" id="phone_number"
                        value="{{App\Models\Staywus::where('id',$info->id)->value('num1')}}" autocomplete="off"
                        required>
                </div>

                <div class="form-group ">
                    <label for="email" class="control-label">Номер телефона 1</label>
                    <input class="form-control" name="num2" type="text" id="phone_number"
                        value="{{App\Models\Staywus::where('id',$info->id)->value('num2')}}" autocomplete="off"
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