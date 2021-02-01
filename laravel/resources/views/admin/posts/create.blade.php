@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create new post</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('admin.posts.store')}}" method="POST">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="title">Post Title</label>
        <input class='form-control' type="text" id="title" name="title" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="body">Post Content</label>
        <textarea class="form-control" id="body" name="body">{{ old('body') }}</textarea>
    </div>
    
    <input class='btn btn-primary' type="submit" value="Create Post">

    </form>
</div>
@endsection