@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Liste des Articles</h1>
                </div>
                <div class="card">
                    <div class="card-header col-md-12">
                        <a href="/articles/create" class="btn btn-primary">Crée un nouvel Article</a>
                    </div>
                    <div class="card-body col-md-12">
                        <table>
                            @foreach ($articles as $article)
                            <tr>
                                <td>{{$article['title']}}</td>
                                <td>{{$article['content']}}</td>
                                <td><a href="/articles/{{$article['id']}}" class="btn btn-sm btn-secondary ">Afficher</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@include('partials.flash-message')





        


