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
    @include('components.pages.index.content_1_title_description_and_6_images')
    @include('components.shared.section_testimonials_2')
    @include('components.pages.index.features_w_image_on_left_title_text_3_cols_on_background')
    @include('components.pages.index.section_content_w_2_images_aside_of_icon_title_description')
    @include('components.pages.index.header_2_w_waves_and_typed_text')
    @include('components.shared.footer')
@endsection
