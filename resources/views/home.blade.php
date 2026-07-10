@extends('layouts.app')

@section('title', 'Barkat Ali | Laravel Backend Developer')

@section('content')

    {{-- =========================
        Hero Section
    ========================== --}}
    @include('sections.hero')

    {{-- =========================
        About Section
    ========================== --}}
    @include('sections.about')

    {{-- =========================
        Services Section
    ========================== --}}
    @include('sections.services')

    {{-- =========================
        Skills Section
    ========================== --}}
    @include('sections.skills')

    {{-- =========================
        Projects Section
    ========================== --}}
    @include('sections.projects')

    {{-- =========================
        Contact Section
    ========================== --}}
    @include('sections.contact')

@endsection