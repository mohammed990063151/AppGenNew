@extends('layouts.Admin.app')
@section('BreadCrumbs', 'Orgnaization Profile')
@section('content')
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">

                        <div class="card">

                            <!-- project-info -->
                            <div id="project-info" class="card-body row">

                                <div class="project-info-count col-sm-12">
                                    {{-- <div class="project-info-icon"> --}}
                                    <div style="width: 250px; height:250px; margin: auto">
                                        <img src="{{ $OrganizationProfile->logo }}" alt=""
                                            style="width: 100%; height: 100%">
                                    </div>
                                    {{-- <div wire:click="" class="project-info-sub-icon">
                                        <span class="la la-edit"></span>
                                    </div> --}}
                                    {{-- </div> --}}
                                    <div class="project-info-text pt-1">
                                        <h5>{{ __('translation.logo.image') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- project-info -->
                            <div class="card-body">
                                <div class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                    {{-- <span>Egal's Eye View Of Project Status</span> --}}
                                </div>
                                {{-- @include('includes.dashboard.notifications') --}}
                                <form action="{{ route('storeOrganizationProfile') }}" method="post"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        @csrf
                                        <div class="col-12">
                                            <div class="insights px-2 ">
                                                <fieldset>
                                                    <label for="">{{ __('translation.logo.image') }}</label>
                                                    <input type="file" name="logoo" class="form-control" accept=".svg" />
                                                    @error('logo')
                                                        <small class="text-danger">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6 col-md-12">
                                            <div class="insights px-2">
                                                <fieldset>
                                                    <label for="">{{ __('translation.name') }}</label>
                                                    <input name="name" type="text" value='{{ $OrganizationProfile->name }}'
                                                        class="form-control">
                                                    @error('name')
                                                        <small class="text-danger">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="insights px-2">
                                                <fieldset>
                                                    <label for="">{{ __('translation.email') }}</label>
                                                    <input name="email" type="text"
                                                        value="{{ $OrganizationProfile->email }}" class="form-control">
                                                    @error('email')
                                                        <small class="text-danger">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="insights px-2">
                                                <fieldset>
                                                    <label for="">{{ __('translation.fiexed_price') }}</label>
                                                    <input name="fixed_subscribtion_price"
                                                        value="{{ $OrganizationProfile->fixed_subscribtion_price }}"
                                                        type="text" class="form-control">
                                                    @error('fiexed_price')
                                                        <small class="text-danger">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="insights px-2">
                                                <fieldset>
                                                    <label for="">{{ __('translation.app_domain') }}</label>
                                                    <input name="domain" type="text"
                                                        value="{{ $OrganizationProfile->domain }}" class="form-control">
                                                    @error('domain')
                                                        <small class="text-danger">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row p-0 m-0">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="insights px-2">
                                                    <fieldset>
                                                        <label for="">{{ __('translation.address') }}</label>
                                                        <input name="address" value="{{ $OrganizationProfile->address }}"
                                                            type="text" class="form-control">
                                                        @error('address')
                                                            <small class="text-danger">
                                                                {{ $message }}
                                                            </small>
                                                        @enderror
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-12">
                                                <div class="insights px-2">
                                                    <fieldset>
                                                        <label for="">{{ __('translation.phone') }}</label>
                                                        <input name="phone_no" value="{{ $OrganizationProfile->phone_no }}"
                                                            type="text" class="form-control">
                                                        @error('phone_no')
                                                            <small class="text-danger">
                                                                {{ $message }}
                                                            </small>
                                                        @enderror
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-12">
                                                <div class="insights px-2">
                                                    <fieldset>
                                                        <label for="">{{ __('translation.whatsapp_no') }}</label>
                                                        <input name="whatsapp_no"
                                                            value="{{ $OrganizationProfile->whatsapp_no }}" type="text"
                                                            class="form-control">
                                                        @error('whatsapp_no')
                                                            <small class="text-danger">
                                                                {{ $message }}
                                                            </small>
                                                        @enderror
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-2 col-12 px-2">
                                                    <input type="submit" class="btn btn-block btn-info"
                                                        value="{{ __('translation.save') }}">
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>
@endsection
