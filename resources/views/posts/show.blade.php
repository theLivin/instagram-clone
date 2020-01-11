@extends('layouts.app')

@section('content')
<div class="container card">
    <div class="row card-body">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:50px">
                </div>
                <div>
                    <h3><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></h3>
                </div>
            </div>


            <p>{{$post->caption}}</p>
        </div>
    </div>
</div>
@endsection