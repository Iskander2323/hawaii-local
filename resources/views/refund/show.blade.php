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
                                    <th>Номер заявления</th>
                                    <th>Имя пользователя</th>
                                    <th>Текст заявления</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td>{{$refund->id}}</td>
                                    <td>{{$refund->name}}</td>
                                    <td>{{$refund->refund}}</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="form-group">
                            <img src="http://127.0.0.1:8000/{{$refund->passport}}" alt="" style="max-width:1000px;">
                        </div>
                        <br>
                        <div class="form-group">
                            <img src="http://127.0.0.1:8000/{{$refund->receipt}}" alt="" style="max-width:1000px;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->
@endsection