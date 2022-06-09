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
                                    <th>Заявление</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($refund as $item) 
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->refund}}</td> 
                                    <td>
                                    <a href="{{route('refund.show',$item->id)}}" title="Просмотреть"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Просмотреть</button></a>
                                    <form action="{{route('refund.destroy', $item['id'])}}" class="form-control"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-xs delete"><i
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