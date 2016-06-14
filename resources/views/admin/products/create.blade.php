@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <header>
            <h1>Create New Product Now</h1>

            <hr>

            @include('errors._check')

            <span class="row">
                {!! Form::open(['route'=>'admin.products.store'], ['class:'=>'form']) !!}

               @include('admin.products._form')

                   <div class="form-group-lg">

                       {!! Form::submit('Store Product', ['class:'=>'btn btn-success']) !!}
                   </div>

                {!! Form::close() !!}
            </span>
            <br>
        </header>
        <a href="{{route('admin.products.index')}}" class="btn btn-default"><< Back</a>

    </div><!-- End Row -->
</div><!-- End Container -->
@endsection