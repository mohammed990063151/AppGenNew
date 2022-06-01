@extends('layouts.master')
@section('breadceumbs')
    {{-- <x-bread-crumps> --}}
    {{-- @component('components.bread-crumps', ['head' => 'Add New profile', 'links' => ['Applction', 'Add New profile']])
        @section('title')
            Add New profile
        @stop
    @endcomponent --}}
   

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
                                    <a href="{{ route('application.index') }}"   class="btn btn-outline-danger btn-icon-only" type=""  >
                                        <i class="bi bi-arrow-left"></i>
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
                                        <h1 class="text-center"> {{__('translation.My_Profile')}}</h1>
                                        <!-- Progress bar -->
                                        <div class="progressbar">
                                            <div class="progress" id="progress"></div>
                                            <div class="progress-step progress-step-active" data-title="{{__('translation.Intro')}}"></div>
                                            <div class="progress-step" data-title="{{__('translation.Link_Social_Media')}}"></div>
                                            {{-- <div class="progress-step" data-title="Follow"></div> --}}
                                            <div class="progress-step" data-title="{{__('translation.Color')}}"></div>
                                        </div>
                                        <!-- Steps -->
                                        <div class="form-step form-step-active">
                                            <div class="input-group">
                                                <label for="Name">{{__('translation.Name')}}</label>
                                                <input type="text" name="Name" id="Name" />
                                                @error('Name')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="Email">{{__('translation.Email')}}</label>
                                                <input type="email" name="Email" id="Email" />
                                                @error('Email')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="">
                                                <a href="#" class="btn btn-next width-50 ml-auto" id="app">{{__('translation.Next_')}}</a>
                                            </div>
                                        </div>
                                        <div class="form-step">
                                            <div class="input-group">
                                                <label for="Facebook">{{__('translation.Facebook')}}</label>
                                                <input type="text" name="Facebook" id="Facebook" />
                                                @error('Facebook')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="Instgram"> {{__('translation.Instgram')}}</label>
                                                <input type="text" name="Instgram" id="Instgram"
                                                    aria-describedby="helpId" />
                                                @error('Instgram')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="Twitter">{{__('translation.Twitter')}}</label>
                                                <input type="text" name="Twitter" id="Twitter" aria-describedby="helpId" />
                                                @error('Twitter')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="TikTok">{{__('translation.TikTok')}} </label>
                                                <input type="text" name="TikTok" id="TikTok" aria-describedby="helpId" />
                                                @error('TikTok')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="Snapchat">{{__('translation.Snapchat')}}</label>
                                                <input type="text" name="Snapchat" id="Snapchat" />
                                                @error('Snapchat')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="btns-group" id="app-group">
                                                <a href="#" class="btn btn-prev" id="app">{{__('translation.Previous')}}</a>
                                                <a href="#" class="btn btn-next" id="app">{{__('translation.Next_')}}</a>
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
                                                <label for="Social Media botton Color">{{__('translation.Social_Media_botton_Color')}}</label>
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
                                                <a href="#" class="btn btn-prev" id="app">{{__('translation.Previous')}}</a>
                                                <input type="submit" value="{{__('translation.submit')}}" class="btn" id="app" />
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
