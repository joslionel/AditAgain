@extends('layouts.nav')

@section('title', 'User Profile - ')

@section('top-section')
<div class="container bg-black py-4">
    <h1 class="text-light">{{ Auth::user()->username }}'s profile</h1>
</div>
@endsection