@extends('layouts.app') {{-- Master Layout --}}

@section('title', 'Selamat Datang di Home Page')

@section('content')

    {{-- hero --}}
    @include('components.hero')

    {{-- stats --}}
    @include('components.stats')

    {{-- features --}}
    @include('components.features')

    {{-- plan --}}
    @include('components.plan')
    
    {{-- map --}}
    @include('components.map')

    {{-- testimonials --}}
    @include('components.testimonials')

    {{-- testimonials --}}
    @include('components.subscribe')
@endsection