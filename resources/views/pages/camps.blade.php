@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_dark')
    @include('components.shared.navbar_light_2')
    @include('components.pages.camps.header_1_w_text_and_image_on_right')
    @include('components.pages.camps.section_content_w_2_images_aside_of_icon_title_description')
    @include('components.pages.camps.teams_1')
    @include('components.pages.camps.pricing_w_2_cards_nav_tabs')
    @include('components.shared.faq')
    @include('components.pages.camps.footer_4_dark_w_2_cols')
    @include('components.pages.camps.header_2_w_waves_and_typed_text')
    @include('components.shared.footer')
@endsection
