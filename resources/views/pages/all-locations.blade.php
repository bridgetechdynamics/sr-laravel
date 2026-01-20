@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_light_1')
    @include('components.shared.locations_hero', ['title' => 'Locations'])
    @include('components.shared.footer')
@endsection
