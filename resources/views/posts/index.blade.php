@extends('layouts.app')

@section('content')
<div class="row pt-4">
    @if(count($posts) >= 1)
        @foreach ($posts as $post)
            <div class="col-4 mb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </a>
            </div>                
        @endforeach
    @endif
</div>
@endsection