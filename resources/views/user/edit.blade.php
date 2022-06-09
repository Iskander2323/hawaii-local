@extends('layouts.app_admin')
@section('content')

<div class="box box-default">
    <div class="box-body">
        <div class="col-md-9">
            <a href="{{route('user.index')}}" title="Назад"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
            <br />
            <br />

            <form method="POST" action="{{ url('/admin/user', $user->id)}}" accept-charset="UTF-8"
                enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                @csrf

                <div class="form-group ">
                    <label for="name" class="control-label">Имя</label>
                    <input class="form-control" name="name" type="text" id="name" autocomplete="off"
                        value="{{App\Models\User::where('id',$user->id)->value('name')}}" required>
                </div>

                <div class="form-group ">
                    <label for="email" class="control-label">E-mail</label>
                    <input class="form-control" name="email" type="email" id="email" autocomplete="off"
                        value="{{App\Models\User::where('id',$user->id)->value('email')}}" required>

                </div>

                <div class="form-group ">
                    <label for="email" class="control-label">Номер телефона</label>
                    <input class="form-control" name="phone_number" type="text" id="phone_number"
                        value="{{App\Models\User::where('id',$user->id)->value('phone_number')}}" autocomplete="off"
                        required>

                </div>

                <div class="form-group ">
                    <label for="icon" class="control-label">Пароль</label>
                    <input class="form-control" name="password" type="text" id="password"
                        value="{{App\Models\User::where('id',$user->id)->value('password')}}" autocomplete="off">
                </div>

                <div class="form-group has-feedback">
                    <label for="address">Роль</label>
                    <select name="role" id="role" class="form-control">
                        <option value="2" selected>Пользователь</option>
                        <option value="3">Администратор</option>
                        <option value="1">Disabled</option>
                    </select>
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