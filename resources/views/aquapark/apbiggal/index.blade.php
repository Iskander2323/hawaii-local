@extends('layouts.app_admin')
@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <a href="{{route('aquapark.apbiggal.create')}}" class="btn btn-success btn-sm" title="Add New">
                        <i class="fa fa-plus" aria-hidden="true"></i> Добавить
                    </a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Фото</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($photo as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>
                                        <img src="http://127.0.0.1:8000/{{$item->img}}" width="300px">
                                    </td>
                                    <td>
                                        <form action="{{route('aquapark.apbiggal.destroy', $item['id'])}}"
                                            class="form-control" method="post">
                                            @csrf
                                            @method('delete')
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fa fa-fw fa-trash"></i></button>
                                        </form>
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