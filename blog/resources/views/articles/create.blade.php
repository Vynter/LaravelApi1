@extends('layouts.aps')

@section('title','creare article')

@section('content')
    <form action="{{route('articles.store')}}" method="post" class="form">
        @csrf
        <div class="form-group">
            <label for="content">Content :</label>
            <input name="content" class="form-control" type="text">
        </div>
        <button type="submit" class="btn btn-primary">valider</button>
    </form>
@endsection
