@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_dark')
    @include('components.shared.navbar_light_2')
    @include('components.shared.hero_1', [
        'title'   => 'Party overview hero', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Book Party', 
    ])
    @include('components.pages.parties.pricing_4')
    @include('components.pages.parties.footer_4_dark_w_2_cols')
    @include('components.shared.faq')
    @include('components.pages.parties.footer_4_dark_w_2_cols')
    @include('components.pages.parties.header_2_w_waves_and_typed_text')
    @include('components.shared.footer')
@endsection
