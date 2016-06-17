@extends('app')

@section('content')
<div class="container">

        <header>
            <h1>Product Edit: {{ $product->name }}</h1>
            <hr>
        </header>

        @include('errors._check')

        {!! Form::model($product , ['class'=>'form-horizontal'],['route'=>['admin.products.update', $product->id]]) !!}

        @include('admin.products._form')

        <div class="form-group">
        {!! Form::submit('.:: Save ::.', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}
<div class="container">
    <a href="{{route('admin.products.index')}}" class="btn btn-default"><< Back</a>
</div>

<hr>

</div><!-- End Container -->
@endsection