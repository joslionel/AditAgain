@extends('layouts.nav')

@if (!empty($meta['title']))
    <title>AditAgain - {{ $meta['title']}} - Edit Profile</title>
@else
    <title>AditAgain - Edit Profile</title>
@endif
    


@section('top-section')
    
        <div class="container bg-black py-4">
            <h1 class="text-light">{{ Auth::user()->username }}'s profile</h1>
            <br>
            <div class="row flex-md">
            <div class="col-3">
                <div class="row py-3">
                    <div class="flex-md"><p class="text-lead text-white">Name</p>
                        <h2><span class="badge bg-primary">{{ $data->name }}</span></h2>
                    </div>
                </div>
                
                <div class="row py-3">
                    <div class="flex-md"><p class="text-lead text-white">Username</p>
                        <h2><span class="badge bg-primary">{{ $data->username }}</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row py-3">
                    <div class="container">
                        <h3 class="text-light align-start">Headline</h3>
                        <p class="text-lead text-light">{{ $profile->headline }}</p>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="container">
                        <h3 class="text-light align-start">Blurb</h3>
                        <p class="text-lead text-light">{{ $profile->description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row py-3">
                    <h1 class="text-light align-start">Profile Photo</h1>
                </div>
                
                <div class="row py-3">
                    
                    <img class="w-50 border rounded border-white" src="{{ Asset('images' . '/' . $profile->image_url)}}" alt="profile image">
                    
                </div>
            </div>
        </div>
        <div class="row flex-md">
            <div class="col-3">
                <p class="text-light">URL</p>
                <a href="{{$URL}}" class="btn btn-primary">{{ $profile->url }}</a>
            </div>
            <div class="col-4">
                <p class="text-light">Facebook</p>
                @if (!empty($profile->facebook))
                    <a href="{{ url($fbURL) }}" class="btn btn-primary">{{ $profile->facebook}}</a>
                    @else
                        <p class="text-lead text-white">No facebook profile</p>
                @endif
            </div>
            <div class="col-4">
                <p class="text-light">Youtube</p>
                @if (!empty($profile->youtube))
                    <a href="{{ url($ytURL) }}" class="btn btn-primary">{{ $profile->youtube}}</a>
                    @else
                        <p class="text-lead text-white">No YouTube channel</p>
                @endif
                
            </div>
        </div>
@endsection