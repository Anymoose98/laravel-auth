@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body d-flex flex-wrap ">
                    
                    
                        {{ session('status') }}
                         @foreach ($posts as $post)
                            <div class="col-4 my-2">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ $post->img }}" class="card-img-top" alt="{{ $post->title }}">
                                    <div class="card-body">
                                        <h4>{{ $post->title }}</h4>
                                      <p class="card-text">{{ $post->description }}</p>
                                    </div>
                                  </div>                
                            </div>
                         @endforeach

                   
                  

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
