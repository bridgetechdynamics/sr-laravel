@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_light_1')
    @include('components.shared.hero_1', [
        'title'   => 'Overview of Safari Run goes here', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'View Locations', 
        'cta_2'   => 'Contact Us',
    ])
    @include('components.shared.program_highlights')
    @include('components.shared.gallery_hero')
    @include('components.shared.section_testimonials_2')
    @include('components.shared.locations_hero')
    @include('components.pages.index.franchise_hero')
    @include('components.pages.index.header_2_w_waves_and_typed_text')
    @include('components.shared.footer')
@endsection
