@extends('layouts.app')

@section('title','default laravel')

@section('left')
    @parent <!-- si on enleve sa suprime le contenu qui se trouve dans layout parent-->
<p>Child left {{$id}}</p>
@endsection

@section('content')
    <h4>article content</h4>

    @if (count($data) === 1)
        on a une seule variable
    @elseif (count($data)>1)
        on a plusieurs variable
        @else
        on a pas de variable
    @endif
    <ul>
    @foreach ($data as $d)
        <li>{{$d}}</li>
    @endforeach
    </ul>
    <form action="{{route('articles')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="first">Firstname :</label>
            <input name="firstname" class="form-control" type="text">
        </div>
        <button type="submit" class="btn btn-primary">valider</button>
    </form>

    @elipsis( 'Lorem ipsums dolor sit amet consectetur adipisicing elit. Veritatis nobis necessitatibus consequatur explicabo totam provident debitis voluptates. Consectetur amet cupiditate exercitationem sunt quam pariatur, ullam, fuga aperiam reiciendis sint voluptatibus! ')
@endsection




