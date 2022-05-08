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
                        <button class="btn-md btn-primary">{{ $data->name }}</button>
                    </div>
                </div>
                
                <div class="row py-3">
                    <div class="flex-md"><p class="text-lead text-white">Username</p>
                        <button class="btn-md btn-primary">{{ $data->username }}</button>
                    </div>
                </div>

            </div>

            <div class="col-4">
                
                <div class="row py-3">
                    <div class="container">
                        <h3 class="text-light align-start">Headline</h3>
                        <p class="text-lead text-light">{{ $profile->headline }}</p>
                        
                        <a href="#changeHeadlineModal" data-bs-toggle="modal" data-bs-target="#changeHeadlineModal" class="badge bg-secondary">Edit</a>

                    </div>
                </div>

                

                <div class="row py-3">
                    <div class="container">
                        <h3 class="text-light align-start">Blurb</h3>
                        <p class="text-lead text-light">{{ $profile->description }}</p>
                        <a href="#changeBlurbModal" data-bs-toggle="modal" data-bs-target="#changeBlurbModal" class="badge bg-secondary">Edit</a>
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

                            <form name="profileImage" method="POST" action="{{ Route('profile.store') }}" enctype="multipart/form-data">
                            
                                @csrf

                                <label for="profileImage" class="text-white">Upload Profile picture</label>
                                <input id="profileImage" type="file" class="text-white form-control-file @error('profileImage') is-invalid @enderror" name="profileImage" value="{{ old('profileImage') }}" required autofocus>
                                <input type="submit">

                                    @error('profileImage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        
                            </form>
                    </div>
                
                @else
                    <div class="row py-3">
                        <img class="w-50 border rounded border-white" src="{{ Asset('images' . '/' . $profile->image_url)}}" alt="profile image">
                    </div>
                    
                    <div class="row py-3">
                    <form name="profileImage" method="POST" action="{{ Route('profile.store') }}" enctype="multipart/form-data">
                            
                        @csrf

                        <label for="profileImage" class="text-white">Change Profile picture</label>
                        <input id="profileImage" type="file" class="text-white form-control-file @error('profileImage') is-invalid @enderror" name="profileImage" value="{{ old('profileImage') }}" required autofocus>
                        <input type="submit">

                            @error('profileImage')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    
                    </form>
                    </div>
                @endif
                

            </div>

        </div>
        
        <div class="row flex-md">
            
            <div class="col-3">
                <p class="text-light">Homepage</p>
                    @if (!empty($profile->url))
                        <a href="{{ url($URL)  }}" class="btn btn-primary">{{ $profile->url }} </a> <span href="#changeURLModal" data-bs-toggle="modal" data-bs-target="#changeURLModal" class="mx-2 badge bg-secondary">Edit</span>
                    @else
                        <p class="text-white text-lead">No homepage set - <a href="" data-bs-toggle="modal" data-bs-target="changeURLModal" class="badge bg-secondary">Edit</a></p>
                    @endif
            </div>

            <div class="col-4">
                <p class="text-light">Facebook</p>
                    @if (!empty($profile->facebook))
                        <a href="{{ url($fbURL) }}" class="btn btn-primary">{{ $profile->facebook}} </a> <span href="#changeFacebookModal" data-bs-toggle="modal" data-bs-target="#changeFacebookModal" class="mx-2 badge bg-secondary">Edit</span>
                    @else
                        <p class="text-lead text-white">No facebook profile - <a href="#changeFacebookModal" data-bs-toggle="modal" data-bs-target="#changeFacebookModal" class="badge bg-secondary">Edit</a></p>
                    @endif
            </div>

            <div class="col-4">
                <p class="text-light">Youtube</p>
                    @if (!empty($profile->youtube))
                        <a href="{{ url($ytURL) }}" class="btn btn-primary">{{ $profile->youtube}}</a> <span href="#changeYTModal" data-bs-toggle="modal" data-bs-target="#changeYTModal" class="mx-2 badge bg-secondary">Edit</span>
                    @else
                        <p class="text-lead text-white">No YouTube channel - <a href="#changeYTModal" data-bs-toggle="modal" data-bs-target="#changeYTModal" class="badge bg-secondary">Edit</a></p>
                    @endif
            </div>

        </div>

    </div>


  
  <!-- Change Headline Modal -->
  <div class="modal" id="changeHeadlineModal" tabindex="-1" role="dialog" aria-labelledby="changeHeadlineModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changeHeadlineTitle">Change Headline</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <form action="{{ Route('profile.update') }}" method="POST">
          
            @csrf

            
              <div class="form-group">
                <input type="text" class="form-control" name="changeHeadline" placeholder="The dog, the dog, he's adit again" />
                {{-- <input type="submit"> --}}
              </div>  
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
          </form>

        </div>

            
          
          


        </div>
      </div>
    </div>
  </div>


  <!-- Change Blurb Modal -->
  <div class="modal" id="changeBlurbModal" tabindex="-1" role="dialog" aria-labelledby="changeBlurbModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changeBlurbTitle">Change Blurb</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
            <form id="bio" method="POST" action="{{  Route('profile.update')  }}" id="different">
                @csrf
                <div class="form-group">
                  
                    <label for="newProfileBlurb">Your bio</label>
                  <textarea form="bio" class="form-control" id="newProfileBlurb">Blah blah blah, all about me</textarea>
                  
                </div>
                
                <button type="submit" class="btn my-4 btn-primary">Submit</button>
              </form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Change URL Modal -->
  <div class="modal" id="changeURLModal" tabindex="-1" role="dialog" aria-labelledby="changeURLModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changeURLTitle">Change URL</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
            
            <form method="POST" action="{{  Route('profile.update')  }}" id="different">
                @csrf
                <div class="form-group">
                  
                    <label for="newProfileURL">URL</label>
                  <input type="url" class="form-control" id="newProfileURL" placeholder="Enter URL">
                  
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>



        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Change Facebook Modal -->
  <div class="modal" id="changeFacebookModal" tabindex="-1" role="dialog" aria-labelledby="changeFacebookModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changeFBTitle">Change Facebook URL</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <form method="POST" action="{{  Route('profile.update')  }}" id="different">
                @csrf
                <div class="form-group">
                  
                    <label for="newProfileFB">Facebook Profile</label>
                  <input type="url" class="form-control" id="newProfileFB" placeholder="facebook.com/yourusername">
                  
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Change YT Modal -->
  <div class="modal" id="changeYTModal" tabindex="-1" role="dialog" aria-labelledby="changeYTModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changeYTTitle">Change YouTube URL</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <form method="POST" action="{{  Route('profile.update')  }}" id="different">
                @csrf
                <div class="form-group">
                  
                    <label for="newProfileYT">Youtube channel</label>
                  <input type="url" class="form-control" id="newProfileYT" placeholder="Your Youtube channel address">
                  
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@endsection