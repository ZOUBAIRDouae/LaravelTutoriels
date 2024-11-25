@extends('layouts.app')

@section('content')
<h1>Liste des Articles</h1>
    <!-- créer un nouveau article -->
    <button><a href="/articles/create">Crée un nouvel Article</a></button>
    <ul>
        @foreach ($articles as $article)
            <li>
                <h2>{{$article['title']}}</h2>
                <p>
                    {{ $article['content'] }}
                </p>
                <button><a href="/articles/{{$article['id']}}">Afficher</a></button>
            </li>
        @endforeach
    </ul>
@endsection
