@extends('layouts.base')

@section('content')
    @include('components.navbar_dark')
    @include('components.navbar_light_2')
    @include('components.hero_1', [
        'title'   => 'Fitness overview hero', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Book Now', 
    ])
    @include('components.fitness.details')
    @include('components.weekly_topic_sessions', ['title' => 'Weekly Topics Session 1'])
    @include('components.weekly_topic_sessions', ['title' => 'Weekly Topics Session 2'])
    @include('components.weekly_topic_sessions', ['title' => 'Weekly Topics Session 3'])
    @include('components.faq')
    @include('components.thin_banner', [
        'title'   => 'Header about viewing policies and waivers', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Book Now', 
        'cta_2'   => 'Contact Us', 
    ])
    @include('components.bottom_header', [
        'title'   => 'Header about booking fitness classes', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore.',
        'cta_1'   => 'Book Now', 
    ])
    @include('components.footer')
@endsection
