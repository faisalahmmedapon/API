@extends('backend.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <form action="{{route('plans.update',$plan->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$plan->title}}">
                    @error('title')
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$plan->price}}">
                    @error('price')
                    <p class="text-danger">{{ $errors->first('price') }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="commission" class="form-label">Commission</label>
                    <input type="text" class="form-control" id="commission" name="commission" value="{{$plan->commission}}">
                    @error('commission')
                    <p class="text-danger">{{ $errors->first('commission') }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Description</label>
                    <textarea rows="10" name="description" class="form-control">{{$plan->description}}</textarea>
                    @error('description')
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
