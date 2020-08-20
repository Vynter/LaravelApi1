@extends('layouts.aps')

@section('title', 'Index Article')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Content</td>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->content}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
