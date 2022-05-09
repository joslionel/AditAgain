<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
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
        // validate the request
        $request->validate([
            'profileImage' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);
        
        // create image name variable
        $newImageName = auth()->user()->username . time() . 'ProfilePhoto.' . $request->profileImage->extension();
        
        // remove old profile image file if exists
        if (!empty(auth()->user()->profile->image_url)) {
            
            unlink(storage_path('app/public/images/') . auth()->user()->profile->image_url);
        
        }

        // store the image from the request

        $request->file('profileImage')->storeAs('public/images', $newImageName);

        // update the database with the new image page

        auth()->user()->profile->update(
            [ 'image_url' => $newImageName,]
            );
        
    
        // return user to the profile page
        return redirect('/profile');
    
    }
    
    
    public function update(Request $request)
     {
        // determine which field is to be updated using a switch statement on a hidden 'fieldToChange' field in the form
        switch ($request->fieldToChange) {
            case 'headline':
                $request->validate([
                        'changeHeadline' => ['required', 'string', 'max:112',]
                ]);

                auth()->user()->profile->update([
                                'headline' => $request->changeHeadline,
                                ]);        
                
                return Redirect::back();
                 
                break;
                
            case 'bio':
                $request->validate([
                    'changeBio' => ['required', 'string', 'max:255',]
                ]);
                
                auth()->user()->profile->update([
                    'description' => $request->changeBio,

                ]);
                
                return Redirect::back();
                
                break;

            case 'URL':
                
                $request->validate([
                    'changeURL' => ['required', 'string',]
                ]);

                auth()->user()->profile->update([
                    'url' => $request->changeURL,
                ]);

                return Redirect::back();
                
                break; 
            case 'FB':
                
                $request->validate([
                    'changeFB' => ['required', 'string',]
                ]);
                
                auth()->user()->profile->update([
                    'facebook' => $request->changeFB,
                ]);

                return Redirect::back();

                break;
            case 'YT':
                
                $request->validate([
                    'changeYT' => ['required', 'string',]
                ]);

                auth()->user()->profile->update([
                    'youtube' => $request->changeYT,
                ]);

                return Redirect::back();

                break;
                
            default:
                return redirect('/profile');
                break;
         }
        
     }
}
