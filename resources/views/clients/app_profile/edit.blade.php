@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'Updata profile' ,
    'links' => ['profile' ,  'Updata profile']
    ])
    @endcomponent
    @endsection
    @section('title')
    Updata profile
    @stop
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
                                
                                <form action="{{route('profile.update',$profile->id)}}" method="post" enctype="multipart/form-data">

                                    @csrf
                                    <h5>Updata Profile </h5>
                                    <div class="row col-md-12">

                                    <div class="form-group col-md-6">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="Name" value="{{$profile->Name}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Name')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile email</label>
                                        <input type="text" class="form-control" name="Email" value="{{$profile->Email}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Email')
                                        <small id="helpId" class="form-text text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="Facebook" value="{{$profile->Facebook}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Facebook')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="Snapchat" value="{{$profile->Snapchat}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Snapchat')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="Instgram" value="{{$profile->Instgram}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Instgram')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="Twitter" value="{{$profile->Twitter}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Twitter')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="TikTok" value="{{$profile->TikTok}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('TikTok')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="Social_Media_Icons_Color" value="{{$profile->Social_Media_Icons_Color}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Social_Media_Icons_Color')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="container mt-3">

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="mySwitch"
                                                name="is_active" value="1" checked>
                                            <label class="form-check-label" for="mySwitch">active</label>
                                        </div>

                                    </div>
                                    {{-- <div class="form-group col-md-6">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">applaction</label>
                                <select name="app_id" id="app_id" class="form-control" required>
                                    <option value="" selected disabled> -- Locate applaction--</option>
                                    @foreach ($applcation as $applcation)
                                        <option value="{{ $applcation->id }}">{{ $applcation->name }}</option>
                                    @endforeach
                                </select>
                                        </div> --}}
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
