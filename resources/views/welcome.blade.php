@extends('layouts.nav')

@section('title', 'Test')


@section('top-section')


        <section class="bg-black text-light p5-2 text-center text-sm-start">
            <div class="container">
                <div class="d-md-flex align-items-center justify-content-between">
                    <div>
                        <h2>
                        Mine Exploration Forum & Database For <span class="text-warning">Hobbyists & Historians</span></h2>
                        <p class="lead my-4">User submitted photographs and exploration notes</p>
                        <button class="btn btn-primary btn-lg">Sign up</button>
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
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn btn-primary">Visit Mine Page</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col border border-dark">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Mine Photo</h5>
                                      <p class="card-text">Some quick example text to build on the Mine Photo and make up the bulk of the card's content.</p>
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
                                      <p class="card-text">Some quick example text to build on the Mine Photo and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn btn-primary">Visit Mine Page</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col border border-dark">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Mine Photo</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                        <h2 class="">Recent Images</h2>
                    </div>
                    <div class="border border-dark col-md">
                        <h2 class="">Latest Forum Posts</h2>
                    </div>
                    <div class="border border-dark col-md">
                        <h2 class="">Something else</h2>
                    </div>
                </div>
            </div>
        </div>

        @endsection
    


