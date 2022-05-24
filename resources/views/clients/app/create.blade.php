@extends('layouts.master')
@section('breadceumbs')
    {{-- <x-bread-crumps> --}}
        @component('components.bread-crumps', [
            'head' => __('translation.Technical support'),
             'links' => [
                BredCrumpLinks( route('clients.dashboard')  ,  __('translation.Dashboard')),
                 BredCrumpLinks( route('ticket.index')  , __('translation.Technical support')),
              ]])
    @endcomponent
@endsection
@section('title')
    My applction
@stop
@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="col-md-12" style="text-align: end;">
                            <span><a href="{{ route('application.index') }}" class=" " type="">
                                </a></span>
                        </div>
                        <div class="row no-gutters">
                            <div class="col no-gutters" style="text-align: center;">
                                <iframe class="mobile" id="mobile_id"
                                    src="https://ahmedict6.github.io/mobile-app-genrator-app/">
                                </iframe>
                            </div>
                            <div class="col no-gutters">
                                <div class="form-group col-md-6" style="display: contents;">
                                    <form action="{{ route('application.store') }}" method="post"
                                        enctype="multipart/form-data" class="form">
                                        @csrf
                                        <h1 class="text-center">My App</h1>
                                        <!-- Progress bar -->
                                        <div class="progressbar">
                                            <div class="progress" id="progress"></div>
                                            <div class="progress-step progress-step-active" data-title="Intro"></div>
                                            <div class="progress-step" data-title="Discrptions"></div>
                                            <div class="progress-step" data-title="Logo"></div>
                                        </div>
                                        <!-- Steps -->
                                        {{-- <div class="form-step form-step-active">
                                            <div class="input-group">
                                                <label for="username">Name</label>
                                                <input type="text" name="user_id" value="{{ $Applction->id }}" />
                                                @error('AppName')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div> --}}
                                        <div class="form-step form-step-active">
                                            <div class="input-group">
                                                <label for="username">Name</label>
                                                <input type="text" name="AppName" id="username" />
                                                @error('AppName')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="position">Phone</label>
                                                <input type="text" name="Phone" id="position" />
                                                @error('Phone')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="WhatsApp">WhatsApp</label>
                                                <input type="text" name="WhatsApp" id="WhatsApp" />
                                                @error('WhatsApp')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div>
                                            <div class="">
                                                <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
                                            </div>
                                        </div>
                                        <div class="form-step">
                                            <div class="input-group">
                                                <label for="phone">Link</label>
                                                <input type="text" name="Link" id="phone" />
                                                @error('Link')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="email">Discrptions</label>
                                                <input type="text" name="Discrptions" id="email" />
                                                @error('Discrptions')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div>
                                            <div class="btns-group">
                                                <a href="#" class="btn btn-prev">Previous</a>
                                                <a href="#" class="btn btn-next">Next</a>
                                            </div>
                                        </div>
                                        <div class="form-step">
                                            <div class="input-group">
                                                <label for="password">Splash Screen</label>
                                                <input type="file" name="Splash_Screen" id="phone"
                                                    aria-describedby="helpId" />
                                                @error('Splash_Screen')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="confirmPassword">Logo</label>
                                                <input type="file" name="Logo" id="confirmPassword"
                                                    aria-describedby="helpId" />
                                                @error('Logo')
                                                    <span
                                                        class="text-danger error">{{$message }}</span>
                                                @enderror
                                                <input type="hidden" name="user_id" value="{{Auth::User()->name}}"
                                                    aria-describedby="helpId" />
                                                @error('user_id')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="btns-group">
                                                <a href="#" class="btn btn-prev">Previous</a>
                                                <input type="submit" value="submit" class="btn" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                            <div>
                            @endsection
