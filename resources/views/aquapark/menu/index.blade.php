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
                                    <th></th>
                                    <th>Описание на русском</th>
                                    <th>Ссылка на меню</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($menu))
                                @foreach($menu as $item)
                                <td></td>
                                <td>{!!$item->getDescription->ru!!}</td>
                                <td>{{$item->getOpenMenu->ru}}</td>
                                <td>
                                    <a href="{{route('aquapark.menu.edit',$item->id)}}" title="Редактировать"><i
                                            class="fa fa-fw fa-eye"></i></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                </td>
                                @endforeach
                                @endif
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