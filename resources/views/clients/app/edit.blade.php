@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'Updata applction' ,
    'links' => ['applction' ,  'Updata applction']
    ])
    @endcomponent
    @endsection


    @section('title')
    Updata applction
@stop
    @section('content')

    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="row">
                            <h6 class="text-capitalize col-4"> updata applction</h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <span><a href="{{route('application.index')}}" class="btn btn-danger btn-sm"

                                        type="button">Go Back</a></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-3">
   
                                <form action="{{ route( 'application.update' , $Applction->id)}}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    <h5>Applction details</h5>
                                    <div class="row col-md-12">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="">Logo</label>
                                              <input type="file"
                                                class="form-control" name="Logo" id="" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </div>
                                        @error('Logo')
                                        <small id="helpId" class="form-text text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                        <div>
                                            <label>Old logo</label>
                                            <img height="100" width="150" src="/app/{{$Applction->Logo}}">

                                        </div>



                                      <div class="form-group col-md-6">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="AppName" id="" value="{{$Applction->AppName}}"
                                            aria-describedby="helpId" placeholder="">
                                        @error('AppName')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for=""> Link</label>
                                        <input type="text" class="form-control" name="Link" id="" value="{{$Applction->Link}}"
                                            aria-describedby="helpId" placeholder="">
                                        @error('Link')
                                        <small id="helpId" class="form-text text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" name="Phone" id="" value="{{$Applction->Phone}}"
                                            aria-describedby="helpId" placeholder="">
                                        @error('Phone')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Splash_Screen</label>
                                        <input type="text" class="form-control" name="Splash_Screen" id="" value="{{$Applction->Splash_Screen}}"
                                            aria-describedby="helpId" placeholder="">
                                        @error('Splash_Screen')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label> Discrptions</label>
                                        <textarea name="Discrptions" id="" cols="30" rows="10" value="{{$Applction->Discrptions}}"
                                            class="form-control"></textarea>
                                        @error('Discrptions') <span class="text-danger error">{{ $message
                                            }}</span>@enderror
                                    {{-- <div class="form-group col-md-6"> --}}
                                        {{-- <label for="">version</label> --}}
                                        {{-- <input type="hidden" class="form-control" name="version" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('version')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div> --}}
                                       {{-- <div class="form-group col-md-6">
                                        <label for="">user</label>
                                        <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->name }}"
                                            aria-describedby="helpId" placeholder="">
                                        @error('user_id')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div> --}}
                                    <div class="form-group col-md-6">
                                        <label for="">WhatsApp</label>
                                        <input type="text" class="form-control" name="WhatsApp" id="" value="{{$Applction->WhatsApp}}"
                                            aria-describedby="helpId" placeholder="">
                                        @error('WhatsApp')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>




<div class="save">
                                        <button class="btn btn-primary"> Save </button></div>
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
