@extends('frontend.layouts.app')

@section('description')
Service
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
                <div class="breadcrumb-title rt-mb-10">Nos services aux entreprises</div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('website.home') }}">{{ __('home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nos services aux entreprises</li>
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
                                MARKETING RH
                                <img src="{{ asset('frontend') }}/assets/images/all-img/title-shape.png" alt="">
                            </span>
                        </h4>
                        <p class="text-center" style="text-align:justify;">Les services de WURA aux entreprises sont basés sur le marketing RH. Nous aidons les entreprises à améliorer leur marque employeur et à attirer les talents les plus qualifiés. Grâce à des solutions personnalisées telles que l'audit de la marque employeur, la création de contenu pour les réseaux sociaux, et la mise en place d'événements de recrutement, WURA offre un accompagnement stratégique complet pour optimiser la gestion des talents et le développement d’une culture d'entreprise attractive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-4 mb-4">
            <div class="frontside">
                <div class="card">
                    <div class="card-body position-relative">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid position-absolute" src="{{asset('frontend/assets/images/rh/733.jpg')}}" alt="card image" style="width: 50px; height: 50px; object-fit: cover;">
                            <h4 class="card-title mx-auto mb-0">Pack Essentiel</h4>
                        </div>
                        <p class="card-text text-center">Réservé aux PME/TPE, ainsi qu'aux entreprises en démarrage</p>
                        <div class="card-details text-left">
                            <strong>Services inclus :</strong>
                            <ul style="text-align:justify;">
                                <li>Analyse basique de la marque employeur</li>
                                <li>Conseils en communication RH</li>
                                <li>Publications et annonces sur les réseaux de WURA</li>
                            </ul>
                            <p><strong>Durée :</strong> 1 à 3 mois</p>
                            <p><strong>Tarif :</strong> 150 000 à 200 000 FCFA/mois</p>
                        </div>
                        <a style="margin-top:15%!important;" href="javascript:void(0)" class="btn btn-primary" onclick="openContactModal()">Choisir</a>                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="frontside">
                <div class="card last-three-cards">
                    <div class="card-body position-relative">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid position-absolute" src="{{asset('frontend/assets/images/rh/fuse.jpg')}}" alt="card image" style="width: 50px; height: 50px; object-fit: cover;">
                            <h4 class="card-title mx-auto mb-0">Pack Avancé</h4>
                        </div>
                        <p class="card-text text-center">Réservé aux entreprises de taille moyenne, développant leur marque employeur</p>
                        <div class="card-details text-left">
                            <strong>Services inclus :</strong>
                            <ul style="text-align:justify;">
                                <li>Audit complet de la marque employeur</li>
                                <li>Élaboration de contenu personnalisé pour les réseaux sociaux et le site carrière</li>
                                <li>Optimisation des pages entreprise sur WURA</li>
                                <li>Conseils sur l’amélioration de l'expérience collaborateur + Suivi des performances et ajustements mensuels</li>
                            </ul>
                            <p><strong>Durée :</strong> 1 à 3 mois</p>
                            <p><strong>Tarif :</strong> 150 000 à 200 000 FCFA/mois</p>
                        </div>
                        <a class="btn btn-primary" data-level="senior" onclick="openContactModal()">Suivant</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4 last-three-cards">
            <div class="frontside">
                <div class="card">
                    <div class="card-body position-relative">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid position-absolute" src="{{asset('frontend/assets/images/rh/66755.jpg')}}" alt="card image" style="width: 50px; height: 50px; object-fit: cover;">
                            <h4 class="card-title mx-auto mb-0">Pack Premium</h4>
                        </div>
                        <p class="card-text text-center">Réservé aux grandes entreprises, marques en forte croissance</p>
                        <div class="card-details text-left">
                            <strong>Services inclus :</strong>
                            <ul style="text-align:justify;">
                                <li>Stratégie complète de Marketing RH et gestion de la marque employeur</li>
                                <li>Création de contenu multimédia & Campagnes publicitaires suivis d'annonces</li>
                                <li>Analyse des données et reporting complet</li>
                                <li>Accompagnement stratégique sur 12 mois pour les évolutions du marché RH</li>
                            </ul>
                            <p><strong>Durée :</strong> 6 à 12 mois</p>
                            <p><strong>Tarif :</strong> 700 000 à 1 200 000 FCFA/mois</p>
                        </div>
                        <a href="" class="btn btn-primary ">Suivant</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-4 offset-lg-4 mb-4">
            <div class="frontside">
                <div class="card" style="min-height:600px!important;">
                    <div class="card-body position-relative">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid position-absolute" src="{{asset('frontend/assets/images/rh/mesure.jpg')}}" alt="card image" style="width: 50px; height: 50px; object-fit: cover;">
                            <h4 class="card-title mx-auto mb-0">Pack Sur Mesure</h4>
                        </div>
                        <p class="card-text text-center">Réservé aux entreprises ayant des besoins spécifiques, par exemple des projets de grande envergure ou des événements.</p>
                        <div class="card-details text-left">
                            <strong>Services inclus :</strong>
                            <ul style="text-align:justify;">
                                <li>Diagnostic et évaluation complète de l’image de marque employeur</li>
                                <li>Stratégie et mise en place d’événements de marque employeur</li>
                                <li>Collaborations pour la mise en place de branding personnalisé, gestion de crises, et stratégies de rétention de talents</li>
                                <li>Reporting avancé et analyses sectorielles</li>
                            </ul>
                            <p><strong>Durée :</strong> Sur devis</p>
                            <p><strong>Tarif :</strong> Sur devis en fonction de la durée</p>
                        </div>
                        <a href="" class="btn btn-primary ">Suivant</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

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
                <button type="button" class="btn btn-primary" id="cvSendButton" onclick="saveOptions()">Payer maintenant</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    .card-details {
        text-align: left;
        margin-top: 15px;
    }

    .card-details ul {
        padding-left: 20px;
        list-style-type: disc;
    }

    .card-details li {
        margin-bottom: 5px;
    }

    .card-details p {
        margin: 10px 0;
    }

    .d-flex img {
        border-radius: 50%;
    }

    .card-title {
        font-size: 1.60rem;
        margin: 0;
        text-align: center;
    }

    .frontside .card .card-body {
        background-color: whitesmoke;
        border-radius: 10px;
    }

    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    #team {
        background: #eee !important;
    }

    .btn-primary:hover,
    .btn-primary:focus {
        background-color: #108d6f;
        border-color: #108d6f;
        box-shadow: none;
        outline: none;
    }

    .btn-primary {
        color: #fff;
        background-color: #027373;
        border-color: #027373;
    }

    section {
        padding: 60px 0;
    }

    section .section-title {
        text-align: center;
        color: #027373;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #team .card {
        border: none;
        background: #ffffff;
    }

    .image-flip:hover .backside,
    .image-flip.hover .backside {
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        transform: rotateY(0deg);
        border-radius: .25rem;
    }

    .image-flip:hover .frontside,
    .image-flip.hover .frontside {
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .mainflip {
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -ms-transition: 1s;
        -moz-transition: 1s;
        -moz-transform: perspective(1000px);
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
        position: relative;
    }

    .frontside {
        position: relative;
        -webkit-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        z-index: 2;
        margin-bottom: 30px;
    }

    .backside {
        position: absolute;
        top: 0;
        left: 0;
        background: white;
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
        -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    }

    .frontside,
    .backside {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -moz-transition: 1s;
        -moz-transform-style: preserve-3d;
        -o-transition: 1s;
        -o-transform-style: preserve-3d;
        -ms-transition: 1s;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
    }

    .frontside .card,
    .backside .card {
        min-height: 600px;
    }

    .backside .card a {
        font-size: 15px;
        color: #007b5e !important;
    }

    .frontside .card .card-title,
    .backside .card .card-title {
        color: #027373 !important;
    }

    .frontside .card .card-body img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
    }

    /** */
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
    @media(max-width:768px){
        .last-three-cards{
            min-height:600px!important;
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
    function openContactModal() {
    const contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
    contactModal.show();
}   
</script>
@endsection