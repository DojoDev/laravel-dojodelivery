@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <header>
            <h1>Create New Category Now</h1>

            <hr>

            @include('errors._check')

            <span class="row">
                {!! Form::open(['route'=>'admin.categories.store'], ['class:'=>'form']) !!}

               @include('admin.categories._form')

                   <div class="form-group-lg">

                       {!! Form::submit('Store Category', ['class:'=>'btn btn-success']) !!}
                   </div>

                {!! Form::close() !!}
            </span>
            <br>
        </header>
        <a href="{{route('admin.categories.index')}}" class="btn btn-default"><< Back</a>

    </div><!-- End Row -->
</div><!-- End Container -->
@endsection