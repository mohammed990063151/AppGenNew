@extends('layouts.master')
@section('breadceumbs')
    {{-- <x-bread-crumps> --}}
    {{-- @component('components.bread-crumps', ['head' => 'Add New profile', 'links' => ['Applction', 'Add New profile']])
        @section('title')
            Add New profile
        @stop
    @endcomponent --}}
    @component('components.bread-crumps', [
        'head' => __('translation.Technical support'),
         'links' => [
            BredCrumpLinks( route('clients.dashboard')  ,  __('translation.Dashboard')),
             BredCrumpLinks( route('ticket.index')  , __('translation.Technical support')),
          ]])
@endcomponent

    @endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="col-md-12" style="text-align: end;">
                            <div class="col">
                                <span>
                                    <a href="{{ route('application.index') }}" class="btn btn-primary btn-sm"   type="" style="display: -webkit-inline-box;background-color: #5b6478; border-color: #5b6478;">
                                        {{ __('translation.go back') }}
                                    </a></span></div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col no-gutters" style="text-align: center;">
                                <iframe class="mobile" id="mobile_id"
                                    src="https://ahmedict6.github.io/mobile-app-genrator-app/">
                                </iframe>
                            </div>
                            <div class="col no-gutters">
                                <div class="form-group col-md-6" style="display: contents;">
                                    <form action="{{ route('profile.store') }}" method="POST"
                                        enctype="multipart/form-data" class="form">
                                        @csrf
                                        <h1 class="text-center">My Profile</h1>
                                        <!-- Progress bar -->
                                        <div class="progressbar">
                                            <div class="progress" id="progress"></div>
                                            <div class="progress-step progress-step-active" data-title="Intro"></div>
                                            <div class="progress-step" data-title="Link Social Media"></div>
                                            {{-- <div class="progress-step" data-title="Follow"></div> --}}
                                            <div class="progress-step" data-title="Color"></div>
                                        </div>
                                        <!-- Steps -->
                                        <div class="form-step form-step-active">
                                            <div class="input-group">
                                                <label for="Name">Name</label>
                                                <input type="text" name="Name" id="Name" />
                                                @error('Name')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="Email">Email</label>
                                                <input type="email" name="Email" id="Email" />
                                                @error('Email')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="">
                                                <a href="#" class="btn btn-next width-50 ml-auto" id="app">Next</a>
                                            </div>
                                        </div>
                                        <div class="form-step">
                                            <div class="input-group">
                                                <label for="Facebook">Facebook</label>
                                                <input type="text" name="Facebook" id="Facebook" />
                                                @error('Facebook')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="Instgram"> Instgram</label>
                                                <input type="text" name="Instgram" id="Instgram"
                                                    aria-describedby="helpId" />
                                                @error('Instgram')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="Twitter">Twitter</label>
                                                <input type="text" name="Twitter" id="Twitter" aria-describedby="helpId" />
                                                @error('Twitter')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="TikTok">TikTok </label>
                                                <input type="text" name="TikTok" id="TikTok" aria-describedby="helpId" />
                                                @error('TikTok')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="Snapchat">Snapchat</label>
                                                <input type="text" name="Snapchat" id="Snapchat" />
                                                @error('Snapchat')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="btns-group" id="app-group">
                                                <a href="#" class="btn btn-prev" id="app">Previous</a>
                                                <a href="#" class="btn btn-next" id="app">Next</a>
                                            </div>
                                        </div>
                                        {{-- <div class="form-step">

                                            <div class="btns-group">
                                                <a href="#" class="btn btn-prev">Previous</a>
                                                <a href="#" class="btn btn-next">Next</a>
                                            </div>
                                        </div> --}}
                                        <div class="form-step">
                                            <div class="input-group">
                                                <label for="Social Media botton Color">Social Media botton Color</label>
                                                <input type="color" name="Social_Media_Icons_Color"
                                                    id="Social_Media_Icons_Color" aria-describedby="helpId"  id="color-range" class="color-range" value="#f5f5f5"
                                                    onchange="this.style.background = this.value; console.log('done')"  />
                                                @error('Social_Media_Icons_Color')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                                <input type="hidden" name="is_active" id="is_active"
                                                    aria-describedby="helpId" />
                                                @error('is_active')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                                <input type="hidden" name="app_id" value="{{ $applcation->id }}"
                                                    aria-describedby="helpId" />
                                                @error('app_id')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="btns-group" id="app-group">
                                                <a href="#" class="btn btn-prev" id="app">Previous</a>
                                                <input type="submit" value="Submit" class="btn" id="app" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
