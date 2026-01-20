@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_dark')
    @include('components.shared.navbar_light_2')
    @include('components.pages.location.promo_banner')
    @include('components.shared.hero_1', [
        'title'   => 'Overview of Location goes here', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Book Membership', 
        'cta_2'   => 'Book a Party',
    ])
    @include('components.shared.contact_hero')
    @include('components.pages.location.section_content_w_2_images_aside_of_icon_title_description')
    @include('components.shared.program_highlights')
    @include('components.shared.testimonials')
    @include('components.shared.gallery_hero')
    @include('components.pages.location.features_w_image_on_left_title_text_3_cols_on_background')
    @include('components.pages.location.header_2_w_waves_and_typed_text')
    @include('components.shared.footer')
@endsection
