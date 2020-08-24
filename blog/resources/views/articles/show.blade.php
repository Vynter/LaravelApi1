@extends('layouts.app')

@section('title', 'Article show')

@section('content')
<div class="container">
    <div class="row-justify-content-center">
        <table class="table col-md-8">
            <thead>
                <th>img</th>
                <th>#</th>
                <th>content</th>
                <th>date de creation</th>
            </thead>
            <tbody>
            <td><img src="/storage/articles/{{$article->id}}.png" style="width: 250px"></td>
                <td>{{$article->id}}</td>
                <td>{{$article->content}}</td>
                <td>{{date('d-m-Y' ,strtotime($article->created_at)) }}</td>
            </tbody>
        </table>
    </div>
</div>
@endsection
