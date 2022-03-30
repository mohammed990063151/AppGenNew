@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'Updata profile' ,
    'links' => ['profile' ,  'Updata profile']
    ])
    @endcomponent
    @endsection

    @section('content')
    @include('clients.alerts.success')
@include('clients.alerts.errors')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="row">
                            <h6 class="text-capitalize col-4"> Updata profile</h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <span><a href="{{route('profile.index')}}" class="btn btn-danger btn-sm"

                                        type="button">Go Back</a></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-3">
                                <form action="{{route('profile.update' , $data->id)}}" method="post" enctype="multipart/form-data">

                                    @csrf
                                    <h5>Updata Profile </h5>
                                    <div class="row col-md-12">

                                    <div class="form-group col-md-6">
                                        <label for="">App Profile Name</label>
                                        <input type="text" class="form-control" name="orgname" value="{{$data->orgname}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('orgname')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile email</label>
                                        <input type="text" class="form-control" name="orgemail" value="{{$data->orgemail}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('orgemail')
                                        <small id="helpId" class="form-text text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="ogwhatsapp" value="{{$data->ogwhatsapp}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('ogwhatsapp')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="color" value="{{$data->color}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('color')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="pc" value="{{$data->pc}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('pc')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="sc" value="{{$data->sc}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('sc')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">applaction</label>
                                <select name="app_id" id="app_id" class="form-control" required>
                                    <option value="" selected disabled> -- Locate applaction--</option>
                                    @foreach ($data2 as $data2)
                                        <option value="{{ $data2->id }}">{{ $data2->name }}</option>
                                    @endforeach
                                </select>
                                        </div>
                                        <button class="btn btn-primary"> Save </button>
                                    </div>
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
