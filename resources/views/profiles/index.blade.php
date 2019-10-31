@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5 pt-5" align ="center">
                <img src="https://scontent-iad3-1.cdninstagram.com/vp/dd1c97d1ae921b1373e925e906bd26a0/5E2CE3E5/t51.2885-19/s150x150/20686955_269260230227541_8595081543368572928_a.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com" class="rounded-circle">
            </div>
            <div class="col-6 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="{{ route('posts.create') }}">Add New Post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ count($user->posts) }}</strong> posts</div>
                    <div class="pr-5"><strong>160</strong> followers</div>
                    <div class="pr-5"><strong>291</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>

        <div class="row pt-5 justify-content-center">

            @foreach($user->posts as $post)
                <div class="col-12 col-md-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-75">
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
