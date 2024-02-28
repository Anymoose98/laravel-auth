@extends('layouts.app')

@section('content')
<div class="container" id="container-dettagli">
    <div class="row">
        <div class="col-6">
            @if ($post->img != null)
            <img src="{{ asset (`/storage/` . $post['img']) }}" alt="{{$post['title']}}">
            @else <h3>Immagine non inserita</h3>
            @endif
        </div>
        <div class="col-6">
            <h1>{{$post['title']}}</h1>
            <h4>{{$post['slug']}}</h4>
            <p>{{$post['description']}}</p>
        </div>
    </div>
</div>
@endsection
