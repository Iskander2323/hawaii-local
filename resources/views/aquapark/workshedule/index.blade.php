@extends('layouts.app_admin')
@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <a href="{{route('aquapark.shedule.create')}}" class="btn btn-success btn-sm" title="Add New">
                        <i class="fa fa-plus" aria-hidden="true"></i> Добавить
                    </a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Описание на русском</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($workshedule))
                                @foreach($workshedule as $item)
                                <tr>
                                    <td>{{$item->getDescription->ru}}</td>
                                    <td>
                                        <form action="{{route('aquapark.shedule.destroy', $item['id'])}}"
                                            class="form-control" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('aquapark.shedule.edit',$item->id)}}"
                                                title="Редактировать"><i class="fa fa-fw fa-eye"></i></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fa fa-fw fa-trash"></i></button>
                                        </form>

                                    </td>
                                    @endforeach
                                    @endif
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