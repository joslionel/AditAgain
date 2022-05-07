@extends('layouts.nav')

@if (!empty($meta['title']))
    <title>AditAgain - {{ $meta['title']}} - Edit Profile</title>
@else
    <title>AditAgain - Edit Profile</title>
@endif

@section('top-section')
    
    <div class="container bg-black py-4">
        <h1 class="text-light">View and Edit Your Profile</h1>
        <br>
        <div class="row flex-md">
            
            <div class="col-3">
                
                <div class="row py-3">
                    <div class="flex-md"><p class="text-lead text-white">Name</p>
                        <button class="btn-md btn-primary">{{ $data->name }} <span class="badge bg-secondary">Edit</span></button>
                    </div>
                </div>
                
                <div class="row py-3">
                    <div class="flex-md"><p class="text-lead text-white">Username</p>
                        <button class="btn-md btn-primary">{{ $data->username }} <span class="badge bg-secondary">Edit</span></button>
                    </div>
                </div>

            </div>

            <div class="col-4">
                
                <div class="row py-3">
                    <div class="container">
                        <h3 class="text-light align-start">Headline</h3>
                        <p class="text-lead text-light">{{ $profile->headline }}</p>
                        <span class="badge bg-secondary">Edit</span>
                    </div>
                </div>

                <div class="row py-3">
                    <div class="container">
                        <h3 class="text-light align-start">Blurb</h3>
                        <p class="text-lead text-light">{{ $profile->description }}</p>
                        <span class="badge bg-secondary">Edit</span>
                    </div>
                </div>

            </div>
            
            <div class="col-4">
                
                <div class="row py-3">
                    <h1 class="text-light align-start">Profile Photo</h1>
                </div>
                @if (empty($profile->image_url))
                    <div class="row py-3">
                        <p class="text-white">NO PROFILE IMAGE</p>

                            <form method="POST" action="{{ Route('profile.store') }}">
                            
                            @csrf

                            <label for="profileImage" class="text-white">Upload Profile picture</label>
                            <input id="profileImage" type="file" class="text-white form-control-file @error('profileImage') is-invalid @enderror" name="profileImage" value="{{ old('profileImage') }}" required autofocus>
                            <input type="submit">

                                @error('profileImage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            {{-- <span>
                                
                                <input type="file" class="form-control-file text-white" id="profileImage" name="profileImage"><input type="submit">
                            </span> --}}
                        
                        </form>
                    </div>
                    @else
                    <div class="row py-3">
                        <p class="text-white">HERE IS IMAGE</p>
                    </div>
                @endif
                

            </div>

        </div>
        
        <div class="row flex-md">
            
            <div class="col-3">
                <p class="text-light">URL</p>
                <a href="{{$URL}}" class="btn btn-primary">{{ $profile->url }} <span class="badge bg-secondary">Edit</span></a>
            </div>

            <div class="col-4">
                <p class="text-light">Facebook</p>
                @if (!empty($profile->facebook))
                    <a href="{{ url($fbURL) }}" class="btn btn-primary">{{ $profile->facebook}} <span class="badge bg-secondary">Edit</span></a>
                    @else
                        <p class="text-lead text-white">No facebook profile</p>
                @endif
            </div>

            <div class="col-4">
                <p class="text-light">Youtube</p>
                @if (!empty($profile->youtube))
                    <a href="{{ url($ytURL) }}" class="btn btn-primary">{{ $profile->youtube}} <span class="badge bg-secondary">Edit</span></a>
                    @else
                        <p class="text-lead text-white">No YouTube channel - <span class="badge bg-secondary">Edit</span></p>
                @endif
            </div>

        </div>

    </div>

@endsection