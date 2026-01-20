@extends('layouts.base')

@section('content')
    @include('components.navbar_dark')
    @include('components.navbar_light_2')
    @include('components.hero_2', [
        'title'   => 'Overview on Memberships', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Sign Up', 
    ])
    @include('components.memberships.details')
    @include('components.memberships.pricing')
    @include('components.faq')
    @include('components.thin_banner', [
        'title'   => 'Header about viewing policies', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Contact Us', 
    ])
    @include('components.bottom_header', [
        'title'   => 'Header about signing up for a membership', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore.',
        'cta_1'   => 'Sign Up', 
    ])
    @include('components.footer')
@endsection
