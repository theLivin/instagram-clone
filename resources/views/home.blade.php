@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/2.png" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{Auth::user()->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>2k</strong> followers</div>
                <div class="pr-5"><strong>5.6M</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freecodegram.org</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quasi voluptatem illo optio inventore, eaque ratione reiciendis officia rem quibusdam.(20)</div>
            <div><a href="#">freecodegram.org</a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4"><img src="/img/7.png" class="w-100"></div>
        <div class="col-4"><img src="/img/3.png" class="w-100"></div>
        <div class="col-4"><img src="/img/4.png" class="w-100"></div>
    </div>
</div>
@endsection
