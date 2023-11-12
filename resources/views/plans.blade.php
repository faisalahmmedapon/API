@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($plans as $plan)
            <div class="col-md-6 py-1">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Plan Name: {{$plan->title}}</h4>
                        <h5 class="card-subtitle mb-2 text-muted">Plan Price :${{$plan->price}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Plan Commission :${{$plan->commission}}</h6>
                        <p class="card-text">{{$plan->description}}</p>
                        @if($plan->subscriptions->where('user_id', auth()->id())->count() > 0)
                            <a href="#" class="btn btn-sm btn-danger">Subscribed</a>
                        @else
                            <a href="{{ route('subscribe', $plan->id) }}" class="btn btn-sm btn-success">Subscribe</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
    </div>

@endsection
