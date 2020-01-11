<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use \App\User;

class ProfilesController extends Controller
{
    public function index($user){
        $user = User::findOrFail($user);
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        //dd($follows);

        $postsCount = Cache::remember('count.posts'.$user->id,
            now()->addSeconds(30),
            function() use ($user){
                return $user->posts->count();
            }
        );

        $followersCount = Cache::remember('count.followers'.$user->id,
            now()->addSeconds(30),
            function() use ($user){
                return $user->profile->followers->count();
            }
        );
        
        
        $followingCount = Cache::remember('count.following'.$user->id,
            now()->addSeconds(30),
            function() use ($user){
                return $user->following->count();
            }
        );
        
        
        return view('profiles.index',
            compact('user','follows','postsCount','followersCount','followingCount')
        );
    }

    public function edit(User $user){
        $this->authorize('update',$user->profile);

        return view('profiles.edit',compact('user'));
    }

    public function update(User $user){
        $this->authorize('update',$user->profile);
        
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => ''
        ]);

        if(request('image')){
            $imgPath = request('image')->store('profile','public');

            $imgArray = ['image'=>$imgPath];
        }

        auth()->user()->profile->update(
            array_merge(
                $data,
                $imgArray ?? []
            )
        );

        return redirect("/profile/{$user->id}");
    }
}