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
                    </div>
                    <div class="border border-dark col-md-4">
                        <h2 class="">Search the database</h2>
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
    


