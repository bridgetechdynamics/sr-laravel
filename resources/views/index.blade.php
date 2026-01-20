@extends('layouts.base')

@section('content')
    @include('components.navbar_light_1')
    @include('components.hero_1', [
        'title'   => 'Overview of Safari Run goes here', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'View Locations', 
        'cta_2'   => 'Contact Us',
    ])
    @include('components.program_highlights')
    @include('components.gallery_hero')
    @include('components.testimonials')
    @include('components.locations_hero', ['title' => 'Locations'])
    @include('components.franchise_hero')
    @include('components.bottom_header', [
        'title'   => 'Header about finding a Safari Run near you', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore.',
        'cta_1'   => 'View Locations', 
        'cta_2'   => 'Contact Us',
    ])
    @include('components.footer')
@endsection
