@extends('layouts.app')

@section('content')
    @can('edit articles')
        <button>Modifier l'article</button>
    @endcan
@endsection
