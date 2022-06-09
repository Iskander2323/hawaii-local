@extends('layouts.app_admin')
@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <a href="{{route('order.index')}}" title="Back"><button class="btn btn-warning btn-sm"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
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


                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->user_id}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->phone_number}}</td>
                                    <td>{{$order->client_ip}}</td>
                                    <td>{{$order->ticket_title}}</td>
                                    <td>{{$order->payment_type}}</td>
                                    <td>{{$order->adult_price}}</td>
                                    <td>{{$order->adult_number}}</td>
                                    <td>{{$order->child_price}}</td>
                                    <td>{{$order->child_number}}</td>
                                    <td>{{$order->total}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <!--если статут true или 1 то On если false или 0 то Off-->
                                    <td></td>
                                    <td></td>
                                </tr>

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