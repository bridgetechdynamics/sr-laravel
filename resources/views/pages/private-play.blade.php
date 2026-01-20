@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_dark')
    @include('components.shared.navbar_light_2')
    @include('components.shared.hero_2', [
        'title'   => 'Private play overview', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Book Session', 
    ])
    @include('components.shared.plays_pricing', ['title' => 'Info about private plays and cost'])
    @include('components.shared.faq')
    @include('components.pages.private-play.footer_4_dark_w_2_cols')
    @include('components.pages.private-play.header_2_w_waves_and_typed_text')
    @include('components.shared.footer')
@endsection
