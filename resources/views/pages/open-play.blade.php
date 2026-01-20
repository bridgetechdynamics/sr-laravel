@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_dark')
    @include('components.shared.navbar_light_2')
    @include('components.shared.hero_2', [
        'title'   => 'Open play overview', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Book Session', 
    ])
    @include('components.shared.plays_pricing', ['title' => 'Info about open plays and cost'])
    @include('components.shared.faq')
    @include('components.shared.thin_banner', [
        'title'   => 'Header about viewing policies and waivers', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Book Membership', 
        'cta_2'   => 'Contact Us', 
    ])
    @include('components.shared.bottom_header', [
        'title'   => 'Header about booking an open play', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore.',
        'cta_1'   => 'Book Session', 
    ])
    @include('components.shared.footer')
@endsection
