@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)

        <h1>{{ $post->title }}</h1>
        <p>{{ $post->description }}</p><br>
        <b>Autor:{{ $post->user->name }}</b>
        @can('post-update', $post)
            <a href="{{ url("/post/$post->id/update") }}">Editar</a>
        <hr>
        @endcan()
    @empty
        <p>Nenhum Post Cadastrado!</p>
    @endforelse
</div>
@endsection
