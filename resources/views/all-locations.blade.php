@extends('layouts.base')

@section('content')
    @include('components.navbar_light_1')
    @include('components.locations_hero', ['title' => 'Locations'])
    @include('components.footer')
@endsection
