@extends('layouts.master')
@section('breadceumbs')
    {{-- <x-bread-crumps> --}}
    {{-- @component('components.bread-crumps', ['head' => 'Add New Scrren Three', 'links' => ['profile', 'Add New Scrren
        Three']])
        @section('title')
            Add New Scrren Three
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
                                    <a href="{{ route('application.index') }}" class="btn btn-primary btn-sm"  type="" style="display: -webkit-inline-box;background-color: #5b6478;border-color: #5b6478;">
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
                                    <form action="{{ route('Screen.store2') }}" method="post" enctype="multipart/form-data"
                                        class="form">
                                        @csrf
                                        <h1 class="text-center">My Screen Three </h1>
                                        <!-- Progress bar -->
                                        <div class="progressbar">
                                            <div class="progress" id="progress"></div>
                                            <div class="progress-step progress-step-active" data-title="Intro"></div>
                                            <div class="progress-step" data-title="Colors"></div>
                                            <div class="progress-step" data-title="Follow"></div>
                                        </div>
                                        <!-- Steps -->
                                        <div class="form-step form-step-active">
                                            <div class="input-group">
                                                <label for="image">image</label>
                                                <input type="file" name="image" id="image" aria-describedby="helpId" />
                                                @error('image')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="Discrption1st">Discrption</label>
                                                <input type="text" name="Discrption1st" id="Discrption1st" />
                                                @error('Discrption1st')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="">
                                                <a href="#" class="btn btn-next width-50 ml-auto" id="app">Next</a>
                                            </div>
                                        </div>
                                        <div class="form-step">
                                            <div class="input-group">
                                                <label for="Color">Color</label>
                                                <input type="color" name="Color" id="color-range" class="color-range"
                                                    value="#f5f5f5"
                                                    onchange="this.style.background = this.value; console.log('done')" />
                                                @error('Color')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="ContainarButtonBarColor">Containar ButtonBar Color</label>
                                                <input type="color" name="ContainarButtonBarColor" id="color-range"
                                                    class="color-range" value="#f5f5f5"
                                                    onchange="this.style.background = this.value; console.log('done')" />
                                                @error('ContainarButtonBarColor')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="btns-group" id="app-group">
                                                <a href="#" class="btn btn-prev" id="app">Previous</a>
                                                <a href="#" class="btn btn-next"id="app">Next</a>
                                            </div>
                                        </div>
                                        <div class="form-step">
                                            <div class="input-group">
                                                <label for="IconsBackgroundColor"> Icons Background Color</label>
                                                <input type="color" name="IconsBackgroundColor" id="color-range"
                                                    class="color-range" value="#f5f5f5"
                                                    onchange="this.style.background = this.value; console.log('done')" />
                                                @error('IconsBackgroundColor')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <label for="IconsColor">Icons Color</label>
                                                <input type="color" name="IconsColor" id="color-range"
                                                    class="color-range" value="#f5f5f5"
                                                    onchange="this.style.background = this.value; console.log('done')" />
                                                @error('IconsColor')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <input type="hidden" name="app_id" id="app_id"
                                                    value="{{ $Screen->id }}" />
                                                @error('is_active')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                                <input type="hidden" name="profile_id" value="{{ $Screen->id }}" />
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
        @endsection
