@extends('layouts.app')

@section('content')
<div class="container_fluid ">
    <div class="row ">
        <div class="col-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('Images/ledger.jpg')}}"  height="500" style="filter:brightness(60%)" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('Images/cal.jpg')}}" class="d-block w-100" height="500" style="filter:brightness(50%)" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('Images/general.jpg')}}" class="d-block w-100" style="filter:brightness(50%)" height="500" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="container text-center py-5">
    <div class="service-card">
        <h3 class="mb-5">Your simple, beautiful digital storefront</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mt-2"> <img src="{{asset('Images/ledger.jpg')}}" width="50" height="50" /> </div>
                    <h5 class="mt-3">Sell digital content</h5> <small>get  , PDFs, checklinst text, or just about anything.</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mt-2"> <img src="{{asset('Images/general.jpg')}}" width="50" height="50" /> </div>
                    <h5 class="mt-3">Beautiful landing pages</h5> <small>Get pages that will match your brand or offer upsells to your supporters.</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mt-2"> <img src="{{asset('Images/cal.jpg')}}" width="50" height="50" /> </div>
                    <h5 class="mt-3">Connect with supporters</h5> <small>Using sales pages you can connect with your customers using our chatbot system.</small>
                </div>
            </div>
        </div>
        <div class="button mt-5"> <button class="btn btn-primary pro-button">Add a Ledger <i class="fa fa-long-arrow-right ml-2 mt-1"></i></button> </div>
    </div>
</div>
</div>
@endsection