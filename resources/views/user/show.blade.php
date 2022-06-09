@extends('layouts.app_admin')
@section('content')

<div class="box box-default">
<a href="{{route('user.index')}}" title="Назад"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
    <div class="box-body">
        <div class="col-md-9">
            <br />
            <br />
                <div class="form-group ">
                    <label for="name" class="control-label">ФИО</label>
                    <input class="form-control" name="name" type="text" id="name" autocomplete="off"
                        value="{{App\Models\User::where('id',$user->id)->value('name')}}" required>
                </div>

                <div class="form-group ">
                    <label for="email" class="control-label">Email</label>
                    <input class="form-control" name="email" type="text" id="email" autocomplete="off"
                        value="{{App\Models\User::where('id',$user->id)->value('email')}}" required>
                </div>

                <div class="form-group ">
                    <label for="email" class="control-label">Номер телефона</label>
                    <input class="form-control" name="phone_number" type="text" id="phone_number"
                        value="{{App\Models\User::where('id',$user->id)->value('phone_number')}}" autocomplete="off"
                        required>
                </div>

               
                    <label for="name" class="control-label">Купленные билеты пользователя</label>
              

                <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Номер заказа</th>
                                    <th>Наименование билета</th>
                                    <th>Вид оплаты</th>
                                    <th>Взрослый</th>
                                    <th>Количество</th>
                                    <th>Детский</th>
                                    <th>Количество</th>
                                    <th>Итоговая сумма</th>
                                    <th>Дата покупки</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($order as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->ticket_title}}</td>
                                    <td>{{$item->payment_type}}</td>
                                    <td>{{$item->adult_price}}</td>
                                    <td>{{$item->adult_number}}</td>
                                    <td>{{$item->child_price}}</td>
                                    <td>{{$item->child_number}}</td>
                                    <td>{{$item->total}}</td>
                                    <td>{{$item->created_at}}</td>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                
        </div>
    </div>
    <!-- /.box-body -->
</div>
@endsection