@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <header>
            <h1>Category</h1>
            <hr>
            <span class="row">
                <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">New Category</a>
            </span>
            <br>
        </header>

            <table class="table table-responsive table-bordered">
                <thead>
                <tr>

                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>


                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                       <a href="{{route('admin.categories.edit', ['id'=>$category->id])}}" class="btn btn-primary" role="button">
                           <icon class="glyphicon glyphicon-pencil"></icon>
                       </a>
                       


                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        {!!$categories->render()!!}



    </div><!-- End Row -->
</div><!-- End Container -->
@endsection