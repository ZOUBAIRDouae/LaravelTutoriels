@extends('layouts.app')

@section('content')
    <h1>{{$article['title']}}</h1>
    <p>{{$article['content']}}</p>
    <button><a href="/articles/{{$article['id']}}/edit">Modifier</a></button>
    <form action="/articles/{{$article['id']}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
@endsection