@extends('layouts.app')

@section('content')
    <h1>Ajouter un Article</h1>
    <div class="container mt-5">
        <div  class="row justify-content-center">
            <form action="/articles" method="POST">
                @csrf
                @if(isset($article))
                    @method('PUT')
                @endif
                <div class="mb-3">
                    <label for="title" class="form-label">Titre :</label>
                    <input type="text" name="title" class="form-control" value="" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label" >Contenu :</label>
                    <textarea name="content" class="form-control" required></textarea>
                </div>
            <button type="submit" class="btn btn-sm btn-success" >Ajouter</button> <br><br><br><br><br><br><br><br><br><br><br><br><br>
        </form>
        <a href="/articles">Retour a la liste</a>
        </div>
    </div>
@endsection