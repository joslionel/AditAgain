<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{   
    // profiles are only available if you're logged in
    public function __construct()
    {
   
        $this->middleware('auth');
    }

    
    // this will show anyone's profile
    public function show($user) 
    {
        $data = User::findOrFail($user);
        $profile = $data->profile;
        $fbURL = "https://" . $profile->facebook;
        $ytURL = "https://" . $profile->youtube;
        $URL = "https://" . $profile->url;
        
        $meta['title'] = $data->name;
        return view('user.profile', compact('data', 'meta', 'profile', 'URL', 'fbURL', 'ytURL'));
        
        //return 'view a profile';
    }

    // this shows the edit profile/own profile page
    public function index()
    {
        $user = Auth::user();
        $meta['title'] = $user->username;
        
        
        $data = $user;
        $profile = $data->profile;
        $fbURL = "https://" . $profile->facebook;
        $ytURL = "https://" . $profile->youtube;
        $URL = "https://" . $profile->url;
        
        $meta['title'] = $data->name;
        return view('user.editprofile', compact('data', 'meta', 'profile', 'URL', 'fbURL', 'ytURL'));

 
        
    }

    public function store(Request $request)
    {
        // dd($request);

        $data = $request->validate([
            'profileImage' => ['required', 'image']
        ]);
        
        dd($data);

    }
}
