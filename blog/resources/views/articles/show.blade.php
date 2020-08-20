@extends('layouts.aps')

@section('title', 'Article show')

@section('content')
<table class="table">
    <thead>
        <th>#</th>
        <th>content</th>
        <th>date de creation</th>
    </thead>
    <tbody>
        <td>{{$article->id}}</td>
        <td>{{$article->content}}</td>
        <td>{{date('d-m-Y' ,strtotime($article->created_at)) }}</td>
    </tbody>
</table>

@endsection
