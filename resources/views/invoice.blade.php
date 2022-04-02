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
                                    <h1 class="text-uppercase mt-4"></h1>
                                    <div class="billed"><span class="font-weight-bold text-uppercase">user
                                            name:</span><span class="ml-1"> {{auth()->user()->name}}</span></div>
                                    <div class="billed"><span class="font-weight-bold text-uppercase">Date:</span><span
                                            class="ml-1"> {{date('Y - M - d')}}</span></div>
                                </div>
                                <div class="col-md-6 text-right mt-3">
                                    <div class="d-flex justify-content-between ">
                                        <div class="col-md-6">
                                            <h4 class="text-primary mb-0"> {{$OrganizationProfile->name}}</h4>
                                            <span>{{$OrganizationProfile->domain}}</span>
                                        </div>
                                        <i style="font-size:100px" class="fa fa-brands fa-cc-paypal"></i>
                                    </div>
                                </div>
                            </div>
                            {{-- @dd($Package) --}}
                            <div class="mt-3">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <div class="d-flex justify-content-between w-100 font-weight-bold">
                                                <h3>items</h3>
                                                <h3>Price</h3>
                                            </div>
                                        </thead>
                                        <tbody>
                                            <div class="d-flex justify-content-between w-100 p-1">
                                                <h5>{{$Package->name}}</h5>
                                                {{-- @dd(auth()->user()->app_genration_price_paid); --}}
                                                @if (! auth()->user()->subscribed_to_free && ! auth()->user()->app_genration_price_paid)
                                                    @if ($Package->is_freetrial)
                                                    <h5>{{number_format( 0 , 2)}}</h5>
                                                    @endif
                                                @else
                                                <h5>{{number_format( $Package->price , 2)}}</h5>
                                                @endif

                                            </div>
                                            @if (!auth()->user()->app_genration_price_paid)
                                                <div class="d-flex justify-content-between w-100 p-1">
                                                <h5> App fiexed Price</h5>
                                                @if (!$Package->is_freetrial)
                                                <h5>{{number_format($OrganizationProfile->fixed_subscribtion_price ,
                                                    2)}}</h5>
                                                @else
                                                <h5>{{number_format( 0 ,
                                                    2)}}</h5>
                                                @endif
                                            </div>
                                            @endif

                                            <div class="d-flex justify-content-between w-100 p-1">
                                                <h5></h5>
                                                <div>
                                                    <div class="d-flex justify-content-between " style="width:200px">
                                                        <h5 class="mx-2">Total</h5>
                                                        @if (auth()->user()->app_genration_price_paid)
                                                        {{number_format($Package->price , 2)}}
                                                        @else
                                                        @if (!$Package->is_freetrial)
                                                        <h5 class="text-primary">{{number_format($OrganizationProfile->fixed_subscribtion_price
                                                            + $Package->price , 2)}}
                                                        @else
                                                        <h5>{{number_format( 0 ,
                                                            2)}}</h5>
                                                        @endif
                                                        @endif

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="text-right mb-3">
                                <form method="post" action="{{ route('PayInvoice')}}">
                                    @csrf
                                    <div class="d-flex justify-content-between w-100">
                                        <span></span>
                                        @if (! auth()->user()->subscribed_to_free && ! auth()->user()->app_genration_price_paid)
                                        @if($Package->is_freetrial)
                                        <button class="btn  btn-primary py-1  mr-5" type='submit'> </i> Free Subscribe</button>
                                        @endif
                                        @else
                                            <button class="btn  btn-primary py-1  mr-5" type='submit'> <i
                                                class="fa fa-lg fa-brands fa-paypal mx-1"></i> Pay Now</button>
                                        @endif
                                     </div>
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
