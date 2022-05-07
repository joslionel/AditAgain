@extends('layouts.nav')

@section('title', 'Home')


@section('top-section')


        <section class="bg-black text-light p5-2 text-center text-sm-start">
            <div class="container">
                <div class="d-md-flex align-items-center justify-content-between">
                    <div>
                        <h2>
                        Mine Exploration Forum & Database For <span class="text-warning">Hobbyists & Historians</span></h2>
                        <p class="lead my-4">User submitted photographs and exploration notes</p>
                        @if (Route::has('login'))
                        
                        @auth
                        <span class="hidden"><a href="/forum" class="btn btn-primary btn-lg">Forum</a>
                        <a href="/mines" class="btn btn-warning btn-lg">Browse Database</a></span>
                        
                        @else
                        <span><a href="/register" class="btn btn-primary btn-lg">Sign up</a>
                          <a href="/login" class="btn btn-primary btn-lg">Login</a></span>
                        @endauth
                        @endif
                      </div>
                    <img class="img-fluid d-none d-sm-block" src="{{asset('assets/img/mf-wf.jpg')}}">
                </div>

            </div>
        </section>
        @endsection
        
    
@section('body-section')
        <div class="container py-4">
            <div class="flex-md">
                <div class="row">

                    <div class="border border-dark col-md-8">
                        <h2 class="">Top Voted Images</h2>
                        <div class="row g-2">
                            <div class="col border border-dark">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Mine 1</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><span class="badge bg-primary rounded-pill">7 likes</span>
                                      <a href="#" class="btn btn-primary">Visit Mine Page</a>
                                      
                                    </div>
                                  </div>
                            </div>
                            <div class="col border border-dark">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Mine Photo</h5>
                                      <p class="card-text">Some quick example text to build on the Mine Photo and make up the bulk of the card's content.</p><span class="badge bg-primary rounded-pill">10 likes</span>
                                      <a href="#" class="btn btn-primary">Visit Mine Page</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col border border-dark">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Mine Photo</h5>
                                      <p class="card-text">Some quick example text to build on the Mine Photo and make up the bulk of the card's content.</p><span class="badge bg-primary rounded-pill">9 likes</span>
                                      <a href="#" class="btn btn-primary">Visit Mine Page</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col border border-dark">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Mine Photo</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><span class="badge bg-primary rounded-pill">8 likes</span>
                                      <a href="#" class="btn btn-primary">Visit Mine Page</a>
                                    </div>
                                  </div>
                            </div>
                        </div>    
                    </div>
                    
                    <div class="border border-dark col-md-4">

                        <h2 class="">Search the database</h2>

                        <div class="input-group mb-3 pb-1">
                            <input type="text" class="form-control" placeholder="Cwmystwyth" aria-label="Mine name" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                          </div>
                    </div>

                </div>
            </div>
            <div class="flex-md">
                <div class="row">
                    <div class="border border-dark col-md">
                        <h2 class="">Most Recent Image</h2>
                        <div class="row">
                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Most Recent Mine Photo</h5>
                                  <p class="card-text">Most recent photo to be submitted.</p>
                                  <a href="#" class="btn btn-primary">Visit Mine Page</a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="border border-dark col-md">
                        <h2 class="">Latest Forum Posts</h2>
                        <div class="row">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Post 1</div>
                                    Preview of post
                                  </div>
                                  <span class="badge bg-primary rounded-pill">14 Replies</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Post 2</div>
                                    Preview text
                                  </div>
                                  <span class="badge bg-primary rounded-pill">0 replies</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Post 3</div>
                                    Some more extract from the post
                                  </div>
                                  <span class="badge bg-primary rounded-pill">9 Replies</span>
                                </li>
                              </ol>
                        </div>
                    </div>
                    <div class="border border-dark col-md">
                        <h2 class="">Something else</h2>
                    </div>
                </div>
            </div>
        </div>

        @endsection
    


