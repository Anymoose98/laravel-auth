@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-4 my-2">
        
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $post->img }}" class="card-img-top" alt="{{ $post->title }}">
                        <div class="card-body">
                            <h4><a href="{{ route('admin.dettaglio_post.index') }}"{{ $post->title }} </a> </h4>
                        <p class="card-text">{{ $post->description }}</p>
                        </div>
                    </div>                
                    
                </div>
            @endforeach
        </div>
    </div>
@endsection