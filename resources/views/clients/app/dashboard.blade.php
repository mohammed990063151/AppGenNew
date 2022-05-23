@extends('layouts.master')
@section('breadceumbs')
    {{-- <x-bread-crumps> --}}
    @component('components.bread-crumps',
        [
            'head' => __('translation.Technical support'),
            'links' => [BredCrumpLinks(route('clients.dashboard'), __('translation.Dashboard')), BredCrumpLinks(route('ticket.index'), __('translation.Technical support'))],
        ])
    @endcomponent
@endsection
@section('title')
    Updata Applction
@stop
@section('content')

@if (session()->has('Add'))
<div class="alert alert-success alert-dismissible fade show" >
 <button type="button" class="close_success" data-dismiss="alert" >&times;</button>
        <strong>{{ session()->get('Add') }}</strong>



    </div>

@endif


@if ($errors->any())
<div class="alert alert-danger" style="position: fixed;
right: 0px;
z-index: 9999;
bottom: 300px;
margin-bottom: 19px;
margin-right: 40px;
max-width: 350px;">

    <strong>{{ session()->get('errors') }}</strong>
</div>
@endif



    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>update My App</h5>
                            </div>
                            <div>
                                <span><a href="{{ route('Applction_Building', $MyApp->id) }}" class="btn btn-info"
                                    type="button">
                                    Building
                                </a></span>
                                <span><a href="{{ route('application.index') }}" class="btn btn-primary btn-sm"
                                        type="button">
                                        Go Back
                                    </a></span>
                                <form action="{{ route('application.delete', $MyApp->id) }}" method="post"
                                    style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-dange ">Delete My Apps</button>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-3">
                                <div class="container">
                                    <div class="card_apps">
                                        <a href="{{ route('application.edit_Applaction', $Applction->id) }}">
                                            <div class="img-box">

                                                <img src="{{ asset("app/{$Applction->Logo}") }}">
                                            </div>
                                            <div class="content_apps">
                                                <h2>main basic<br><span>{{ $Applction->Name }}</span></h2>
                                                <p>{{ $Applction->Discrptions }}.</p>
                                    </div> </a>
                                </div>
                                <div class="card_apps">
                                    @foreach ($Applction->screen as $screen)
                                        <a href="{{ route('AddDetialsDetials', $Applction->AppProfile->id) }}">
                                    @endforeach
                                    <div class="img-box">
                                        <img src="{{ asset("app/{$Applction->Logo}") }}">
                                    </div>
                                    <div class="content_apps">
                                        <h2>Social Media<br><span>{{ $Applction->AppName }}</span></h2>
                                        <p>{{ $Applction->Discrptions }}.</p>
                                        <ul>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card_apps">
                                    <div class="img-box">
                                        <img src="{{ asset("app/{$Applction->Logo}") }}">
                                    </div>
                                    <div class="content_apps">
                                        <h2>main screen<br><span></span></h2>
                                        <p></p>
                                        <ul>
                                            @foreach ($Applction->screen as $screen)
                                                <li><a href="{{ route('Screen.edit', $screen->id) }}"><i
                                                            class="fa fa-desktop" aria-hidden="true"></i></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
