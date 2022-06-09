@extends('layouts.app_admin')
@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                <th>Номер заказа</th>
                                    <th>Имя пользователя</th>
                                    <th>ID пользователя</th>
                                    <th>Элек.почта</th>
                                    <th>Телефон</th>
                                    <th>IP клиента</th>
                                    <th>Наименование билета</th>
                                    <th>Тип оплаты</th>
                                    <th>Цена взрослый</th>
                                    <th>Количество</th>
                                    <th>Цена детский</th>
                                    <th>Количество</th>
                                    <th>Итоговая сумма</th>
                                    <th>Дата покупки</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order as $item)

                                <tr @if($item->status == 0) style="font-weight: bold"; @endif>
                                <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->user_id}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone_number}}</td>
                                    <td>{{$item->client_ip}}</td>
                                    <td>{{$item->ticket_title}}</td>
                                    <td>{{$item->payment_type}}</td>
                                    <td>{{$item->adult_price}}</td>
                                    <td>{{$item->adult_number}}</td>
                                    <td>{{$item->child_price}}</td>
                                    <td>{{$item->child_number}}</td>
                                    <td>{{$item->total}}</td>
                                    <td>{{$item->created_at}}</td>

                                    <td>
                                        <a href="{{route('order.show',$item->id)}}" title="Просмотреть"><i
                                                class="fa fa-fw fa-eye"></i></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->
@endsection