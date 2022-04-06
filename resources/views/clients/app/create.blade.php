@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => ' Add applction' ,
    'links' => ['Dashbard' , 'Add New applction']
    ])

    @endcomponent
    @endsection
    @section('title')
    Add applction
@stop

    @section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="row">
                            <h6 class="text-capitalize col-4"> {{__('translation.applction table')}}</h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <span><a href="{{route('application.index')}}" class="btn btn-danger btn-sm"
                           type="button">{{__('translation.Go Back')}}</a></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mt-3">
                                @include('clients.alerts.success')
                                @include('clients.alerts.errors')
                                <form action="{{route('application.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h5>{{__('translation.Name')}}</h5>
                                    <div class="row col-md-12">

                                        <div>
                                            <label>Image</label>
                                            <input type="file" name="image"  required>
                                            @error('image')
                                            <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                            @enderror
                                        </div>
                                    <div class="form-group col-md-6">
                                        <label for="">{{__('translation.link')}}</label>
                                        <input type="text" class="form-control" name="name" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('name')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for=""> {{__('translation.logo')}}</label>
                                        <input type="text" class="form-control" name="link" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('link')
                                        <small id="helpId" class="form-text text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">{{__('translation.version')}}</label>
                                        <input type="text" class="form-control" name="version" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('version')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>


                                <button class="btn m-1 btn-primary"> {{__('translation.save')}} </button>
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
