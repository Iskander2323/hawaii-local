@extends('layouts.app_admin')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <a href="{{route('faq.create')}}" class="btn btn-success btn-sm" title="Add New">
                        <i class="fa fa-plus" aria-hidden="true"></i> Добавить
                    </a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Вопрос</th>
                                    <th>Ответ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($faq as $item)

                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->getQuestion->ru}}</td>
                                    <td>{{$item->getAnswer->ru}}</td>
                                    <!--если статут true или 1 то On если false или 0 то Off-->
                                    <td>
                                        <form action="{{route('faq.destroy', $item['id'])}}" class="form-control"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('faq.edit',$item->id)}}" title="Редактировать"><i
                                                    class="fa fa-fw fa-eye"></i></a>
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

@endsection('content')