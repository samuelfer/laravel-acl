@extends('layouts.app')

@section('content')
<div class="container">
    @can('novo_post')
        <input type="button" class="btn btn-primary" value="Novo">
    @endcan
    @forelse($posts as $post)

        <h1>{{ $post->title }}</h1>
        <p>{{ $post->description }}</p><br>
        <b>Autor:{{ $post->user->name }}</b>
       @can('update-post', $post)
            <a href="{{ url("/post/$post->id/update") }}">Editar</a>
        <hr>
        @endcan()
    @empty
        <p>Nenhum Post Cadastrado!</p>
    @endforelse
</div>
@endsection
