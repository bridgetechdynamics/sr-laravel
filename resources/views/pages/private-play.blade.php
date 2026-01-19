@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_dark')
    @include('components.pages.private-play.navbar_light')
    @include('components.pages.private-play.header_5_w_text_and_illustration')
    @include('components.pages.private-play.pricing_5')
    @include('components.shared.faq')
    @include('components.pages.private-play.footer_4_dark_w_2_cols')
    @include('components.pages.private-play.header_2_w_waves_and_typed_text')
    @include('components.shared.footer_1_w_company_description_and_4_cols')
@endsection
