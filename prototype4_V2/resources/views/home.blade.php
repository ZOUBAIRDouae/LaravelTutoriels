@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($articles as $article)
            <div class="block rounded-lg border border-gray-200 bg-white p-6 text-gray-700 shadow-md my-4">
                <h5 class="mb-2 text-xl font-semibold leading-tight text-gray-800">
                    {{ $article->title }}
                </h5>
                <p class="mb-4 text-base text-gray-600">
                    {{ $article->content }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
