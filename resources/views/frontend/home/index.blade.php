@extends('frontend.layout.app')

@section('meta')
    <title>PFD Global</title>
@endsection

@section('css') @endsection


@section('content')
    @include('frontend.home.video')

    @include('frontend.home.about-pfd')


    @include('frontend.home.location-two')
    {{-- @include('frontend.home.location') --}}

    @include('frontend.home.manufacturing')

    @include('frontend.home.manufacturing-process')

    @include('frontend.home.clothing')

    @include('frontend.home.partner')

    @include('frontend.home.manufacturing-units')

    @include('frontend.home.certifications')

    @include('frontend.home.contact_form')
@endsection

@section('js') @endsection
