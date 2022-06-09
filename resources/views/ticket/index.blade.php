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
                                    <th>Наименование билета</th>
                                    <th>Короткое описание</th>
                                    <th>Взрослый</th>
                                    <th>Актуальная цена для взрослого</th>
                                    <th>Старая цена для взрослого</th>
                                    <th>Детский</th>
                                    <th>Актуальная цена для детского</th>
                                    <th>Старая цена для детского</th>
                                    <th>Категория билета</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tickets as $item)

                                <tr @if($item->status == 0) style="font-weight: bold"; @endif>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->getTicketTitle->ru}}</td>
                                    <td>{{$item->getShortDescription->ru}}</td>
                                    <td>{{$item->getAdultTicket->ru}}</td>
                                    <td>{{$item->adult_actual_price}}</td>
                                    <td>{{$item->adult_old_price}}</td>
                                    <td>{{$item->getChildTicket->ru}}</td>
                                    <td>{{$item->child_actual_price}}</td>
                                    <td>{{$item->child_old_price}}</td>
                                    <td>{{$item->category_id}}</td>
                                    <!--если статут true или 1 то On если false или 0 то Off-->
                                    <td>{{$item->status ? 'On' : 'Off'}}</td>

                                    <td>
                                        <form action="{{route('ticket.destroy', $item['id'])}}" class="form-control"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('ticket.edit',$item->id)}}" title="Редактировать"><i
                                                    class="fa fa-fw fa-eye"></i></a>
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