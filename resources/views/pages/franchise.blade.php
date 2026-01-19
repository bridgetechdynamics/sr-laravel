@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_light_1')
    @include('components.shared.hero_2', [
        'title'   => 'Overview of Franchise Opportunities', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Inquire', 
    ])
    @include('components.pages.franchise.section_content_w_2_images_aside_of_icon_title_description')
    @include('components.pages.franchise.application_project_5')
    @include('components.pages.franchise.header_2_w_waves_and_typed_text')
    @include('components.shared.footer')
@endsection
