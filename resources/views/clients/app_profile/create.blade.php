@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'Add New Packages' ,
    'links' => ['Dashboard' , 'Packages' , 'Add New Packages']
    ])

    @endcomponent
    @endsection

    @section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="row">
                            <h6 class="text-capitalize col-4"> add new package</h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <span><a href="{{route('profile.index')}}" class="btn btn-danger btn-sm"
                                        type="button">Go Back</a></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mt-3">
                                <form action="{{route('profile.store')}}" method="post" >
                                    @csrf
                                    <h5>App Profile details</h5>
                                    <div class="row col-md-12">

                                    <div class="form-group col-md-6">
                                        <label for="">App Profile Name</label>
                                        <input type="text" class="form-control" name="orgname" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Nmae')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile email</label>
                                        <input type="text" class="form-control" name="orgemail" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('email')
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="ogwhatsapp" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Nmae')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Package app</label>

                                            {{-- @foreach ($data2 as $data2)
                                    <input  class="form-control"value="{{ $data2->id }}">{{ $data2->app_id }} >
                                        @endforeach --}}
                                        @error('Duration')
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                        @enderror
                                    </div>
                                </div>

                                <button class="btn m-1 btn-primary"> Save </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </footer>
    </div>
    @endsection
