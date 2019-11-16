@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(count($user->following) > 0)
                    @foreach($feed_posts as $feed_post)

                        <div class="pt-5 d-flex align-items-center">
                            <a href="/profile/{{ $feed_post->user->id }}">
                                <img src="/storage/{{ $feed_post->user->profile->image }}" class="w-15 rounded-circle" style="max-width: 40px">
                            </a>
                            <a href="/profile/{{ $feed_post->user->id }}">
                                <span class="font-weight-bold pl-3 text-dark">{{ $feed_post->user->username }}</span>
                            </a>
                            <div class="pl-3">
                                {{ date("F jS, Y g:i A", strtotime($feed_post->created_at)) }}
                            </div>
                        </div>

                        <div class="pt-1">
                            <img src="/storage/{{ $feed_post->image }}" class="w-50">
                        </div>

                        <div class="pt-1 pb-2">
                            {{ $feed_post->caption }}
                        </div>

                    @endforeach
                @else
                    You are not following anyone!
                @endif
            </div>
        </div>
    </div>
@endsection
