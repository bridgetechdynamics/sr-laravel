@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_dark')
    @include('components.pages.memberships.navbar_light')
    @include('components.pages.memberships.header_5_w_text_and_illustration')
    @include('components.pages.memberships.features_w_title_and_3_infos')
    @include('components.pages.memberships.pricing_8')
    @include('components.shared.faq')
    @include('components.pages.memberships.footer_4_dark_w_2_cols')
    @include('components.pages.memberships.header_2_w_waves_and_typed_text')
    @include('components.shared.footer_1_w_company_description_and_4_cols')
@endsection
