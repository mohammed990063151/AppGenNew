@extends('layouts.master')
@section('breadceumbs')
    {{-- <x-bread-crumps> --}}
    {{-- @component('components.bread-crumps', ['head' => ' Updata Scrren One', 'links' => ['profile', ' Updata Scrren One']])
        @section('title')
        Updata Scrren One
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
                                    <a href="{{ route('application.index') }}" class="btn btn-outline-danger btn-icon-only"  type="" >
                                     <i class="bi bi-arrow-left"></i>
                                    </a></span></div>
                            </div>
                        <div class="row no-gutters">
                            <div class="col no-gutters" style="text-align: center;">
                                <iframe class="mobile" id="mobile_id"
                                src="https://ahmedict6.github.io/mobile-app-genrator-app/"  >
                            </iframe>
                            </div>
                            <div class="col no-gutters">
                                <div class="form-group col-md-6" style="display: contents;">
                                <form action="{{route('Screen.update', $Screen->id)}}" method="POST"
                                    enctype="multipart/form-data" class="form">
                                    @csrf
                                    <h1 class="text-center">{{__('translation.My_Screen')}}</h1>
                                    <!-- Progress bar -->
                                    <div class="progressbar">
                                        <div class="progress" id="progress"></div>
                                        <div class="progress-step progress-step-active" data-title="{{__('translation.Intro')}}"></div>
                                        <div class="progress-step" data-title="{{__('translation.Color')}}"></div>
                                        <div class="progress-step" data-title="{{__('translation.Discrptions')}}"></div>
                                    </div>
                                    <!-- Steps -->
                                    <div class="form-step form-step-active">
                                        <div class="input-group">
                                            <label for="image">{{__('translation.image')}}</label>
                                            <input type="file" name="image"   value="{{ $Screen->image}}"/>
                                            @error('image')
                                                <span
                                                    class="text-danger error">{{$message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-group">
                                            <label for="Discrption1st">{{__('translation.Discrptions')}}</label>
                                            <input type="text" name="Discrption1st" value="{{ $Screen->Discrption1st}}" />
                                            @error('Discrption1st')
                                                <span
                                                    class="text-danger error">{{$message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <a href="#" class="btn btn-next width-50 ml-auto" id="app">{{__('translation.Next_')}}</a>
                                        </div>
                                    </div>
                                    <div class="form-step">
                                        <div class="input-group">
                                            <label for="Color">{{__('translation.Color')}}</label>
                                            <input type="color" name="Color" id="color-range" class="color-range" value="{{ $Screen->Color}}"
                                            onchange="this.style.background = this.value; console.log('done')"/>
                                            @error('Color')
                                                <span
                                                    class="text-danger error">{{$message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-group">
                                            <label for="ContainarButtonBarColor">{{__('translation.Containar_ButtonBar_Color')}}</label>
                                            <input type="color" name="ContainarButtonBarColor" id="color-range" class="color-range" value="{{ $Screen->ContainarButtonBarColor}}"
                                            onchange="this.style.background = this.value; console.log('done')"/>
                                            @error('ContainarButtonBarColor')
                                                <span
                                                    class="text-danger error">{{$message }}</span>
                                            @enderror
                                        </div>
                                        <div class="btns-group" id="app-group">
                                            <a href="#" class="btn btn-prev"id="app" >{{__('translation.Previous')}}</a>
                                            <a href="#" class="btn btn-next" id="app" >{{__('translation.Next_')}}</a>
                                        </div>
                                    </div>
                                    <div class="form-step">
                                        <div class="input-group">
                                            <label for="IconsBackgroundColor">{{__('translation.Icons_Background_Color')}}</label>
                                            <input type="color" name="IconsBackgroundColor" id="color-range" class="color-range"  value="{{ $Screen->IconsBackgroundColor}}"
                                            onchange="this.style.background = this.value; console.log('done')" />
                                            @error('IconsBackgroundColor')
                                                <span
                                                    class="text-danger error">{{$message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-group">
                                            <label for="IconsColor">{{__('translation.Icons_Color')}}</label>
                                            <input type="color" name="IconsColor" id="color-range" class="color-range" value="{{ $Screen->IconsColor}}"
                                            onchange="this.style.background = this.value; console.log('done')"/>
                                            @error('IconsColor')
                                                <span
                                                    class="text-danger error">{{$message }}</span>
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
    @endsection
