@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row ">
           <div class="col-8">
               <img src="/storage/{{ $post->image }}" class="w-75">
           </div>
           <div class="col-4">
               <div class="d-flex align-items-center">
                   <div>
                       <img src="/storage/{{ $post->user->profile->image }}" alt="" class="rounded-circle w-50" style="max-width: 200px">
                   </div>
                   <div>
                       <a href="/profile/{{ $post->user->id }}">
                           <span class="text-dark font-weight-bold">{{ $post->user->username }}</span>
                       </a>
                       <a href="#" class="pl-3">Follow</a>
                   </div>
               </div>
               <div class="pt-5">
                   <p><span class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a></span> {{ $post->caption }}</p>
               </div>
           </div>
       </div>
    </div>
@endsection
