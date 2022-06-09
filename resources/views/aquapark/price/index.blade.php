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
                                    <th>Описание прайса</th>
                                    <th>Время часово детский</th>
                                    <th>Цена часово детский</th>
                                    <th>Время суточно детский</th>
                                    <th>Цена суточно детский</th>
                                    <th>Цена спа детский</th>
                                    <th>Время часово взрослый</th>
                                    <th>Цена часово взрослый</th>
                                    <th>Время суточно взрослый</th>
                                    <th>Цена суточно взрослый</th>
                                    <th>Цена спа взрослый</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($price as $item)
                                <tr>
                                    <td>{!!$item->getDescription->ru!!}</td>
                                    <td>{{$item->getChildHour->ru}}</td>
                                    <td>{{$item->time_hour_price_child}}</td>
                                    <td>{{$item->getChildDay->ru}}</td>
                                    <td>{{$item->time_day_price_child}}</td>
                                    <td>{{$item->spa_child_price}}</td>
                                    <td>{{$item->getAdultHour->ru}}</td>
                                    <td>{{$item->time_hour_price_adult}}</td>
                                    <td>{{$item->getAdultDay->ru}}</td>
                                    <td>{{$item->time_day_price_adult}}</td>
                                    <td>{{$item->spa_adult_price}}</td>
                                    <!--если статут true или 1 то On если false или 0 то Off-->

                                    <td>
                                        <a href="{{route('aquapark.price.edit',$item->id)}}" title="Редактировать"><i
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