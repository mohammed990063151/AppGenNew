@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-11">
                        <div class="card">
                            <div id="project-info" class="card-body row">
                                <div class="project-info-count col-sm-12">

                                    <div class="project-info-text pt-1">
                                        <h5>{{ __('translation.logo_image') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                </div>
                                <form action="{{ route('storeOrganizationProfile') }}" method="post"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        @csrf
                                        <div class="col-12">
                                            <div class="insights px-2 ">
                                                <fieldset>
                                                    <label for="">{{ __('translation.logo_images') }}</label>
                                                    <input type="file" name="logoo" class="form-control" />
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
                                                    <input name="name" type="text"
                                                        value='{{ $OrganizationProfile->name }}' class="form-control">
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
                                                    <label for="">{{ __('translation.emial') }}</label>
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
                                            <div class="col-lg-6 col-md-12">
                                                <div class="insights px-2">
                                                    <fieldset>
                                                        <label for="">{{ __('translation.Phone') }}</label>
                                                        <input name="phone_no"
                                                            value="{{ $OrganizationProfile->phone_no }}" type="text"
                                                            class="form-control">
                                                        @error('phone_no')
                                                            <small class="text-danger">
                                                                {{ $message }}
                                                            </small>
                                                        @enderror
                                                    </fieldset>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mt-2 col-1 px-2">
                                                        <input type="submit" class="btn btn-block btn-info"
                                                            value="{{ __('translation.Save') }}">
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
@endsection
