@extends('layouts.app')

@section('title')
{{$user->name}} {{'(@'.$user->username.')'}} • Instagram photos and videos
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-4">
                    <div class="h1 font-weight-light">{{ $user->username }}</div>
    
                    <follow-button user-id="{{$user->id}}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)      
                    <a href="{{url('/p/create')}}">Add New Post</a>
                @endcan
            </div>

            @can('update', $user->profile)  
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postsCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? '' }}</div>
            <div>{{ $user->profile->description ?? '' }}</div>
            <div><a href="{{ $user->profile->url ?? '#' }}">{{ $user->profile->url ?? '' }}</a></div>
        </div>
    </div>

    <div class="row pt-4">
        @if(count($user->posts) >= 1)
            @foreach ($user->posts as $post)
                <div class="col-4 mb-4">
                    <a href="/p/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" class="w-100">
                    </a>
                </div>                
            @endforeach
        @endif
    </div>
</div>
@endsection
