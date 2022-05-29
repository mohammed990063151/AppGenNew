@extends('layouts.master')
@section('breadceumbs')
    {{-- <x-bread-crumps> --}}
        {{-- @component('components.bread-crumps', [
            'head' => __('translation.Technical support'),
             'links' => [
                BredCrumpLinks( route('clients.dashboard')  ,  __('translation.Dashboard')),
                 BredCrumpLinks( route('ticket.index')  , __('translation.Technical support')),
              ]])
    @endcomponent --}}
    @component('components.bread-crumps', [
        'head' => __('translation.Technical support'),
         'links' => [
            BredCrumpLinks( route('clients.dashboard')  ,  __('translation.Dashboard')),
             BredCrumpLinks( route('ticket.index')  , __('translation.Technical support')),
          ]])
@endcomponent
@endsection
@section('title')
    Updata My app
@stop
@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="col-md-12" style="text-align: end;">
                            <div class="col">
                                <span>
                                    <a href="{{ route('application.index') }}" class="btn btn-danger btn-sm"  type="" style="display: -webkit-inline-box;background-color: #5b6478; border-color: #5b6478;">
                                        <i class="bi bi-arrow-left"></i></a>                                    </a></span></div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col no-gutters" style="text-align: center;">
                                <iframe class="mobile" id="mobile_id"
                                    src="https://ahmedict6.github.io/mobile-app-genrator-app/">
                                </iframe>
                            </div>
                            <div class="col no-gutters">
                                <div class="form-group col-md-6">
                                    <form action="{{ route('application.update', $Applction->id) }}" method="POST"
                                        enctype="multipart/form-data" class="form">
                                        @csrf
                                        <h1 class="text-center">My App</h1>
                                        <!-- Progress bar -->
                                        <div class="progressbar">
                                            <div class="progress" id="progress"></div>
                                            <div class="progress-step progress-step-active" data-title="Intro"></div>
                                            <div class="progress-step" data-title="Discrptions"></div>
                                            <div class="progress-step" data-title="Logo"></div>
                                            {{-- <div class="progress-step" data-title="Logo"></div> --}}
                                        </div>
                                        <!-- Steps -->
                                        <div class="form-step form-step-active">
                                            <div class="input-group">
                                                <input type="hidden" value="{{ $Applction->id }}" name="id"
                                                    aria-describedby="helpId" placeholder="">
                                                <label for="username">Name</label>
                                                <input type="text" name="AppName" id="username"
                                                    value="{{ $Applction->AppName }}" />
                                                @error('AppName')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="position">Phone</label>
                                                <input type="text" name="Phone" id="position"
                                                    value="{{ $Applction->Phone }}" />
                                                @error('Phone')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="WhatsApp">WhatsApp</label>
                                                <input type="text" name="WhatsApp" id="WhatsApp"
                                                    value="{{ $Applction->WhatsApp }}" />
                                                @error('WhatsApp')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div>
                                          
                                                <a href="#" class="btn btn-next  width-50 ml-auto" id="app">Next</a>
                                           
                                        </div>
                                        <div class="form-step">
                                            <div class="input-group">
                                                <label for="phone">Link</label>
                                                <input type="text" name="Link" id="phone"
                                                    value="{{ $Applction->Link }}" />
                                                @error('Link')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="email">Discrptions</label>
                                                <input type="text" name="Discrptions" id="email"
                                                    value="{{ $Applction->Discrptions }}" />
                                                @error('Discrptions')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div>
                                            <div class="btns-group" id="app-group">
                                                <a href="#" class="btn btn-prev" id="app">Previous</a>
                                                <a href="#" class="btn btn-next" id="app">Next</a>
                                            </div>
                                        </div>
                                        <div class="form-step">
                                            <div class="input-group">
                                                <label for="password">Splash Screen</label>
                                                <input type="file" name="Splash_Screen" id="phone" aria-describedby="helpId"
                                                    value="{{ $Applction->Splash_Screen }}" />
                                                @error('Splash_Screen')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="confirmPassword">Logo</label>
                                                <input type="file" name="Logo" id="confirmPassword"
                                                    aria-describedby="helpId" value="{{ $Applction->Logo }}" />
                                                @error('Logo')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div>
                                            <div class="btns-group" id="app-group">
                                                <a href="#" class="btn btn-prev" id="app">Previous</a>
                                                <input type="submit" value="submit" class="btn" id="app"/>
                                            </div>
                                    </div>
                                </div>
                            <div>
                        <div>
                    </div>
                </div>
            </div>
        <div>
@endsection
