@extends('layouts.app');    

@section('content')

@can('edit articles')
<button>Modifier l'article</button>
@endcan
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
    <button type="submit">Logout</button>
</form>

@endsection