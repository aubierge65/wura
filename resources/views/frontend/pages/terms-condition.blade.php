@extends('frontend.layouts.app')

@section('description')
@php
$data = metaData('terms-condition');
@endphp
{{ $data->description }}
@endsection
@section('og:image')
{{ asset($data->image) }}
@endsection
@section('title')
{{ $data->title }}
@endsection

@section('main')
<div class="breadcrumbs-custom breadcrumbs-height">
    <div class="container">
        <div class="breadcrumb-menu">
            <h6 class="f-size-18 m-0" style="display: inline-flex; align-items: center;">
                <i class="ph ph-arrow-right f-size-25" style="margin-right: 8px;"></i>
                {{ __('terms_conditions') }}
            </h6>
            <ul>
                <li><a href="{{ route('website.home') }}">{{ __('home') }}</a></li>
                <li>/</li>
                <li>{{ __('terms_conditions') }}</li>
            </ul>
        </div>
    </div>
</div>

<section class="terms-condition ">
    <div class="container">
        <div class="row">
            <div class=" col-lg-12 order-1 order-lg-0 rt-mb-lg-20">
                <div>
                    <div class="rt-spacer-50"></div>
                    <div class="body-font-3 text-gray-500 rt-mb-24">
                        {!! $terms_page == null ? $termscondition->terms_page : $terms_page !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Subscribe Newsletter --}}
<!-- <x-website.subscribe-newsletter /> -->
@endsection
@section('css')
<style>
    .breadcrumbs-custom {
        padding: 20px;
        background-color: var(--gray-50);
        transition: all 0.24s ease-in-out;
        height: 12vh;
    }
</style>
@endsection