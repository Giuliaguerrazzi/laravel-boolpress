@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Post</h1>

    @if($posts->isEmpty())

        <p>No post has been created yet</p>

    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th colspan="3"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->created_at->format('d/m/Y')}}</td>

                        <td>
                            <a href="" class="btn btn-success">Show</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif
</div>
@endsection