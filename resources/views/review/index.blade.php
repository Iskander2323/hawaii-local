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
                                    <th>#</th>
                                    <th>Имя пользователя</th>
                                    <th>Дата</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($review as $item)
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->date}}</td>
                                <td>
                                <form action="{{route('review.destroy', $item['id'])}}" class="form-control"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('review.edit',$item->id)}}" title="Редактировать"><i
                                                    class="fa fa-fw fa-eye"></i></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-danger btn-xs delete"><i
                                                    class="fa fa-fw fa-trash"></i></button>
                                        </form>

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