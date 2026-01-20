@extends('layouts.base')

@section('content')
    @include('components.navbar_light_1')
    @include('components.hero_1', [
        'title'   => 'About Safari Run header', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'View Locations', 
        'cta_2'   => 'Contact Us',
    ])
    @include('components.about-us.history')
    @include('components.about-us.facility')
    @include('components.about-us.attractions')
    @include('components.bottom_header', [
        'title'   => 'Header about finding a Safari Run near you', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore.',
        'cta_1'   => 'View Locations', 
        'cta_2'   => 'Contact Us',
    ])
    @include('components.footer')
@endsection
