@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-dark table-striped my-5">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Maggiori informazioni</th>
                        <th scope="col">Modifiche</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                      <tr>
                        <th>{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->slug}}</td>
                        <td><a href="{{ route('admin.posts.show', ['post' => $post->id]) }}">Clicca qui per maggiori informazioni</a></td>
                        <td>
                            <div class="d-flex">
                                <button class="btn btn-warning mx-2">Modifica</button>
                                <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                        </td>
                      </tr>
                      @endforeach
            </div>
                {{-- @foreach ($posts as $post)
                    <div class="col-4 my-2">
            
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $post->img }}" class="card-img-top" alt="{{ $post->title }}">
                            <div class="card-body">
                                
                            <p class="card-text">{{ $post->description }}</p>
                            </div>
                        </div>                
                        
                    </div> --}}
                

        </div>
    </div>
@endsection