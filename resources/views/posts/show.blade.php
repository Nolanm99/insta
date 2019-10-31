@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row justify-content-center">
           <div class="col-6">
               <img src="/storage/{{ $post->image }}" class="w-75">
           </div>
           <div class="col-6">
               <h1>{{ dd($post->user_id) }}</h1>
               {{ $post->caption }}
           </div>
       </div>
    </div>
@endsection
