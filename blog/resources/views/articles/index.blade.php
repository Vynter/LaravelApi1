@extends('layouts.app')

@section('title', 'Index Article')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Content</td>
                <td>Voir</td>
                <td>Actions</td>
                <td>Suppression</td>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->content}}</td>
                    <td><a href="{{ route('articles.show',$article->id) }}" class="btn btn-info">#</a></td>
                    <td><a href="{{  route('articles.edit', $article->id) }}" class="btn btn-success">Modifier</a></td>
                    <td><form action="{{  route('articles.destroy', $article->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">X</button>
                    </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
