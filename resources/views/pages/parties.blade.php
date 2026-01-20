@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_dark')
    @include('components.shared.navbar_light_2')
    @include('components.shared.hero_1', [
        'title'   => 'Party overview hero', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Book Party', 
    ])
    @include('components.shared.pricing_banner')
    @include('components.shared.thin_banner', [
        'title'   => 'Header about taking a look at the party menu!', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Book Party', 
        'cta_2'   => 'Contact Us', 
    ])
    @include('components.shared.faq')
    @include('components.shared.thin_banner', [
        'title'   => 'Header about viewing policies and waivers', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Book Membership', 
        'cta_2'   => 'Contact Us', 
    ])
    @include('components.shared.bottom_header', [
        'title'   => 'Header about being ready to book a party!', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore.',
        'cta_1'   => 'Book Membership', 
    ])
    @include('components.shared.footer')
@endsection
