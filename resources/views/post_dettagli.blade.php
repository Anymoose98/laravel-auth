@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="{{$post['img']}}" alt="{{$post['title']}}">
        </div>
        <div class="col-6">
            <h1>{{$post['title']}}</h1>
            <h4>{{$post['slug']}}</h4>
            <p>{{$post['description']}}</p>
        </div>
    </div>
</div>
@endsection
