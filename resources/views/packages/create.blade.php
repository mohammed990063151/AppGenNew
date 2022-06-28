@extends('layouts.Admin.app')
@section('BreadCrumbs', __('translation.Add_Packages_Futrue'))
@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="row">
                            <h6 class="text-capitalize col-4">{{ __('translation.new_packge') }}</h6>
                            <div class="col-6"></div>
                            <div class="col-2" style="margin-left: 847px;margin-top: -26px;"
                                <span><a href="{{ route('packages.index') }}" class="btn btn-outline-danger btn-sm"
                                        type="button">{{ __('translation.go_back') }}
                                    </a></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mt-3">
                                <form action="{{ route('packages.store') }}" method="post">
                                    @csrf
                                    <h5>{{ __('translation.Package_details') }}</h5>
                                    <div class="row col-md-12">

                                        <div class="form-group col-md-6">
                                            <label for="">{{ __('translation.Package_Name') }}</label>
                                            <input type="text" class="form-control" name="Name" id=""
                                                aria-describedby="helpId" placeholder="">
                                            @error('Nmae')
                                                <small id="helpId"
                                                    class="form-text text-danger text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">{{ __('translation.Package_Price') }}</label>
                                            <input type="number" class="form-control" name="Price" id=""
                                                aria-describedby="helpId" placeholder="">
                                            @error('Price')
                                                <small id="helpId" class="form-text text-muted">Help
                                                    text</small>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">{{ __('translation.Package_Duration') }}</label>
                                            <select class="form-control" name="Duration" id="">
                                                @for ($i = 1; $i < 100; $i++)
                                                    @if ($i % 2 == 0)
                                                        <option value='{{ $i }}'>
                                                            {{ $i }} {{ __('translation.days') }}
                                                        </option>
                                                    @endif
                                                @endfor
                                            </select>
                                            @error('Duration')
                                                <small id="helpId" class="form-text text-muted">Help
                                                    text</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <label class="form-check-label mt-4">
                                                    <input type="checkbox" class="form-check-input" name="is_freetrial"
                                                        id="" value="checkedValue" checked>
                                                    {{ __('translation.free_trial') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2"></div>
                                    <hr />
                                    <h5>{{ __('translation.Package_Name') }}</h5>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">{{ __('translation.Package_Text') }} </label>
                                            <input type="text" class="form-control" name="Text" id=""
                                                aria-describedby="helpId" placeholder="">
                                            @error('Text')
                                                <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">{{ __('translation.Package_icon') }}</label>
                                            <input type="text" class="form-control" name="Icon" id=""
                                                aria-describedby="helpId" placeholder="">
                                            @error('Icon')
                                                <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <button class="btn m-1 btn btn-outline-primary btn-sm ">{{ __('translation.Save') }} </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>
    </div>
@endsection


