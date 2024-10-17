@extends('frontend.layouts.app')

@section('description')
{{ strip_tags($job->description) }}
@endsection
@section('og:image')
@if ($job->company)
{{ $job->company->logo_url }}
@endif
@endsection
@section('title')
{{ $job->title }}
@endsection

@section('ld-data')
@php
$employment_type = App\Services\Jobs\GoogleJobPostingFormatter::formatJobType(optional($job->job_type)->slug ?? '');
$salary_type = App\Services\Jobs\GoogleJobPostingFormatter::formatSalaryType($job->salary_type->slug);
$currency = currentCurrencyCode();

$min_salary = $job->max_salary ? currencyConversion($job->max_salary, $currency) : 0;
$max_salary = $job->max_salary ? currencyConversion($job->max_salary, $currency) : 0;
@endphp


<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "JobPosting",
        "title": "{{ $job->title }}",
        "url": "{{ route('website.job.details', $job->slug) }}",
        "description": "{!! $job->description !!}",
        "identifier": {
            "@type": "PropertyValue",
            "name": "{{ optional(optional($job->company)->user)->name }}",
            "value": "{{ optional(optional($job->company)->user)->id }}"
        },
        "datePosted": "{{ $job->created_at }}",
        @if(!empty($job -> deadline))
        "validThrough": "{{ $job->deadline }}",
        @endif
        @if($job -> is_remote)
        "jobLocationType": "TELECOMMUTE"
        @endif
        @if(!empty($employment_type))
        "employmentType": "{{ $employment_type }}",
        @endif "hiringOrganization": {
            "@type": "Organization",
            "name": "{{ $job->company ? $job->company->user->name : 'JobPilot' }}",
            "sameAs": "https://www.google.com",
            "logo": "{{ $job->company ? $job->company->logo_url : '' }}"
        },
        "jobLocation": {
            "@type": "Place",
            "address": {
                "@type": "PostalAddress",
                @if(!empty($job->locality))
                "addressLocality": "{{ $job->locality }}",
                @endif
                @if(!empty($job->region))
                "addressRegion": "{{ $job->region }}",
                @endif
                @if(!empty($job->postcode))
                "postalCode": "{{ $job->postcode }}",
                @endif
                @if(!empty($job->country))
                "addressCountry": "{{ $job->country }}",
                @endif
            }
        },
        "baseSalary": {
            "@type": "MonetaryAmount",
            "currency": "USD",
            "value": {
                "@type": "QuantitativeValue",
                "minValue": {
                    {
                        $min_salary ?? 0
                    }
                },
                "maxValue": {
                    {
                        $max_salary ?? 0
                    }
                },
                @if(!empty($salary_type))
                "unitText": "{{ $salary_type }}"
                @endif
            }
        }
    }
</script>
@endsection

@section('main')

@php
$lat = $job->lat;
$long = $job->long;
@endphp
<!-- <div class="breadcrumbs breadcrumbs-height">
        <div class="container">
            <div class="breadcrumb-menu">
                <h6 class="f-size-18 m-0">
                    {{ __('job_details') }}
                </h6>
                <ul>
                    <li><a href="{{ route('website.home') }}">{{ __('home') }}</a></li>
                    <li>/</li>
                    <li>{{ __('job_details') }}</li>
                </ul>
            </div>
        </div>
    </div> -->
<!--Single job content Area-->
<div class="single-job-content h-auto pb-5">
    <div class="breadcrumbs-height job-details-title-box rt-pt-50 bg-white"
        style="background-image: url('{{ asset('frontend/assets/images/job-bg1.jpg') }}'); background-size: cover; background-position: center; height: 45vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="job-details-title-box-card jobcardStyle1 tw-pb-9">
                        @if ($job->status == 'pending')
                        @if ($job->waiting_for_edit_approval)
                        <div class="alert bg-warning" role="alert">
                            <strong>{{ __('your_corrections_are_pending_please_wait_for_admin_approved_to_modify_your_changes') }}</strong>
                        </div>
                        @else
                        <div class="alert bg-warning" role="alert">
                            <strong>{{ __('this_job_is_now_pending_please_wait_for_admin_approval') }}</strong>
                        </div>
                        @endif
                        @endif

                        <div class="tw-flex tw-items-center tw-justify-between tw-gap-4 tw-flex-col md:tw-flex-row"
                            style="margin-top:5%;">
                            <div class="tw-flex tw-items-center tw-gap-4 tw-flex-grow">
                                @if ($job->company)
                                <a href="{{ route('website.employe.details', $job->company->user->username) }}"
                                    class="!tw-flex-shrink-0">
                                    <img src="{{ $job->company->getLogoUrl() }}" alt="logo" draggable="false"
                                        style="width: 20vh;" class="tw-rounded-md object-cover">
                                </a>
                                @else
                                <svg style="width: 150px; height: 150px; color: black"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                                </svg>
                                @endif

                                <div class="tw-flex-grow">
                                    <div class="post-info2">
                                        <div class="post-main-title2 tw-text-primary-700">
                                            <h1 style="font-size: 35px;">
                                                {{ $job->title }}
                                            </h1>
                                        </div>
                                        <div class="tw-flex tw-flex-wrap tw-items-center tw-gap-2">

                                            <!-- <span class="tw-text-gray-600 tw-text-sm tw-flex tw-items-center">
                                                <i class="ph-map-pin f-size-30 text-primary-500"></i>
                                                {{ $job->country }}
                                            </span> -->
                                            <!-- Type d'emploi -->
                                            <span class="tw-text-gray-600 tw-text-sm tw-flex tw-items-center">
                                                <i class="ph-suitcase-simple f-size-30 text-primary-500"></i>
                                                {{ $job->job_type ? $job->job_type->name : '' }}
                                            </span>

                                            <!-- Depuis quand il a été publié -->
                                            <span class="tw-text-gray-600 tw-text-sm tw-flex tw-items-center">
                                                <i class="ph-calendar-blank f-size-30 text-primary-500"></i>
                                                Publié {{ $job->created_at->diffForHumans() }}
                                            </span>

                                            <!-- Salaire -->
                                            <!-- <span class="tw-text-gray-300 tw-text-sm tw-flex tw-items-center">
                                                <i class="ph-currency-dollar f-size-30 text-primary-500 tw-mr-2"></i>
                                                {{$job->min_salary}} - {{$job->max_salary}}
                                            </span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tw-flex !tw-items-start !tw-gap-2.5">
                                <div>
                                    @auth
                                    @if (auth()->user()->role == 'candidate')
                                    <a href="{{ route('website.job.bookmark', $job->slug) }}"
                                        class="bg-gray-10 text-primary-500 plain-button icon-56 hoverbg-primary-50">
                                        @if ($job->bookmarked)
                                        <x-svg.bookmark-icon width="24" height="24" fill="#0A65CC" stroke="#0A65CC" />
                                        @else
                                        <x-svg.unmark-icon />
                                        @endif
                                    </a>
                                    @else
                                    <button type="button"
                                        class=" bg-gray-10 text-primary-500 plain-button icon-56 hoverbg-primary-50 no_permission">
                                        <x-svg.unmark-icon />
                                    </button>
                                    @endif
                                    @else
                                    <button type="button"
                                        class="bg-gray-10 text-primary-500 plain-button icon-56 hoverbg-primary-50 login_required">
                                        <x-svg.unmark-icon />
                                    </button>
                                    @endauth
                                </div>
                                @if ($job->status == 'expired')
                                <button type="button" class="btn btn-danger btn-lg d-block">
                                    <span class="button-content-wrapper ">
                                        <span class="button-text">
                                            {{ __('expired') }}
                                        </span>
                                    </span>
                                </button>
                                @else
                                @if ($job->can_apply)
                                <div class="max-311">
                                    @if ($job->deadline_active)
                                    @auth('user')
                                    @if (auth()->user()->role == 'candidate')
                                    @if (!$job->applied)
                                    <button onclick="applyJobb({{ $job->id }} '{{ addslashes($job->title) }}')"
                                        class="btn btn-primary apply">
                                        <span class="button-content-wrapper">
                                            <span class="button-icon align-icon-right">
                                                <i class="ph-arrow-right"></i>
                                            </span>
                                            <span class="button-text">{{ __('apply_now') }}</span>
                                        </span>
                                    </button>


                                    @else
                                    <button type="button" class="d-block btn btn-success apply">
                                        <span class="button-content-wrapper ">
                                            <span class="button-text">
                                                {{ __('already_applied') }}
                                            </span>
                                        </span>
                                    </button>
                                    @endif
                                    @else
                                    <button type="button" class="btn btn-primary btn-lg d-block no_permission">
                                        <span class="button-content-wrapper ">
                                            <span class="button-icon align-icon-right"><i
                                                    class="ph-arrow-right"></i></span>
                                            <span class="button-text">{{ __('apply_now') }}</span>
                                        </span>
                                    </button>
                                    @endif
                                    @else
                                    <button type="button" class=" d-block btn btn-primary login_required">
                                        <span class="button-content-wrapper ">
                                            <span class="button-icon align-icon-right"><i
                                                    class="ph-arrow-right"></i></span>
                                            <span class="button-text">{{ __('apply_now') }}</span>
                                        </span>
                                    </button>
                                    @endauth
                                    <span class="d-block rt-pt-10 text-lg-end text-start f-size-14 text-gray-700 ">
                                        {{ __('job_expire') }}
                                        <span class="text-danger-500">
                                            {{ $job->days_remaining }}
                                        </span>
                                    </span>
                                    @else
                                    <button type="button" class="btn btn-danger btn-lg d-block">
                                        <span class="button-content-wrapper ">
                                            <span class="button-text">
                                                {{ __('expired') }}
                                            </span>
                                        </span>
                                    </button>
                                    @endif
                                </div>
                                @else
                                @if ($job->apply_on == 'custom_url')
                                <a href="{{ $job->apply_url }}" target="_blank" class="btn btn-primary btn-lg d-block">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                        <span class="button-text">{{ __('apply_now') }}</span>
                                    </span>
                                </a>
                                @else
                                <a href="mailto:{{ $job->apply_email }}" class="btn btn-primary btn-lg d-block">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                        <span class="button-text">{{ __('apply_now') }}</span>
                                    </span>
                                </a>
                                @endif
                                @endif
                                @endif
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- google adsense area -->
    @if (advertisement_status('job_detailpage_ad'))
    @if (advertisementCode('job_detailpage_fat_ad_header_section'))
    <div class="container my-4">
        {!! advertisementCode('job_detailpage_fat_ad_header_section') !!}
    </div>
    @endif
    @endif
    <!-- google adsense area end -->
    <div class="container tw-pt-8">
        <div class="row">
            <div class="col-lg-7 rt-mb-lg-30">
                <div class="body-font-1 ft-wt-5 rt-mb-20 tw-text-2xl">
                    {{ __('job_description') }}
                </div>
                <div class="job-desc">
                    {!! $job->description !!}
                </div>
                <!-- Ajouter Emplacement sur la Carte (Statique) -->
                <div class="body-font-1 ft-wt-5 rt-mb-20 tw-text-2xl">
                    {{ __('location') }}
                </div>
                <div class="job-desc">
                    <iframe
                        src="https://www.openstreetmap.org/export/embed.html?bbox=-180%2C-90%2C180%2C90&amp;layer=mapnik&amp;marker=0%2C0"
                        width="100%"
                        height="500"
                        style="border: 1px solid black">
                    </iframe>
                </div>
            </div>
            <div class="col-lg-5">
                <!--  <div class="p-32 border border-2 border-primary-50 rt-rounded-12 rt-mb-24 lg:max-536">
                     <div class="row">
                        @if (advertisement_status('job_detailpage_ad'))
                        @if (advertisement_status('job_detailpage_right_ad'))
                        @if (advertisementCode('job_detailpage_fat_ad_before_salary_section'))
                        <div class="container my-4">
                            {!! advertisementCode('job_detailpage_fat_ad_before_salary_section') !!}
                        </div>
                        @endif
                        @endif
                        @endif -->
                <!-- google adsense area end -->

                <!-- <div class="col-sm-6 salery tw-salery-border">
                            <h4>{{ __('salary') }}</h4>

                            @if ($job->salary_mode == 'range')
                            <h2>
                                {{$job->min_salary}} - {{$job->max_salary}} {{ currentCurrencyCode() }}
                            </h2>
                          @else
                            <h6 class="tw-text-center">{{ $job->custom_salary }}</h6>
                            @endif
                            <p>{{ $job->salary_type->name }} {{ __('based') }}</p>
                        </div> -->
                <!-- @if ($job->is_remote)
                        <div class="col-sm-6 job-type">
                            <div class="remote">
                                <div class="text-center tw-mb-2">
                                    <x-svg.briefcase-lg />
                                </div>
                                <h4 class="tw-mb-[2px]">{{ __('remote_job') }}</h4>
                                <p class="tw-mb-0">{{ __('worldwide') }}</p>
                            </div>
                        </div>
                        @else
                        <div class="col-sm-6 job-type">
                            <div class="remote">
                                <div class="text-center tw-mb-2">
                                    <x-svg.map-tripod-icon />
                                </div>
                                <h4 class="tw-mb-[2px]">{{ __('location') }}</h4>
                                <p class="tw-mb-0">
                                    {{ $job->exact_location ? $job->exact_location : $job->full_address }}
                                </p>
                            </div>
                        </div>
                        @endif 
                    </div>
                </div>-->
                @if ($job->benefits && count($job->benefits))
                <div class="p-32 border border-2 border-primary-50 rt-rounded-12 rt-mb-24 lg:max-536">
                    <div class="body-font-1 ft-wt-5 rt-mb-32 ">{{ __('job_benefits') }}</div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tw-flex tw-flex-wrap tw-gap-2">
                                @foreach ($job->benefits as $benefit)
                                <span
                                    class="text-capitalize tw-rounded-md tw-bg-green-50 tw-px-2 tw-py-1 tw-text-sm tw-font-medium tw-text-green-700 tw-ring-1 tw-ring-inset tw-ring-green-600/20">
                                    {{ $benefit->name }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <!-- google adsense area -->
                @if (advertisement_status('job_detailpage_ad'))
                @if (advertisement_status('job_detailpage_right_ad'))
                @if (advertisementCode('job_detailpage_fat_ad_after_jobbenefits_section'))
                <div class="container my-4">
                    {!! advertisementCode('job_detailpage_fat_ad_after_jobbenefits_section') !!}
                </div>
                @endif
                @endif
                @endif
                <!-- google adsense area end -->
                <div class="border border-2 border-primary-50 rt-rounded-12 rt-mb-24 lg:max-536">
                    <div class="tw-px-8 tw-pb-6 tw-pt-8">
                        <div class="body-font-1 ft-wt-5 rt-mb-32 f-size-20">{{ __('job_overview') }}</div>

                        <div class="row">
                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                            <i class="ph-calendar-blank f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            {{ __('job_posted') }}:
                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            {{ Carbon\Carbon::parse($job->created_at)->diffForHumans() }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            @if ($job->deadline_active)
                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                        <i class="ph-timer f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            {{ __('job_expire') }}:
                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            {{ $job->days_remaining }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                        <i class="ph-suitcase-simple f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            {{ __('job_type') }}
                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            {{ $job->job_type ? $job->job_type->name : '' }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                        <i class="ph-user f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            {{ __('job_role') }}
                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            {{ $job?->role?->name ?? '' }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            @if ($job->education)
                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                        <i class="ph-graduation-cap f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            {{ __('education') }}
                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            {{ $job->education ? $job->education->name : '' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if ($job->experience)
                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                        <i class="ph-clipboard-text f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            {{ __('experience') }}
                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            {{ $job->experience ? $job->experience->name : '' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if ($job->vacancies)
                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                        <i class="ph-users f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            {{ __('vacancies') }}
                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            {{ $job->vacancies }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="tw-share-area tw-px-8 tw-pt-6 tw-pb-8">
                        @if ($job->skills && count($job->skills))
                        <h2 class="tw-text-[#18191C] tw-text-lg tw-font-medium tw-mb-2">{{ __('skills') }}:</h2>
                        <div class="tw-flex tw-gap-2 tw-flex-wrap tw-items-center">
                            @foreach ($job->skills as $skill)
                            <a href="javascript:void(0)"
                                class="text-capitalize tw-rounded-md tw-bg-green-50 tw-px-2 tw-py-1 tw-text-sm tw-font-medium tw-text-green-700 tw-ring-1 tw-ring-inset tw-ring-green-600/20">
                                {{ $skill->name }}
                            </a>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <div class="tw-share-area tw-px-8 tw-pt-6 tw-pb-8">
                        @if ($job->tags && count($job->tags))
                        <h2 class="tw-text-[#18191C] tw-text-lg tw-font-medium tw-mb-2">{{ __('advantages') }}:</h2>
                        <div class="tw-flex tw-gap-2 tw-flex-wrap tw-items-center">
                            @foreach ($job->tags as $tag)
                            <a href="javascript:void(0)"
                                class="text-capitalize tw-rounded-md tw-bg-green-50 tw-px-2 tw-py-1 tw-text-sm tw-font-medium tw-text-green-700 tw-ring-1 tw-ring-inset tw-ring-green-600/20">
                                {{ $tag->name }}
                            </a>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <div class="tw-share-area tw-px-8 tw-pt-6 tw-pb-8">
                        @if ($job->tags && count($job->tags))
                        <h2 class="tw-text-[#18191C] tw-text-lg tw-font-medium tw-mb-2">{{ __('job_tags') }}:</h2>
                        <div class="tw-flex tw-gap-2 tw-flex-wrap tw-items-center">
                            @foreach ($job->tags as $tag)
                            <a href="javascript:void(0)"
                                class="text-capitalize tw-rounded-md tw-bg-green-50 tw-px-2 tw-py-1 tw-text-sm tw-font-medium tw-text-green-700 tw-ring-1 tw-ring-inset tw-ring-green-600/20">
                                {{ $tag->name }}
                            </a>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <div class="tw-share-area tw-px-8 tw-pt-6 tw-pb-8">
                        <h2 class="tw-text-[#18191C] tw-text-lg tw-font-medium tw-mb-2">{{ __('share_this_job') }}:
                        </h2>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="{{ url()->current() }}"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span
                                class="tw-text-primary-500 hover:tw-bg-primary-500 tw-cursor-pointer hover:tw-text-white tw-flex tw-gap-1.5 tw-items-center tw-text-base tw-font-medium tw-bg-[#E7F0FA] tw-px-4 tw-py-2 tw-rounded-[4px]"
                                onclick="copyUrl('{{ url()->current() }}')" id="basic-addon2">
                                <x-svg.link-sample-icon />
                            </span>
                        </div>
                        <ul class="tw-list-none tw-flex tw-flex-wrap tw-items-center tw-gap-2 tw-p-0 tw-m-0 tw-mb-6">
                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('{{ socialMediaShareLinks(url()->current(), 'facebook') }}')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-[#0A65CC] hover:tw-bg-[#0A65CC] hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <x-svg.new-facebook-icon />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('{{ socialMediaShareLinks(url()->current(), 'pinterest') }}')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-[#0A65CC] hover:tw-bg-[#0A65CC] hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <x-svg.pinterest-icon />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('{{ socialMediaShareLinks(url()->current(), 'twitter') }}')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-primary-500 hover:tw-bg-primary-500 hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <x-svg.new-twitter-icon />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('{{ socialMediaShareLinks(url()->current(), 'whatsapp') }}')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-primary-500 hover:tw-bg-primary-500 hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <x-svg.whatsapp-icon />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('{{ socialMediaShareLinks(url()->current(), 'linkedin')}}')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-primary-500 hover:tw-bg-primary-500 hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <x-svg.linkedin-icon />
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('{{ socialMediaShareLinks(url()->current(), 'mail')}}')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-primary-500 hover:tw-bg-primary-500 hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <x-svg.mail-icon />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('{{ socialMediaShareLinks(url()->current(), 'telegram')}}')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-primary-500 hover:tw-bg-primary-500 hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <x-svg.telegram-icon />
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('{{ socialMediaShareLinks(url()->current(), 'skype')}}')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-primary-500 hover:tw-bg-primary-500 hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <x-svg.skype-icon />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- google adsense area -->
                @if (advertisement_status('job_detailpage_ad'))
                @if (advertisement_status('job_detailpage_right_ad'))
                @if (advertisementCode('job_detailpage_fat_ad_after_share_section'))
                <div class="container my-4">
                    {!! advertisementCode('job_detailpage_fat_ad_after_share_section') !!}
                </div>
                @endif
                @endif
                @endif
                <!-- google adsense area end -->
                <div class="border border-2 border-primary-50 rt-rounded-12 rt-mb-24 lg:max-536">
                    <div class="body-font-1 ft-wt-5 custom-p">
                        {{ __('location') }} <br>
                        <p class="body-font-3">{{ $job->exact_location ? $job->exact_location : $job->full_address }}
                        </p>
                    </div>
                    <div>
                        @php
                        $map = $setting->default_map;
                        @endphp

                        @if ($map == 'google-map')
                        <div class="map mymap" id="google-map"></div>
                        @else
                        <div id="leaflet-map"></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if (count($related_jobs))
<div class="rt-spacer-100 rt-spacer-md-50"></div>
<!--Related jobs Area-->
<hr class="hr-0">
<section class="related-jobs-area rt-pt-100 rt-pt-md-50 mb-5">
    <div class="container">
        <h4>{{ __('related_jobs') }}</h4>
        <div class="rt-spacer-40 rt-spacer-md-20"></div>
        <div class="related-jobs pb-5">
            <div class="row">
                @foreach ($related_jobs as $job)
                <div class="col-12 col-md-6 col-xl-4 mb-3">
                    <x-website.job.job-card :job="$job" />
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

<!-- Apply Job Modal -->
<div class="modal fade" id="cvModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-transparent">
                <h5 class="modal-title" id="cvModalLabel">{{ __('job') }}: <span id="apply_job_title">Job
                        Title</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('website.job.apply', $job->slug) }}" method="POST">
                @csrf
                <div class="modal-body mt-3">
                    <input type="hidden" id="apply_job_id" name="id">
                    <div class="from-group">
                        <div class="tw-flex tw-justify-between tw-items-center">
                            <x-forms.label name="choose_resume" :required="true" />
                            <div class="tw-m-2">
                                <button onclick="resumeAddModal()" type="button"
                                    class=" tw-bg-white tw-tracking-wide tw-text-gray-800 tw-font-bold tw-rounded tw-border-b-2 tw-border-blue-500 hover:tw-border-blue-600 hover:tw-bg-blue-500 hover:tw-text-white tw-shadow-md tw-py-1.5 tw-px-6 tw-inline-flex tw-items-center">
                                    <span class="tw-mx-auto">Add Resume</span>
                                </button>
                            </div>
                        </div>
                        <select id="resume_id" class="rt-selectactive form-control w-100-p" name="resume_id">
                            <option value="">{{ __('select_one') }}</option>
                            @foreach ($resumes as $resume)
                            <option {{ old('resume_id') == $resume->id ? 'selected' : '' }} value="{{ $resume->id }}">
                                {{ $resume->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <x-forms.label name="cover_letter" :required="true" />
                        <textarea id="default" class="form-control @error('cover_letter') is-invalid @enderror"
                            name="cover_letter" rows="7">{{ old('cover_letter') }}</textarea>
                        @error('cover_letter')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    @php
                    $job->load('questions');

                    @endphp
                    @if ($questions->count() > 0)
                    <h5 class="modal-title mt-4" id="cvModalLabel">Client wants to know</h5>
                    @foreach ($questions as $question)
                    <div class="form-group mt-2 mb-2">
                        <x-forms.label :name="$question->title" :required="$question->required" />
                        <input type="text" class="form-control" name="question_{{ $question->id }}"
                            value="{{ old('question_' . $question->id) }}">

                    </div>
                    @endforeach
                    @endif

                </div>
                <div class="modal-footer border-transparent mt-4">
                    <button type="button" class="bg-priamry-50 btn btn-outline-primary" data-bs-dismiss="modal"
                        aria-label="Close">{{ __('cancel') }}</button>
                    <button type="submit" class="btn btn-primary btn-lg">
                        <span class="button-content-wrapper ">
                            <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                            <span class="button-text">
                                {{ __('apply_now') }}
                            </span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Add resume modal -->
    <x-website.candidate.add-resume-modal />
</div>
@endsection

@section('css')
<!-- >=>Leaflet Map<=< -->
<x-map.leaflet.map_links />
@include('map::links')

<style>
    .post-main-title2 h1 {
        font-size: 22px;
    }

    .max-311 {
        min-width: 70% !important;
    }

    .mymap {
        border-radius: 0 0 12px 12px;
    }

    .custom-p {
        padding-top: 24px;
        padding-bottom: 16px;
        padding-left: 24px
    }

    /* Sticky Job Details Title Heading Start */
    .job-details-title-box-card {
        border-bottom: 1px solid #f3f3f3;
    }

    .job-details-title-box {
        position: sticky;
        top: 0;
        z-index: 998 !important;
        margin-bottom: 0 !important;
    }

    .leaflet-container {
        position: relative;
        z-index: 900 !important;
    }

    /* Sticky Job Details Title Heading End */
</style>
@endsection

@section('script')
<script>
    function applyJobb(id, name) {
        $('#cvModal').modal('show');
        $('#apply_job_id').val(id);
        $('#apply_job_title').text(name);
    }

    function copyToClipboard(text) {
        var sampleTextarea = document.createElement("textarea");
        document.body.appendChild(sampleTextarea);
        sampleTextarea.value = text; //save main text in it
        sampleTextarea.select(); //select textarea contenrs
        document.execCommand("copy");
        document.body.removeChild(sampleTextarea);
    }

    function copyUrl(value) {
        copyToClipboard(value);
        alert('Copyied to clipboard')
    }
</script>
{{-- Leaflet  --}}
<x-map.leaflet.map_scripts />
<script>
    var oldlat = {
        !!$lat ? $lat : $setting - > default_lat!!
    };
    var oldlng = {
        !!$long ? $long : $setting - > default_long!!
    };

    // Map preview
    var element = document.getElementById('leaflet-map');

    // Height has to be set. You can do this in CSS too.
    element.style = 'height:300px;';

    // Create Leaflet map on map element.
    var leaflet_map = L.map(element);

    // Add OSM tile layer to the Leaflet map.
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(leaflet_map);

    // Target's GPS coordinates.
    var target = L.latLng(oldlat, oldlng);

    // Set map's center to target with zoom 14.
    const zoom = 7;
    leaflet_map.setView(target, zoom);

    // Place a marker on the same location.
    L.marker(target).addTo(leaflet_map);
</script>

<!-- ================ google map ============== -->
@if ($map == 'google-map')
<script>
    function initMap() {
        var token = "{{ $setting->google_map_key }}";

        const map = new google.maps.Map(document.getElementById("google-map"), {
            zoom: 7,
            center: {
                lat: oldlat,
                lng: oldlng
            },
        });

        const image =
            "https://gisgeography.com/wp-content/uploads/2018/01/map-marker-3-116x200.png";
        const beachMarker = new google.maps.Marker({

            draggable: false,
            position: {
                lat: oldlat,
                lng: oldlng
            },
            map,
            // icon: image
        });
    }
    window.initMap = initMap;
</script>

@php
$link1 = 'https://maps.googleapis.com/maps/api/js?key=';
$link2 = $setting->google_map_key;
$link3 = '&callback=initMap&libraries=places,geometry';
$scr = $link1 . $link2 . $link3;
@endphp

<script src="{{ $scr }}" async defer></script>
@endif
<!-- ================ google map ============== -->

<!-- for resume modal -->
<x-website.candidate.add-resume-modal-script />
@yield('child_js')
@endsection

<script>
    function openPopUp(link) {
        var popupWidth = 600;
        var popupHeight = 400;

        var left = (window.innerWidth - popupWidth) / 2 + window.screenX;
        var top = (window.innerHeight - popupHeight) / 2 + window.screenY;

        window.open(link, 'popup', 'width=' + popupWidth + ',height=' + popupHeight + ',left=' + left + ',top=' + top);

    }
</script>