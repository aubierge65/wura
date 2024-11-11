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

  
    <section class="md:tw-py-20 tw-py-12">
        <div class="container">
            <div class="row md:tw-pb-12 tw-pb-8">
                <div class="col-12">
                    <div class="d-flex flex-wrap">
                        <div class="flex-grow-1">
                            <h4 class="text-center">
                                <span class="text-primary-700 tw-text-3xl has-title-shape">
                                    Coaching Entrevue de recrutement
                                    <img src="{{ asset('frontend') }}/assets/images/all-img/title-shape.png" alt="">
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 rt-mb-24">
                    <div class="single-price-table mb-4 mb-md-0 ">
                        <div class="price-header">
                            <h6 class="rt-mb-10">Argent</h6>

                            <div>
                                <span class="tw-text-[#0A65CC] tw-text-[36px] tw-leading-[44px] tw-font-medium">
                                    30 000 Fcfa
                                </span>
                            </div>
                        </div>
                        <div class="price-body">
                            <ul class="rt-list">
                                <li>
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Introduction aux bonnes pratiques pour réussir un entreien
                                    </span>
                                </li>

                                <li>
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Simulations d'entretien basiques
                                    </span>
                                    
                                </li>
                                <li>
                                    <span
                                    class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                    <span><b>Session d'une heure</b>
                                        </span>
                                </li>
                                <li>
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <span><b>Analyse du CV</b>
                                        </span>
                                </li>
                              
                                <li>
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <span>
                                        Techniques pour répondre aux questions difficiles
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Simulations d'entretien avec retour détaillé
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Analyse complète du parcours professionnel
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Techniques avancées pour gérer les questions pièges et les entretiens comportementaux
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Conseils pour la négociation salariale
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Gestion du stress et amélioration de la confiance en soi
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Coaching entièrement personnalisé selon les besoins du client
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Préparation pour des entretiens de hauts    niveaux (postes de direction ou internationaux)
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <button type="button" class="btn btn-primary-50 d-block">
                                <span class="button-content-wrapper ">
                                    <span class="button-icon align-icon-right">
                                        <i class="ph-arrow-right"></i>
                                    </span>
                                    <span class="button-text">
                                        Choisir
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 rt-mb-24">
                    <div class="single-price-table mb-4 mb-md-0 ">
                        <div class="price-header">
                            <h6 class="rt-mb-10">Bronze</h6>

                            <div>
                                <span class="tw-text-[#0A65CC] tw-text-[36px] tw-leading-[44px] tw-font-medium">
                                    60 000 Fcfa
                                </span>
                            </div>
                        </div>
                        <div class="price-body">
                            <ul class="rt-list">
                                <li>
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Introduction aux bonnes pratiques pour réussir un entreien
                                    </span>
                                </li>

                                <li>
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Simulations d'entretien basiques
                                    </span>
                                    
                                </li>
                                <li>
                                    <span
                                    class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                    <span><b>Trois sessions d'une heure</b>
                                        </span>
                                </li>
                                <li>
                                    <span
                                    class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                    <span><b>Analyse du CV</b>
                                        </span>
                                </li>
                              
                                <li>
                                    <span
                                    class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                    <span>
                                        Techniques pour répondre aux questions difficiles
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span
                                    class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                   
                                    <span>
                                        Simulations d'entretien avec retour détaillé
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Analyse complète du parcours professionnel
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Techniques avancées pour gérer les questions pièges et les entretiens comportementaux
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Conseils pour la négociation salariale
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Gestion du stress et amélioration de la confiance en soi
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Coaching entièrement personnalisé selon les besoins du client
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Préparation pour des entretiens de hauts    niveaux (postes de direction ou internationaux)
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <button type="button" class="btn btn-primary-50 d-block">
                                <span class="button-content-wrapper ">
                                    <span class="button-icon align-icon-right">
                                        <i class="ph-arrow-right"></i>
                                    </span>
                                    <span class="button-text">
                                        Choisir
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 rt-mb-24">
                    <div class="single-price-table mb-4 mb-md-0 ">
                        <div class="price-header">
                            <h6 class="rt-mb-10">Or</h6>

                            <div>
                                <span class="tw-text-[#0A65CC] tw-text-[36px] tw-leading-[44px] tw-font-medium">
                                    85 000 Fcfa
                                </span>
                            </div>
                        </div>
                        <div class="price-body">
                            <ul class="rt-list">
                                <li>
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Introduction aux bonnes pratiques pour réussir un entreien
                                    </span>
                                </li>

                                <li>
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Simulations d'entretien basiques
                                    </span>
                                    
                                </li>
                                <li>
                                    <span
                                    class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                    <span><b>Cinq sessions d'une heure</b>
                                        </span>
                                </li>
                                <li>
                                    <span
                                    class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                    <span><b>Analyse du CV</b>
                                        </span>
                                </li>
                              
                                <li>
                                    <span
                                    class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                    <span>
                                        Techniques pour répondre aux questions difficiles
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span
                                    class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                   
                                    <span>
                                        Simulations d'entretien avec retour détaillé
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Analyse complète du parcours professionnel
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Techniques avancées pour gérer les questions pièges et les entretiens comportementaux
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Conseils pour la négociation salariale
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Gestion du stress et amélioration de la confiance en soi
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Coaching entièrement personnalisé selon les besoins du client
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Préparation pour des entretiens de hauts    niveaux (postes de direction ou internationaux)
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <button type="button" class="btn btn-primary-50 d-block">
                                <span class="button-content-wrapper ">
                                    <span class="button-icon align-icon-right">
                                        <i class="ph-arrow-right"></i>
                                    </span>
                                    <span class="button-text">
                                        Choisir
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 rt-mb-24">
                    <div class="single-price-table mb-4 mb-md-0 ">
                        <div class="price-header">
                            <h6 class="rt-mb-10">Diamant</h6>

                            <div>
                                <span class="tw-text-[#0A65CC] tw-text-[36px] tw-leading-[44px] tw-font-medium">
                                    105 000 Fcfa
                                </span>
                            </div>
                        </div>
                        <div class="price-body">
                            <ul class="rt-list">
                                <li>
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Introduction aux bonnes pratiques pour réussir un entreien
                                    </span>
                                </li>

                                <li>
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Simulations d'entretien basiques
                                    </span>
                                    
                                </li>
                                <li>
                                    <span
                                    class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                    <span><b>Sept sessions d'une heure</b>
                                        </span>
                                </li>
                                <li>
                                    <span
                                    class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                    <span><b>Analyse du CV</b>
                                        </span>
                                </li>
                              
                                <li>
                                    <span
                                    class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                    <span>
                                        Techniques pour répondre aux questions difficiles
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span
                                    class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                   
                                    <span>
                                        Simulations d'entretien avec retour détaillé
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Analyse complète du parcours professionnel
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Techniques avancées pour gérer les questions pièges et les entretiens comportementaux
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Conseils pour la négociation salariale
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Gestion du stress et amélioration de la confiance en soi
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Coaching entièrement personnalisé selon les besoins du client
                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                   
                                    <span
                                        class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                   
                                    <span>
                                        Préparation pour des entretiens de hauts    niveaux (postes de direction ou internationaux)
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <button type="button" class="btn btn-primary-50 d-block">
                                <span class="button-content-wrapper ">
                                    <span class="button-icon align-icon-right">
                                        <i class="ph-arrow-right"></i>
                                    </span>
                                    <span class="button-text">
                                        Choisir
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="tw-bg-primary-50 md:tw-py-20 tw-py-12">
        <div class="container">
            <div class="row md:tw-pb-12 tw-pb-8">
                <div class="col-12">
                    <div class="d-flex flex-wrap">
                        <div class="flex-grow-1">
                            <h4 class="text-center">
                                <span class="text-primary-700 tw-text-3xl has-title-shape">
                                    Revues de CV
                                    <img src="{{ asset('frontend') }}/assets/images/all-img/title-shape.png" alt="">
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-start pt-4" style="height: 250px !important;">
                                <div class=" m-0">
                                    <h6 class="ps-3">Débutant</h6>
                                </div>
                                <hr class="m-0">
                                <div class=" card-body p-3">
                                    <ul class="rt-list">
                                        
                                        <li>
                                            <span>
                                                <b>Expérience:</b> 0 - 3 ans
                                            </span>

                                        </li>
                                        <li>
                                            <span>
                                                <b>Délai de livraison:</b> 24h - 7 jours
                                            </span>

                                        </li>
                                        <li>
                                            <span>
                                                <b>Montant standard:</b> 7 000 - 15 000 Fcfa
                                            </span>

                                        </li>
                                        <li>
                                            <span>
                                                <b>Montant adapté:</b> 10 000 - 18 000 Fcfa
                                            </span>

                                        </li>
                                    </ul>
                                </div>
                        
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary-50 d-block">
                                        <span class="button-content-wrapper ">
                                            <span class="button-icon align-icon-right">
                                                <i class="ph-arrow-right"></i>
                                            </span>
                                            <span class="button-text">
                                                Choisir
                                            </span>
                                        </span>
                                    </button>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-start pt-4" style="height: 250px !important;">
                                <div class=" m-0">
                                    <h6 class="ps-3">Intermédiaire</h6>
                                </div>
                                <hr class="m-0">
                                <div class=" card-body p-3">
                                    <ul class="rt-list">
                                        <li>
                                            <span>
                                                <b>Expérience:</b> 3 - 6 ans
                                            </span>

                                        </li>
                                        <li>
                                            <span>
                                                <b>Délai de livraison:</b> 24h - 7jours
                                            </span>

                                        </li>
                                        <li>
                                            <span>
                                                <b>Montant standard:</b> 10 000 - 18 000Fcfa
                                            </span>

                                        </li>
                                        <li>
                                            <span>
                                                <b>Montant adapté:</b> 13 000 -21 000Fcfa
                                            </span>

                                        </li>
                                    </ul>
                                </div>
                        
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary-50 d-block">
                                        <span class="button-content-wrapper ">
                                            <span class="button-icon align-icon-right">
                                                <i class="ph-arrow-right"></i>
                                            </span>
                                            <span class="button-text">
                                                Choisir
                                            </span>
                                        </span>
                                    </button>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-start pt-4" style="height: 250px !important;">
                                <div class=" m-0">
                                    <h6 class="ps-3">Sénior</h6>
                                </div>
                                <hr class="m-0">
                                <div class=" card-body p-3">
                                    <ul class="rt-list">
                                        <li>
                                            <span>
                                                <b>Expérience:</b> 6 - 10 ans
                                            </span>

                                        </li>
                                        
                                        <li>
                                            <span>
                                                <b>Délai de livraison:</b> 24h - 7jours
                                            </span>

                                        </li>
                                        <li>
                                            <span>
                                                <b>Montant standard:</b> 13 000 - 21 000Fcfa
                                            </span>

                                        </li>
                                        <li>
                                            <span>
                                                <b>Montant adapté:</b> 16 000 - 24 000Fcfa
                                            </span>

                                        </li>
                                    </ul>
                                </div>
                        
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary-50 d-block">
                                        <span class="button-content-wrapper ">
                                            <span class="button-icon align-icon-right">
                                                <i class="ph-arrow-right"></i>
                                            </span>
                                            <span class="button-text">
                                                Choisir
                                            </span>
                                        </span>
                                    </button>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card text-start pt-4" style="height: 250px !important;">
                                <div class=" m-0">
                                    <h6 class="ps-3">Expert</h6>
                                </div>
                                <hr class="m-0">
                                <div class=" card-body p-3">
                                    <ul class="rt-list">
                                        <li>
                                            <span>
                                                <b>Expérience:</b> 10 - 15 ans
                                            </span>

                                        </li>
                                        
                                        <li>
                                            <span>
                                                <b>Délai de livraison:</b> 24h - 7jours
                                            </span>

                                        </li>
                                        <li>
                                            <span>
                                                <b>Montant standard:</b> 16 000 - 24 000Fcfa
                                            </span>

                                        </li>
                                        <li>
                                            <span>
                                                <b>Montant adapté:</b> 19 000 - 27 000Fcfa
                                            </span>

                                        </li>
                                    </ul>
                                </div>
                        
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary-50 d-block">
                                        <span class="button-content-wrapper ">
                                            <span class="button-icon align-icon-right">
                                                <i class="ph-arrow-right"></i>
                                            </span>
                                            <span class="button-text">
                                                Choisir
                                            </span>
                                        </span>
                                    </button>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card text-start pt-4" style="height: 250px !important;">
                                <div class=" m-0">
                                    <h6 class="ps-3">Cadre Dirigeant</h6>
                                </div>
                                <hr class="m-0">
                                <div class=" card-body p-3">
                                    <ul class="rt-list">
                                        <li>
                                            <span>
                                                <b>Expérience:</b> Plus de 15 ans
                                            </span>

                                        </li>
                                        <li>
                                            <span>
                                                <b>Délai de livraison:</b> 24h - 7jours
                                            </span>

                                        </li>
                                        <li>
                                            <span>
                                                <b>Montant standard:</b> 19 000 - 27 000Fcfa
                                            </span>

                                        </li>
                                        <li>
                                            <span>
                                                <b>Montant adapté:</b> 21 000 - 30 000Fcfa
                                            </span>

                                        </li>
                                    </ul>
                                </div>
                        
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary-50 d-block">
                                        <span class="button-content-wrapper ">
                                            <span class="button-icon align-icon-right">
                                                <i class="ph-arrow-right"></i>
                                            </span>
                                            <span class="button-text">
                                                Choisir
                                            </span>
                                        </span>
                                    </button>
                                </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        .title-container {
            margin: 20px 0;
            padding: 35px;
        }

        .partners {
            margin: 10px 0;
            padding: 15px;
        }

        .brand-img-size {
            max-width: 100% !important;
            height: auto !important;
            max-width: 250px !important;
        }

        .breadcrumbs-custom {
            padding: 20px;
            background-color: var(--gray-50);
            transition: all 0.24s ease-in-out;
        }

        .paragraph {
            text-align: justify;
        }

        .statistic {
            gap: 5%;
        }

        .card {
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .col-lg-4,
        .col-md-6 {
            margin-bottom: 20px;
        }

        .card img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }

        @media (max-width: 576px) {
            .icon-72 {
                font-size: 40px;
            }

            .f-size-20 {
                font-size: 18px;
            }

            .f-size-14 {
                font-size: 12px;
            }

            .about-counter {
                flex-wrap: wrap;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .my-5 {
                margin-top: 30px !important;
                margin-bottom: 30px !important;
            }
        }

        @media (min-width: 992px) {
            .my-5 {
                margin-top: 50vh !important;
                margin-bottom: 50vh !important;
            }
        }
    </style>
@endsection
