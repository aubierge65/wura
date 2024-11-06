@extends('frontend.layouts.app')

@section('description')
@php
$data = metaData('jobs');
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
<form action="{{ route('website.job') }}" method="GET" id="job_search_form">
    {{-- job filtering --}}

    <div class="job-filter-overlay"></div>

    <div class="joblist-content">
        <div class="container">
            @if (!empty($popularTags) && count($popularTags))
                <x-website.job.job-sorting :popular-tags="$popularTags" />
            @endif

            <div class="row mt-5">
                <h5>{{ __('latest_jobs') }}</h5>

                <div class="row">
                    @forelse ($jobs as $job)
                        <div class="col-xl-4 col-md-6 fade-in-bottom rt-mb-24 cat-1 cat-3">
                            <x-website.job.job-card :job="$job" />
                        </div>
                    @empty
                        <div class="col-12" id="loading-spinner">
                            <div class="card text-center">
                                <x-not-found message="{{ __('no_data_found') }}" />
                            </div>
                        </div>
                    @endforelse
                    <div id="mix-job" class="row"></div>
                </div>
            </div>

        </div>
    </div>
</form>

<!-- Google AdSense area -->
@if (advertisementCode('home_page_center'))
    <div class="container my-4">
        {!! advertisementCode('home_page_center') !!}
    </div>
@endif
<!-- Google AdSense area end -->

<div class="rt-spacer-100 rt-spacer-md-50"></div>

@endsection
