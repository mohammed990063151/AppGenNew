@extends('layouts.Auth.Login_layouts')
@section('content')
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
        </div>
    </div>
    <div class="container">
        <div class="row  mt-md-n11 mt-n10 justify-content-center">
            <div class="col-xl-9 col-lg-9 col-md-9 mx-auto">
                <div class="card z-index-0 p-1">
                    <div class="card-body">
                        <div class="p-3 bg-white rounded">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="text-uppercase">Invoice</h1>
                                    <div class="billed"><span class="font-weight-bold text-uppercase">user name:</span><span class="ml-1"> {{auth()->user()->name}}</span></div>
                                    <div class="billed"><span class="font-weight-bold text-uppercase">Date:</span><span class="ml-1"> {{date('Y - M - d')}}</span></div>
                                </div>
                                <div class="col-md-6 text-right mt-3">
                                    <h4 class="text-primary mb-0"> {{$OrganizationProfile->name}}</h4><span>{{$OrganizationProfile->domain}}</span>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <div class="d-flex justify-content-between w-100 font-weight-bold">
                                                <span>Product</span>
                                                <span >Price</span>
                                            </div>
                                        </thead>
                                        <tbody>
                                            <div class="d-flex justify-content-between w-100 p-1">
                                                <span>{{ $Package->name}}</span>
                                                <span>{{ number_format($Package->price , 2) }}</span>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 p-1">
                                                <span> App fiexed Price</span>
                                                <span>{{number_format($OrganizationProfile->fixed_subscribtion_price , 2)}}</span>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 p-1">
                                                <span>Total</span>
                                                <span>{{ number_format($OrganizationProfile->fixed_subscribtion_price  + $Package->price, 2) }}</span>
                                            </div>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="text-right mb-3">
                                <form method="post" action="{{ route('PayInvoice')}}">
                                    @csrf
                                    <button class="btn btn-primary btn-sm mr-5" type='submit'>Pay Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection
