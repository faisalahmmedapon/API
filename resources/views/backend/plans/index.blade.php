@extends('backend.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end">
            <a href="{{route('plans.create')}}" class="btn btn-sm btn-success">New Plan</a>
        </div>
        <div class="col-md-12">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Commission</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($plans as $key => $plan)
                    <tr>
                        <th>{{$key+1}}</th>
                        <td>{{$plan->title}}</td>
                        <td>${{$plan->price}}</td>
                        <td>${{$plan->commission}}</td>
                        <td>{{$plan->description}}</td>
                        <td class="d-flex">
                            <a href="{{route('plans.edit',$plan->id)}}" class="btn btn-info btn-sm m-1">Edit</a>
                            <a href="{{route('plans.destroy',$plan->id)}}" class="btn btn-danger btn-sm m-1">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
