@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Post</h1>

    @if($posts->isEmpty())

        <p>No post has been created yet</p>

    @else
        

    @endif
</div>
@endsection