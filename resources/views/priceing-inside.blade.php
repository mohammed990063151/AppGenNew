@extends('layouts.master')
@section('style')
<style>
    ul{
        list-style-type: none;
    }
    body {
        background: #eee;
        margin-top: 20px;
    }
    *{
        text-transform: capitalize;
    }
    /* ===== PRICING PAGE ===== */
    .price-tabs {
        background-color: #fff;
        -webkit-box-shadow: 0 5px 20px 0 rgba(39, 39, 39, 0.1);
        box-shadow: 0 5px 20px 0 rgba(39, 39, 39, 0.1);
        display: inline-block;
        padding: 7px;
        border-radius: 40px;
        border: 1px solid #00b5ec;
        margin-bottom: 45px;
    }

    @media (min-width: 768px) {
        .price-tabs {
            margin-bottom: 60px;
        }
    }

    .price-tabs .nav-link {
        color: #00b5ec;
        font-weight: 500;
        font-family: "Montserrat", sans-serif;
        font-size: 16px;
        padding: 12px 35px;
        display: inline-block;
        text-transform: capitalize;
        border-radius: 40px;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    @media (min-width: 768px) {
        .price-tabs .nav-link {
            padding: 12px 40px;
        }
    }

    .price-tabs .nav-link.active {
        background-color: #00b5ec;
        color: #fff;
    }

    .price-item {
        background-color: #fff;
        -webkit-box-shadow: 0 5px 30px 0 rgba(39, 39, 39, 0.15);
        box-shadow: 0 5px 30px 0 rgba(39, 39, 39, 0.15);
        border-radius: 10px;
    }

    @media (min-width: 768px) {
        .price-item {
            margin: 0 20px;
            padding-top: 20px;
        }
    }

    .price-item .price-top {
        -webkit-box-shadow: 0 5px 30px 0 rgba(39, 39, 39, 0.15);
        box-shadow: 0 5px 30px 0 rgba(39, 39, 39, 0.15);
        padding: 50px 0 25px;
        background-color: #00b5ec;
        border-radius: 10px;
        position: relative;
        z-index: 0;
        margin-bottom: 33px;
    }

    @media (min-width: 768px) {
        .price-item .price-top {
            margin: 0 -20px;
            border-radius: 20px;
        }
    }

    .price-item .price-top:after {
        height: 50px;
        width: 100%;
        border-radius: 0 0 10px 10px;
        background-color: #00b5ec;
        position: absolute;
        content: '';
        left: 0;
        bottom: -17px;
        z-index: -1;
        -webkit-transform: skewY(5deg);
        transform: skewY(5deg);
        -webkit-box-shadow: 0 5px 10px 0 rgba(113, 113, 113, 0.15);
        box-shadow: 0 5px 10px 0 rgba(113, 113, 113, 0.15);
    }

    @media (min-width: 768px) {
        .price-item .price-top:after {
            border-radius: 0 0 20px 20px;
        }
    }

    .price-item .price-top * {
        color: #fff;
    }

    .price-item .price-top h2 {
        font-weight: 700;
    }

    .price-item .price-top h2 sup {
        top: 13px;
        left: -5px;
        font-size: 0.35em;
        font-weight: 500;
        vertical-align: top;
    }

    .price-item .price-content {
        padding: 30px;
        padding-bottom: 40px;
    }

    .price-item .price-content li {
        position: relative;
        margin-bottom: 15px;
        margin-left: 10px;
        margin-right: 10px;
        text-align: center;
    }

    @media (min-width: 992px) {
        .price-item .price-content li {
            padding-left: 28px;
            text-align: left;
        }
    }

    @media (min-width: 992px) {
        .price-item .price-content li i {
            position: absolute;
            left: 0;
            top: 3px;
        }
    }

    .price-item .price-content .zmdi-check {
        color: #28a745;
    }

    .price-item .price-content .zmdi-close {
        color: #f00;
    }

    .popular {
        background-color: #00b5ec;
    }

    .popular .price-top {
        background-color: #fff;
    }

    .popular .price-top:after {
        background-color: #fff;
    }

    .popular .price-top h4 {
        color: #101f41;
    }

    .popular .price-top h2,
    .popular .price-top span,
    .popular .price-top sup {
        color: #00b5ec;
    }

    .popular .price-content ul *,
    .popular .price-content ul .zmdi-close,
    .popular .price-content ul .zmdi-check {
        color: #fff !important;
    }
</style>
@endSection
@section('content')
<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
<div class="container">
    <div class="tab-content wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div role="tabpanel" class="tab-pane fade show active" id="yearly">
            <div class="row justify-content-center">
                @foreach ($Packages as $Package )
                <div class="col-md-6 col-lg-4 mb-30">
                    <div class="price-item text-center">
                        <div class="price-top">
                            <h4>{{$Package->name}}</h4>
                            <h2 class="mb-0"><sup>$</sup>{{$Package->price}}</h2>
                            <span class="text-capitalize">per month</span>
                        </div>
                        <div class="price-content">
                            <ul class="border-bottom mb-30 mt-md-4 pb-3 p-0">
                                @foreach ($Features as $Feature )
                                <li>
                                    {{-- @dd($Feature->id); --}}
                                    @if (in_array($Feature->id,json_decode($data[$Package->id])))
                                    <span style="max-width: 30px; max-height:30px; color:green">
                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M0.41,13.41L6,19L7.41,17.58L1.83,12M22.24,5.58L11.66,16.17L7.5,12L6.07,13.41L11.66,19L23.66,7M18,7L16.59,5.58L10.24,11.93L11.66,13.34L18,7Z" />
                                        </svg>
                                    </span>
                                    @else
                                    <span style="max-width: 30px; max-height:30px; color:red">
                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z" />
                                        </svg>
                                    </span>
                                    @endif
                                    <span class="c-black">{{$Feature->name}}</span>
                                </li>
                                @endforeach
                            </ul>
                            <form action="{{route('PayInside')}}" method="post" style="display:block">
                                @csrf
                                <input type="hidden" name="package_id" value='{{$Package->id}}'>
                                <button href="#" class="btn btn-custom">Subscribe now</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="monthly">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-30">
                    <div class="price-item text-center">
                        <div class="price-top">
                            <h4>Personal</h4>
                            <h2 class="mb-0"><sup>$</sup>29</h2>
                            <span class="text-capitalize">per month</span>
                        </div>
                        <div class="price-content">
                            <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                <li>
                                    <i class="zmdi zmdi-check mr-2"></i>
                                    <span class="c-black">Eget erovtiu faucid</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check mr-2"></i>
                                    <span class="c-black">Cras justo odio</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check mr-2"></i>
                                    <span class="c-black">Morbi leo risus</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-close mr-2"></i>
                                    <span>Porta consectetur ac</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-close mr-2"></i>
                                    <span> Vestibulum at eros</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-close mr-2"></i>
                                    <span>Adipisci atque beatae</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-custom">Buy now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-30">
                    <div class="price-item text-center popular">
                        <div class="price-top">
                            <h4>Business</h4>
                            <h2 class="mb-0"><sup>$</sup>59</h2>
                            <span class="text-capitalize">per month</span>
                        </div>
                        <div class="price-content">
                            <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                <li>
                                    <i class="zmdi zmdi-check mr-2"></i>
                                    <span class="c-black">Eget erovtiu faucid</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check mr-2"></i>
                                    <span class="c-black">Cras justo odio</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check mr-2"></i>
                                    <span class="c-black">Morbi leo risus</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-close mr-2"></i>
                                    <span>Porta consectetur ac</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-close mr-2"></i>
                                    <span> Vestibulum at eros</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-close mr-2"></i>
                                    <span>Adipisci atque beatae</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-custom btn-light">Buy now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-30">
                    <div class="price-item text-center">
                        <div class="price-top">
                            <h4>Enterprise</h4>
                            <h2 class="mb-0"><sup>$</sup>99</h2>
                            <span class="text-capitalize">per month</span>
                        </div>
                        <div class="price-content">
                            <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                <li>
                                    <i class="zmdi zmdi-check mr-2"></i>
                                    <span class="c-black">Eget erovtiu faucid</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check mr-2"></i>
                                    <span class="c-black">Cras justo odio</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check mr-2"></i>
                                    <span class="c-black">Morbi leo risus</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-close mr-2"></i>
                                    <span>Porta consectetur ac</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-close mr-2"></i>
                                    <span> Vestibulum at eros</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-close mr-2"></i>
                                    <span>Adipisci atque beatae</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-custom">Buy now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
