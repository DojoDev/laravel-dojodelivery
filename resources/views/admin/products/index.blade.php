@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <header>
            <h1>Products</h1>
            <hr>
            <span class="row">
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary">New Product</a>
            </span>
            <br>
        </header>
            <table class="table table-responsive table-bordered">
                <thead>
                <tr>

                    <th>ID</th>
                    <th>Product</th>
                    <th>Category Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>


                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name }}</td>
                    <td>R$ {{$product->price }}</td>
                    <td>
                       <a href="{{route('admin.products.edit', ['id'=>$product->id])}}" class="btn btn-primary" role="button">
                           <icon class="glyphicon glyphicon-pencil"></icon>
                       </a>

                        <a href="{{route('admin.products.destroy', ['id'=>$product->id])}}" class="btn btn-danger" role="button">
                            <icon class="glyphicon glyphicon-trash"></icon>
                        </a>


                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        {!! $products->render()!!}



    </div><!-- End Row -->
</div><!-- End Container -->
@endsection