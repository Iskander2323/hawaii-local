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
                                    <th>Наименование акции</th>
                                    <th>Описание</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($promo as $item)

                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->getTicketTitle->ru}}</td>
                                    <td>{!!$item->getShortDescription->ru!!}</td>
                                    <!--если статут true или 1 то On если false или 0 то Off-->
                                    <td>
                                        <form action="{{route('promo.destroy', $item['id'])}}" class="form-control"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('promo.edit',$item->id)}}" title="Редактировать"><i
                                                    class="fa fa-fw fa-eye"></i></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
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

@endsection('content')