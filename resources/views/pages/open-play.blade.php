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
    @include('components.pages.open-play.footer_4_dark_w_2_cols')
    @include('components.pages.open-play.header_2_w_waves_and_typed_text')
    @include('components.shared.footer')
@endsection
