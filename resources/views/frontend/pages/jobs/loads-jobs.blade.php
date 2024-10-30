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
    <x-website.job.job-filtering :countries="$countries" :categories="$categories" :job-roles="$job_roles" :min-salary="$min_salary"
        :currentCurrency="$current_currency" :max-salary="$max_salary" :experiences="$experiences" :educations="$educations" :job-types="$job_types" :total-jobs="$jobs->total()" />

    <div class="job-filter-overlay"></div>

    <div class="joblist-content">
        <div class="container">
            @if ($popularTags && count($popularTags))
            <x-website.job.job-sorting :popular-tags="$popularTags" />
            @endif

            <div class="row mt-5">
                <h5>{{ __('latest_jobs') }}</h5>

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

                @if (count($jobs) <= 9)
                <button id="load-more-button" data-page="1" data-id="{{ optional($jobs->last())->id }}"
                    class="newsButton btn btn-primary px-4 py-2 m-auto">{{ __('load_more') }}</button>
                @endif
            </div>
        </div>
    </div>
</form>
@endsection
