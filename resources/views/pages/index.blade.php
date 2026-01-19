@extends('layouts.base')

@section('content')
    @include('components.pages.index.navbar_light')
    @include('components.pages.index.header_1_w_text_and_image_on_right')
    @include('components.pages.index.features_w_6_cols_w_company_logos_title_text')
    @include('components.pages.index.content_1_title_description_and_6_images')
    @include('components.shared.section_testimonials_2')
    @include('components.pages.index.features_w_image_on_left_title_text_3_cols_on_background')
    @include('components.pages.index.section_content_w_2_images_aside_of_icon_title_description')
    @include('components.pages.index.header_2_w_waves_and_typed_text')
    @include('components.shared.footer_1_w_company_description_and_4_cols')
@endsection
