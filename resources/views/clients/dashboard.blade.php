<!--
=========================================================
* Argon Dashboard 2 - v2.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->





@extends('layouts.master')
@section('breadceumbs')
{{-- @dd(BredCrumpLinks('jksa' , 'hitem')) --}}
    {{-- <x-bread-crumps> --}}
    {{-- @component('components.bread-crumps', ['head' => __('translation.Dashboard'), 'links' => [BredCrumpLinks('Dashboard' , 'Dashboard') , BredCrumpLinks('Dashboard' , 'Dashboard'),  ]])
    @endcomponent --}}
@endsection
@section('title')
    {{ __('translation.Dashboard') }}
@stop

@section('content')


    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->

        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                            {{-- {{ __('translation.Today\'s_Money') }}</p> --}}
                                            {{__('translation. All Applcation') }}
                                            </p>
                                        <h5 class="font-weight-bolder">
                                            {{ \App\Models\app::count() }}
                                        </h5>
                                        {{-- <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+55%</span>
                                            {{ __('translation.since_yesterday') }}
                                        </p> --}}
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                            {{-- {{ __('translation.Today\'s Users') }}</p> --}}

                                            {{__('translation.notifcation') }}


                                            </p>
                                        <h5 class="font-weight-bolder">
                                            {{ \App\Models\FirebaseNotification::count() }}
                                        </h5>
                                        {{-- <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+3%</span>
                                            {{ __('translation.since_last_week') }}
                                        </p> --}}
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                            {{-- {{ __('translation.New_Clients') }}</p> --}}
                                            {{__('translation. TICKET MASSEGE') }}
                                            {{-- {{__('translation. All Applcation') }}
                                            --}}

                                        <h5 class="font-weight-bolder">
                                            {{ \App\Models\Ticketmassege::count() }}
                                        </h5>
                                        {{-- <p class="mb-0">
                                            <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                            {{ __('translation.since_last_quarter') }}
                                        </p> --}}
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                            {{-- {{ __('translation.Sales') }}</p> --}}
                                            {{__('translation. Download Applaction') }} </P>
                                        <h5 class="font-weight-bolder">
                                            {{ \App\Models\app_profile::count() }}
                                        </h5>
                                        {{-- <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+5%</span>
                                            {{ __('translation.than_last_month') }}
                                        </p> --}}
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-7 mb-lg-0 mb-4">

                <div id="container"></div></div>
                <div class="col-lg-5">
                    <div class="card card-carousel overflow-hidden h-100 p-0">
                      <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                        <div class="carousel-inner border-radius-lg h-100">
                          <div class="carousel-item h-100 active" style="background-image: url('../assets/img/carousel-1.jpg');
                background-size: cover;">
                            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                              <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                <i class="ni ni-camera-compact text-dark opacity-10"></i>
                              </div>
                              <h5 class="text-white mb-1">Get started with Argon</h5>
                              <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                            </div>
                          </div>
                          <div class="carousel-item h-100" style="background-image: url('../assets/img/carousel-2.jpg');
                background-size: cover;">
                            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                              <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                              </div>
                              <h5 class="text-white mb-1">Faster way to create web pages</h5>
                              <p>That’s my skill. I’m not really specifically talented at anything except for the ability to learn.</p>
                            </div>
                          </div>
                          <div class="carousel-item h-100" style="background-image: url('../assets/img/carousel-3.jpg');
                background-size: cover;">
                            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                              <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                <i class="ni ni-trophy text-dark opacity-10"></i>
                              </div>
                              <h5 class="text-white mb-1">Share with us your design tips!</h5>
                              <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-7 mb-lg-0 mb-4">
                    <div class="card ">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-2">{{ __('translation.Sales_by_Country') }}</h6>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center ">
                                <tbody>
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="../assets/img/icons/flags/US.png" alt="Country flag">
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                    <h6 class="text-sm mb-0">United States</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                <h6 class="text-sm mb-0">2500</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                <h6 class="text-sm mb-0">$230,900</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                <h6 class="text-sm mb-0">29.9%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="../assets/img/icons/flags/DE.png" alt="Country flag">
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                    <h6 class="text-sm mb-0">Germany</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                <h6 class="text-sm mb-0">3.900</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                <h6 class="text-sm mb-0">$440,000</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                <h6 class="text-sm mb-0">40.22%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="../assets/img/icons/flags/GB.png" alt="Country flag">
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                    <h6 class="text-sm mb-0">Great Britain</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                <h6 class="text-sm mb-0">1.400</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                <h6 class="text-sm mb-0">$190,700</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                <h6 class="text-sm mb-0">23.44%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="../assets/img/icons/flags/BR.png" alt="Country flag">
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                    <h6 class="text-sm mb-0">Brasil</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                <h6 class="text-sm mb-0">562</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                <h6 class="text-sm mb-0">$143,960</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                <h6 class="text-sm mb-0">32.14%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">{{ __('translation.Categories') }}</h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="card-body" style="width: 70%">
                                <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title mb-0">  smsar kbonony</h4>
                                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                                    </div>

                                </div>
                                <div class="card-body" style="width: 70%">
                                    {{-- {!! $chartjs->render() !!} --}}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Argon Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0 overflow-auto">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
                        onclick="sidebarType(this)">Dark</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="d-flex my-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <div class="mt-2 mb-5 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>
                <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free
                    Download</a>
                <a class="btn btn-outline-dark w-100"
                    href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View
                    documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>



    <!--   Core JS Files   -->


<script src="https://code.highcharts.com/highcharts.js"></script>

{{-- <script type="text/javascript">
    var Notification = <?php echo json_encode($Notification)?>;
    Highcharts.chart('container', {
        title: {
            text: 'New Notification'
        },

        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: 'Number of New Notification'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Notification',
            data: Notification
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script> --}}

@endsection
