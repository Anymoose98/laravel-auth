@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <h1>Modifica il contenuto</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.posts.update',$post->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-6">
                        <div class="form-group mt-3">
                            <label for="title" class="">Inserisci titolo</label>
                            <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo" required value="{{$post->title}}">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="slug" class="">Inserisci uno slug personale</label>
                        <input type="text" name="slug" class="form-control" placeholder="Inserisci uno slug personale" required value="{{$post->slug}}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="title">Inserisci una descrizione</label><br>
                        <textarea required name="description" placeholder="Inserisci una descrizione" cols="85" rows="5" class="form-control">{{$post->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Salva il contenuto</button>
                </form>
            </div>
        </div>
    </div>

@endsection