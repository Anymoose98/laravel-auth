@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.posts.store') }}" method="post">
                    @csrf
                    <div class="col-6">
                        <div class="form-group mt-5">
                            <label for="title" class="">Inserisci titolo</label>
                            <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="title">Inserisci una descrizione</label><br>
                        <textarea required name="description" placeholder="Inserisci una descrizione" cols="85" rows="5" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Salva il contenuto</button>
                </form>
            </div>
        </div>
    </div>

@endsection