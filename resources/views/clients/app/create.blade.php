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
                                <span><a href="{{route('application.index')}}" class="btn btn-danger btn-sm"
                                        type="button">Go Back</a></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mt-3">
                                <form action="{{route('application.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h5>App Profile details</h5>
                                    <div class="row col-md-12">

                                        <div>
                                            <label>Image</label>
                                            <input type="file" name="image"  required>
                                        </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile Name</label>
                                        <input type="text" class="form-control" name="name" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Name')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile email</label>
                                        <input type="text" class="form-control" name="link" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('email')
                                        <small id="helpId" class="form-text text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="version" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Nmae')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
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
