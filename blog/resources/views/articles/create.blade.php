@extends('layouts.app')

@section('title','creare article')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('articles.store')}}" method="post" class="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="content">Content :</label>
                    <input name="content" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="imagez">Image :</label>
                    <input type="file" name="imagez" id="form-control">
                </div>
                <button type="submit" class="btn btn-primary">valider</button>
            </form>
        </div>
    </div>
</div>

    @endsection
