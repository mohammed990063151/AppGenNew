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
                                @include('clients.alerts.success')
                                @include('clients.alerts.errors')
                                <form action="{{route('application.update' , $data->id)}}" method="post" enctype="multipart/form-data">

                                    @csrf
                                    <h5>Applction details</h5>
                                    {{-- <div class="row col-md-12"> --}}
                                        {{-- <div>
                                            <label>Old logo</label>
                                            <img height="100" width="150" src="/app/{{$data->image}}">

                                        </div>

  		                                    <div> --}}
                                      {{-- <label>New logo</label>
                                      <input type="file" name="image"> --}}

                                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for=""> Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$data->name}}" id="name"
                                            aria-describedby="helpId" placeholder="">
                                        @error('name')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="">link</label>
                                        <input type="text" class="form-control" name="link" value="{{$data->link}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('link')
                                        <small id="helpId" class="form-text text-muted">{{$message}}</small>
                                        @enderror
                                    </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="">logo</label>
                                      <input type="file"
                                        class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                @error('image')
                                <small id="helpId" class="form-text text-muted">{{$message}}</small>
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
