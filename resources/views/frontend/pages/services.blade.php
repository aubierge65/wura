@extends('frontend.layouts.app')

@section('description')
Services Professionnels
@endsection
@section('og:image')
@endsection
@section('title')
Services Professionnels
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
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
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
                                    Préparation pour des entretiens de hauts niveaux (postes de direction ou internationaux)
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <button type="button" class="btn btn-primary-50 d-block"
                            data-plan="Argent"
                            data-service="Entrevue-argent"
                            data-amount="30000 FCFA"
                            onclick="openEntrevueModal(this)">
                            <span class="button-content-wrapper">
                                <span class="button-icon align-icon-right">
                                    <i class="ph-arrow-right"></i>
                                </span>
                                <span class="button-text">Choisir</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
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
                                    Préparation pour des entretiens de hauts niveaux (postes de direction ou internationaux)
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <button type="button" class="btn btn-primary-50 d-block"
                            data-plan="Bronze"
                            data-service="Entrevue-bronze"
                            data-amount="60000 FCFA"
                            onclick="openEntrevueModal(this)">
                            <span class="button-content-wrapper">
                                <span class="button-icon align-icon-right">
                                    <i class="ph-arrow-right"></i>
                                </span>
                                <span class="button-text">Choisir</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
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
                                    Préparation pour des entretiens de hauts niveaux (postes de direction ou internationaux)
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <button type="button" class="btn btn-primary-50 d-block"
                            data-plan="Or"
                            data-service="Entrevue-or"
                            data-amount="85000 FCFA"
                            onclick="openEntrevueModal(this)">
                            <span class="button-content-wrapper">
                                <span class="button-icon align-icon-right">
                                    <i class="ph-arrow-right"></i>
                                </span>
                                <span class="button-text">Choisir</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
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
                                    Préparation pour des entretiens de hauts niveaux (postes de direction ou internationaux)
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <button type="button" class="btn btn-primary-50 d-block"
                            data-plan="Diament"
                            data-service="Entrevue-diamant"
                            data-amount="105000 FCFA"
                            onclick="openEntrevueModal(this)">
                            <span class="button-content-wrapper">
                                <span class="button-icon align-icon-right">
                                    <i class="ph-arrow-right"></i>
                                </span>
                                <span class="button-text">Choisir</span>
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
                            <button type="button" class="btn btn-primary-50 d-block"
                                data-level="debutant"
                                data-service="cv-debutant"
                                onclick="selectCard(this)">
                                <span class="button-content-wrapper">
                                    <span class="button-icon align-icon-right">
                                        <i class="ph-arrow-right"></i>
                                    </span>
                                    <span class="button-text">Choisir</span>
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
                            <button type="button" class="btn btn-primary-50 d-block"
                                data-level="intermediaire"
                                data-service="cv-intermediaire"
                                onclick="selectCard(this)">
                                <span class="button-content-wrapper">
                                    <span class="button-icon align-icon-right">
                                        <i class="ph-arrow-right"></i>
                                    </span>
                                    <span class="button-text">Choisir</span>
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
                            <button type="button" class="btn btn-primary-50 d-block"
                                data-level="senior"
                                data-service="cv-senior"
                                onclick="selectCard(this)">
                                <span class="button-content-wrapper">
                                    <span class="button-icon align-icon-right">
                                        <i class="ph-arrow-right"></i>
                                    </span>
                                    <span class="button-text">Choisir</span>
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
                            <button type="button" class="btn btn-primary-50 d-block"
                                data-level="expert"
                                data-service="cv-expert"
                                onclick="selectCard(this)">
                                <span class="button-content-wrapper">
                                    <span class="button-icon align-icon-right">
                                        <i class="ph-arrow-right"></i>
                                    </span>
                                    <span class="button-text">Choisir</span>
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
                            <button type="button" class="btn btn-primary-50 d-block"
                                data-level="dirigeant"
                                data-service="cv-dirigeant"
                                onclick="selectCard(this)">
                                <span class="button-content-wrapper">
                                    <span class="button-icon align-icon-right">
                                        <i class="ph-arrow-right"></i>
                                    </span>
                                    <span class="button-text">Choisir</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="entrevueModal" tabindex="-1" aria-labelledby="entrevueModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="entrevueModalLabel">Informations de Contact</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="contactEntrevueForm">
                    <input type="hidden" id="plan" name="plan">
                    <input type="hidden" id="amount" name="amount">
                    <input type="hidden" id="service_name" name="service_name">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom et Prénom(s) <span style="color:red!important;">*</span></label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse Email <span style="color:red!important;">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Numéro de Téléphone <span style="color:red!important;">*</span></label>
                        <input type="tel" class="form-control" id="contact" name="contact" required>
                    </div>

                    <!-- Nouvelle question avec les boutons radio sur la même ligne -->
                    <div class="mb-3">
                        <label for="psychometric_test" class="form-label">Voulez-vous Préparation aux tests psychométriques et techniques ?(+ 24999 FCFA)</label>
                        <div class="d-inline-block me-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="psychometric_test" id="psychometric_test_oui" value="oui">
                                <label class="form-check-label" for="psychometric_test_oui">Oui</label>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="psychometric_test" id="psychometric_test_non" value="non">
                                <label class="form-check-label" for="psychometric_test_non">Non</label>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary" id="payButton" onclick="initiatePayment()">Payer maintenant</button>
            </div>
        </div>
    </div>
</div>

<!-- Premier Modal pour les Options -->
<div class="modal fade" id="optionsModal" tabindex="-1" aria-labelledby="optionsModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 13vh;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="optionsModalLabel">Options supplémentaires</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="extraOptionsForm">
                    @csrf
                    <div class="mb-3">
                        <h5 class="form-label font-weight-bold">Quel type de montant préférez-vous ?</h5>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="priceOption" value="standard" id="standardPrice" checked>
                                <label class="form-check-label" for="standardPrice">Montant standard</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="priceOption" value="adapted" id="adaptedPrice">
                                <label class="form-check-label" for="adaptedPrice">Adapataion à une offre</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5 for="deliveryTime" class="form-label">Choisissez un délai de livraison</h5>
                        <select class="form-select" id="deliveryTime">
                            <option value="24h">24 heures</option>
                            <option value="72h">72 heures</option>
                            <option value="7days">7 jours</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="75" id="englishTranslation">
                        <label class="form-check-label" for="englishTranslation">
                            Traduction en Anglais : +75% du prix de la prestation
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="50" id="modifiableVersion">
                        <label class="form-check-label" for="modifiableVersion">
                            Livraison du CV en Version modifiable (Word) : +50% du prix de la prestation
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="5000" id="motivationLetter">
                        <label class="form-check-label" for="motivationLetter">
                            Lettre de motivation : 5.000 FCFA
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="50" id="designCustomization">
                        <label class="form-check-label" for="designCustomization">
                            Personnalisation du design : +50% du prix de la prestation
                        </label>
                    </div>
                </form>

                <div class="mt-3 text-center">
                    <h5>Total : <span id="totalAmount">0 FCFA</span></h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary" onclick="openContactModal()">Commander maintenant</button>
            </div>
        </div>
    </div>
</div>

<!-- Deuxième Modal pour les informations de contact -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true" novalidate>
    <div class="modal-dialog" style="margin-top: 15vh;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="contactModalLabel">Informations de Contact</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="contactForm">
                    @csrf
                    <div class="mb-3">
                        <label for="customerName" class="form-label">Nom et Prénom(s) <span style="color:red!important;">*</span></label>
                        <input type="text" class="form-control" id="customerName" required>
                    </div>
                    <div class="mb-3">
                        <label for="customerEmail" class="form-label">Adresse Email <span style="color:red!important;">*</span></label>
                        <input type="email" class="form-control" id="customerEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="customerPhone" class="form-label">Numéro de Téléphone <span style="color:red!important;">*</span></label>
                        <input type="tel" class="form-control" id="customerPhone" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary" id="cvSendButton" onclick="saveOptions()">Envoyer la commande</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    .form-check {
        margin-left: 5%;
    }

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
@section('script')
<script>
    function openEntrevueModal(button) {
        const plan = button.getAttribute('data-plan');
        const amount = button.getAttribute('data-amount');
        const service = button.getAttribute('data-service');
        document.getElementById('plan').value = plan;
        document.getElementById('amount').value = amount;
        document.getElementById('service_name').value = service;
        const modal = new bootstrap.Modal(document.getElementById('entrevueModal'));
        modal.show();
    }
    async function initiatePayment() {
    const sendButton = document.getElementById('payButton');
    const form = document.getElementById('contactEntrevueForm');
    const name = document.getElementById('username').value.trim();
    const email = document.getElementById('email').value.trim();
    const contact = document.getElementById('contact').value.trim();
    const amount = document.getElementById('amount').value.trim();
    const service = document.getElementById('service_name').value.trim();

    // Validation de base pour les champs obligatoires
    if (!name || !email || !contact || !amount || !service) {
        alert('Veuillez remplir tous les champs.');
        return;
    }

    try {
        sendButton.disabled = true;
        sendButton.innerHTML = 'Paiement en cours...';

        const payload = {
            plan: document.getElementById('plan').value,
            amount: amount,
            service_name: service,
            username: name,
            email: email,
            contact: contact,
            psychometric_test: document.querySelector('input[name="psychometric_test"]:checked')?.value // Ajouter la valeur du test psychométrique si sélectionné
        };

        const response = await fetch('/initiate-payment', {
            method: 'POST',
            body: JSON.stringify(payload), 
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json', 
                'Accept': 'application/json' 
            }
        });
        console.log(response.data);
        const data = await response.json();
        //console.log(response.data);
        if (data.success) {
            // Rediriger l'utilisateur vers le lien de paiement généré par FedaPay
            console.log(data.payment_url);
            window.location.href = data.payment_url;
        
        } else {
            alert('Erreur lors de l\'initiation du paiement');
        }
    } catch (error) {
        console.error('Erreur:', error);
        alert('Une erreur est survenue. Veuillez réessayer.');
    } finally {
        sendButton.disabled = false;
        sendButton.innerHTML = 'Payer maintenant';
    }
}
    // async function sendNotification() {
    //     const sendButton = document.getElementById('sendButton');
    //     const form = document.getElementById('contactEntrevueForm');
    //     const name = document.getElementById('name').value.trim();
    //     const email = document.getElementById('email').value.trim();
    //     const contact = document.getElementById('contact').value.trim();

    //     if (!name || !email || !contact) {
    //         alert('Veuillez remplir tous les champs.');
    //         return;
    //     }

    //     try {
    //         sendButton.disabled = true;
    //         sendButton.innerHTML = 'Envoi en cours...';

    //         const formData = new FormData(form);
    //         const response = await fetch('/send-entrevue-notification', {
    //             method: 'POST',
    //             body: formData,
    //             headers: {
    //                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    //             }
    //         });

    //         const data = await response.json();

    //         if (data.success) {
    //             alert('Votre demande a été envoyée avec succès');
    //             const modal = bootstrap.Modal.getInstance(document.getElementById('entrevueModal'));
    //             modal.hide();
    //         } else {
    //             alert('Erreur lors de l\'envoi de la demande');
    //         }
    //     } catch (error) {
    //         console.error('Erreur:', error);
    //         alert('Une erreur est survenue. Veuillez réessayer.');
    //     } finally {
    //         sendButton.disabled = false;
    //         sendButton.innerHTML = 'Envoyer la demande';
    //     }
    // }


    function openContactModal() {
        const optionsModal = bootstrap.Modal.getInstance(document.getElementById('optionsModal'));
        optionsModal.hide();

        setTimeout(() => {
            const contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
            contactModal.show();
        }, 300);
    }
    const amounts = {
        "debutant": {
            "24h": {
                "standard": 15000,
                "adapted": 18000
            },
            "72h": {
                "standard": 12000,
                "adapted": 15000
            },
            "7days": {
                "standard": 7000,
                "adapted": 10000
            }
        },
        "intermediaire": {
            "24h": {
                "standard": 18000,
                "adapted": 21000
            },
            "72h": {
                "standard": 15000,
                "adapted": 18000
            },
            "7days": {
                "standard": 10000,
                "adapted": 13000
            }
        },
        "senior": {
            "24h": {
                "standard": 21000,
                "adapted": 24000
            },
            "72h": {
                "standard": 18000,
                "adapted": 21000
            },
            "7days": {
                "standard": 13000,
                "adapted": 16000
            }
        },
        "expert": {
            "24h": {
                "standard": 24000,
                "adapted": 27000
            },
            "72h": {
                "standard": 21000,
                "adapted": 24000
            },
            "7days": {
                "standard": 16000,
                "adapted": 19000
            }
        },
        "dirigeant": {
            "24h": {
                "standard": 27000,
                "adapted": 30000
            },
            "72h": {
                "standard": 24000,
                "adapted": 27000
            },
            "7days": {
                "standard": 19000,
                "adapted": 21000
            }
        }
    };

    let currentLevel = "";
    let currentPriceOption = "standard";
    let currentDeliveryTime = "24h";

    function selectCard(button) {
        currentLevel = button.getAttribute("data-level");
        const modal = new bootstrap.Modal(document.getElementById('optionsModal'));
        modal.show();
        calculateTotal();
    }

    function calculateTotal() {
        const deliveryTime = document.getElementById("deliveryTime").value;
        const priceOption = document.querySelector('input[name="priceOption"]:checked').value;
        const baseAmount = amounts[currentLevel][deliveryTime][priceOption];
        let totalAmount = baseAmount;

        if (document.getElementById("englishTranslation").checked) {
            totalAmount += baseAmount * 0.75;
        }
        if (document.getElementById("modifiableVersion").checked) {
            totalAmount += baseAmount * 0.50;
        }
        if (document.getElementById("motivationLetter").checked) {
            totalAmount += 5000;
        }
        if (document.getElementById("designCustomization").checked) {
            totalAmount += baseAmount * 0.50;
        }

        document.getElementById("totalAmount").innerText = `${totalAmount.toFixed(2)} FCFA`;
    }

    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('input[name="priceOption"]').forEach(input => {
            input.addEventListener('change', calculateTotal);
        });
        document.querySelectorAll('#extraOptionsForm input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', calculateTotal);
        });
        document.getElementById("deliveryTime").addEventListener('change', function() {
            currentDeliveryTime = this.value;
            calculateTotal();
        });
    });

    async function saveOptions() {
        console.log("La fonction saveOptions est appelée");

        const sendButton = document.getElementById("cvSendButton");
        const customerName = document.getElementById("customerName");
        const customerEmail = document.getElementById("customerEmail");
        const customerPhone = document.getElementById("customerPhone");

        if (!customerName.value.trim()) {
            alert('Veuillez renseigner votre nom et prénom(s).');
            customerName.focus();
            return;
        }
        if (!customerEmail.value.trim()) {
            alert('Veuillez renseigner votre adresse email.');
            customerEmail.focus();
            return;
        }
        if (!customerPhone.value.trim()) {
            alert('Veuillez renseigner votre numéro de téléphone');
            customerPhone.focus();
            return;
        }

        sendButton.disabled = true;
        sendButton.innerHTML = 'Envoi en cours...';
        console.log("Bouton désactivé et texte modifié");

        const optionsData = {
            level: currentLevel,
            deliveryTime: document.getElementById("deliveryTime").value,
            priceOption: document.querySelector('input[name="priceOption"]:checked').value,
            englishTranslation: document.getElementById("englishTranslation").checked ? "Oui" : "Non",
            modifiableVersion: document.getElementById("modifiableVersion").checked ? "Oui" : "Non",
            motivationLetter: document.getElementById("motivationLetter").checked ? "Oui" : "Non",
            designCustomization: document.getElementById("designCustomization").checked ? "Oui" : "Non",
            totalAmount: document.getElementById("totalAmount").innerText
        };

        const formData = {
            ...optionsData,
            contactName: customerName.value,
            contactEmail: customerEmail.value,
            contactPhone: customerPhone.value
        };

        console.log("Données envoyées :", formData);

        try {
            const response = await fetch('/send-email-to-admin', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(formData)
            });
            const data = await response.json();

            console.log("Réponse du serveur :", data);

            if (data.success) {
                alert('Commande envoyée avec succès!');
                const contactModal = bootstrap.Modal.getInstance(document.getElementById('contactModal'));
                contactModal.hide();
            } else {
                alert('Erreur lors de l\'envoi de la commande.');
            }
        } catch (error) {
            console.error('Erreur:', error);
            alert('Une erreur est survenue.');
        } finally {
            sendButton.disabled = false;
            sendButton.innerHTML = 'Envoyer la commande';
        }
    }

    // document.getElementById("contactModal").addEventListener("shown.bs.modal", function () {
    //     document.getElementById("sendOrderButton").addEventListener("click", saveOptions);
    // });
</script>
@endsection