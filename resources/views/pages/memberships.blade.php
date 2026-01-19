@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_dark')
    @include('components.shared.navbar_light_2')
    @include('components.shared.hero_2', [
        'title'   => 'Overview on Memberships', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Sign Up', 
    ])
    @include('components.pages.memberships.features_w_title_and_3_infos')
    @include('components.pages.memberships.pricing_8')
    @include('components.shared.faq')
    @include('components.pages.memberships.footer_4_dark_w_2_cols')
    @include('components.pages.memberships.header_2_w_waves_and_typed_text')
    @include('components.shared.footer')
@endsection
