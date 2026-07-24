@extends('layouts.app')

@section('title', 'Home')

@section('content')

@include('components.home.hero')

@include('components.home.brands')

@include('components.home.features')

@include('components.home.why-us')

@include('components.home.how-it-works')

@include('components.home.testimonials')

@include('components.home.cta')

@endsection