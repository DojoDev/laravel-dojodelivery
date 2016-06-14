@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <header>
            <h1>Category Edit: {{ $category->name }}</h1>

            <hr>
@include('errors._check')

                {!! Form::model($category , ['route'=>['admin.categories.update', $category->id]]) !!}

               @include('admin.categories._form')


            <div class="form-group">
                {!! Form::submit('.::Category Save::.', ['class:'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </header>


    </div><!-- End Row -->
    <a href="{{route('admin.categories.index')}}" class="btn btn-default"><< Back</a>
</div><!-- End Container -->
@endsection