@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <header>
            <h1>Client</h1>
            <hr>
            <span class="row">
                <a href="{{ route('admin.clients.create') }}" class="btn btn-primary">New Client</a>
            </span>
            <br>
        </header>

            <table class="table table-responsive table-bordered">
                <thead>
                <tr>

                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zipcode</th>
                    <th>Action</th>
                </tr>


                </thead>
                <tbody>

                @foreach($clients as $client)

                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->user->name}}</td>
                    <td>{{$client->user->email}}</td>
                    <td>{{$client->phone}}</td>
                    <td>{{$client->address}}</td>
                    <td>{{$client->city}}</td>
                    <td>{{$client->state}}</td>
                    <td>{{$client->zipcode}}</td>
                    <td>
                       <a href="{{route('admin.clients.edit', ['id'=>$client->id])}}" class="btn btn-primary" role="button">
                           <icon class="glyphicon glyphicon-pencil"></icon>
                       </a>
                        <a href="{{route('admin.clients.destroy', ['id'=>$client->id])}}" class="btn btn-danger" role="button">
                            <icon class="glyphicon glyphicon-pencil"></icon>
                        </a>


                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        {!!$clients->render()!!}



    </div><!-- End Row -->
</div><!-- End Container -->
@endsection