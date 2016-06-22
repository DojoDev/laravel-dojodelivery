@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <header>
                <h1>Orders</h1>
                <hr>
            </header>

            <table class="table table-responsive table-bordered">
                <thead>
                <tr>

                    <th>ID</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th>Orders</th>
                    <th>Deliveryman</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>


                </thead>
                    <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>#{{ $order->id }}</td>
                        <td>R$ {{ $order->total }}</td>
                        <td>{{ $order->created_at }}</td>
                            <td>
                            <ul>
                            @foreach($order->items as $item)
                            <li>{{ $item->product->name }}</li>
                            @endforeach
                            </ul>
                            </td>
                        <td>
                            @if($order->deliveryman)
                                {{$order->deliveryman->name}}
                                @else
                                --
                            @endif
                        </td>
                        <td>{{$order->status}}</td>
                            <td>
                        <a href="{{route('admin.orders.edit', ['id'=>$order->id])}}" class="btn btn-primary" role="button">
                        <icon class="glyphicon glyphicon-pencil"></icon>
                        </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!!$orders->render()!!}



        </div><!-- End Row -->
    </div><!-- End Container -->
@endsection