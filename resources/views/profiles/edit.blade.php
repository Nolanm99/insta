@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="row">
                <div class="col-8 offset-3 pt-3">

                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>

                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Title</label>

                        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') ?? $user->profile->title }}" >

                        @if ($errors->has('title'))
                            <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class="col-md-4 control-label">Description</label>

                        <input id="description" type="text" class="form-control" name="description" value="{{ old('description') ?? $user->profile->description}}" >

                        @if ($errors->has('description'))
                            <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                        <label for="url" class="col-md-4 control-label">URL</label>

                        <input id="url" type="text" class="form-control" name="url" value="{{ old('url') ?? $user->profile->url}}" >

                        @if ($errors->has('url'))
                            <span class="help-block">
                            <strong>{{ $errors->first('url') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 control-label">Profile Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                        @if ($errors->has('image'))
                            <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Save Profile</button>
                    </div>

                </div>
            </div>


        </form>
    </div>
@endsection
