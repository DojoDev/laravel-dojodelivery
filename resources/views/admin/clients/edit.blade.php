@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <header>
            <h1>Client Edit: {{ $client->user->name }}</h1>
            <hr>
        </header>
@include('errors._check')

{!! Form::model($client , ['class'=>'form-horizontal'], ['route'=>['admin.clients.update', $client->id]]) !!}
<br>
@include('admin.clients._form')

<div class="form-group">
{!! Form::submit('.:: SAVE ::.', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
    </div><!-- End Row -->
    <hr>
    <a href="{{route('admin.clients.index')}}" class="btn btn-default"><< Back</a>
</div><!-- End Container -->
@endsection