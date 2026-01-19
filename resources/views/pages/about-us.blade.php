@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_light_1')
    @include('components.pages.about-us.header_1_w_text_and_image_on_right')
    @include('components.pages.about-us.section_content_w_2_images_aside_of_icon_title_description')
    @include('components.pages.about-us.features_w_icons_and_text_on_left_gradient_title_and_text_on_right')
    @include('components.pages.about-us.features_w_6_cols_w_company_logos_title_text')
    @include('components.pages.about-us.header_2_w_waves_and_typed_text')
    @include('components.shared.footer')
@endsection
