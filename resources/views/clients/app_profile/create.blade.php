@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'Add New profile' ,
    'links' => ['profile' , 'Add New profile']
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
                            <h6 class="text-capitalize col-4"> Add New profile</h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <span><a href="{{route('profile.index')}}" class="btn btn-danger btn-sm"
                                        type="button">Go Back</a></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-3">
                                @include('clients.alerts.success')
                                @include('clients.alerts.errors')
                                <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h5>Add Profile details</h5>
                                    <div class="row col-md-12">


                                    <div class="form-group col-md-6">
                                        <label for="">App Profile Name</label>
                                        <input type="text" class="form-control" name="orgname" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('orgname')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile email</label>
                                        <input type="text" class="form-control" name="orgemail" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('orgemail')
                                        <small id="helpId" class="form-text text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="ogwhatsapp" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('ogwhatsapp')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile color</label>
                                        <input type="text" class="form-control" name="color" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('color')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile pc</label>
                                        <input type="text" class="form-control" name="pc" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('pc')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile sc</label>
                                        <input type="text" class="form-control" name="sc" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('sc')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">applaction</label>
                            <select name="app_id" id="app_id" class="form-control" required>
                                <option value="" selected disabled> -- Locate applaction--</option>
                                @foreach ($applcation as $applcation)
                                    <option value="{{ $applcation->id }}">{{ $applcation->name }}</option>
                                @endforeach
                                @error('app_id')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                            </select>
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
