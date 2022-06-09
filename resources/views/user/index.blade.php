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
                                    <th>ID</th>
                                    <th>Имя пользователя</th>
                                    <th>Электронная почта</th>
                                    <th>Телефон</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($users as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone_number}}</td>
                                    <td>
                                    <a href="{{route('user.show',$item->id)}}" title="Просмотреть"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Просмотреть</button></a>
                                            <a href="{{route('user.edit',$item->id)}}" title="Редактировать"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Редактировать</button></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <td>
                                        <form action="{{route('user.destroy', $item['id'])}}" class="form-control"
                                            method="post">
                                            @csrf    
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-xs deletebd"><i
                                                    class="fa fa-fw fa-trash"></i></button>
                                            <!-- @if ($item) -->
                                            <!-- <a class="delete" href="{{route('user.destroy',$item->id)}}" title="Удалить из БД"><i class="fa fa-fw fa-close text-danger"></i></a> -->
                                            <!-- @endif -->
                                        </form>
</td>
                                        <!-- <a href="{{route('user.edit',$item->id)}}" title="Редактировать"><i class="fa fa-fw fa-eye"></i></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    @if ($item->status == 0)
                                        <a class="delete" href="#" title="Перевести status = On"><i class="fa fa-fw fa-refresh"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

                                    @else
                                        <a class="delete" href="#" title="Перевести status = Off"><i class="fa fa-fw fa-close"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endif

                                    @if ($item)
                                        <a class="delete" href="{{route('user.destroy',$item->id)}}" title="Удалить из БД"><i class="fa fa-fw fa-close text-danger"></i></a>
                                    @endif -->
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