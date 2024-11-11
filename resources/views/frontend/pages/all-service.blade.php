@extends('frontend.layouts.app')

@section('description')
Service
@endsection
@section('og:image')
@endsection
@section('title')
Services
@endsection

@section('main')
<!-- About banner area  start -->

<div class="tw-w-full tw-bg-primary breadcrumbs-custom breadcrumbs-height">
    <div class="container">
        <div class="row align-items-center breadcrumbs-height">
            <div class="col-12 justify-content-center text-center">
                <div class="breadcrumb-title rt-mb-10">Nos services</div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('website.home') }}">{{ __('home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nos services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection