@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <header>
            <h1>Pedido: {{ $order->id }} - R$ {{ $order->total}}</h1>
            <hr>
        </header>
<h2>Data: {{$order->created_at}}</h2>
<h3>Cliente: {{$order->client->user->name}}</h3>
<h4>Entregar em: <br>
    {{$order->client->address}} -{{$order->client->city}} - {{$order->client->state}}
</h4>
    <br>
     {!! Form::model($order , ['class'=>'form-horizontal'],['route'=>['admin.orders.update', $order->id]]) !!}
     
<div class="form-group">
    {!! Form::label('Status', 'Status:')  !!}
    {!! Form::select('status', $list_status,  ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Entregador', 'Entregador:')  !!}
    {!! Form::select('user_deliveryman_id', $deliveryman,  ['class'=>'form-control']) !!}
</div>


     <div class="form-group">
        {!! Form::submit('.:: Save ::.', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}


    <a href="{{route('admin.orders.index')}}" class="btn btn-default"><< Back</a>
    <hr>
</div><!-- End Container -->
@endsection