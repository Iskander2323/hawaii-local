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
                                    <th>Описание на казахском</th>
                                    <th>Описание на английском</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($aquaparkInfo as $item)
                                <td></td>
                                <td>{!! $item->getDescription->ru !!}</td>
                                <td>{!!$item->getDescription->kz!!}</td>
                                <td>{!!$item->getDescription->en!!}</td>
                                <td>
                                    <a href="{{route('aquapark.info.edit',$item->id)}}" title="Редактировать"><i
                                            class="fa fa-fw fa-eye"></i></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                </td>

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