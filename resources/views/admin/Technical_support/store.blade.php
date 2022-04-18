@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => ' ticket' ,
    'links' => ['ticket' ]
    ])
    @endcomponent
    @endsection
    @section('title')

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
                            <h6 class="text-capitalize col-4"> </h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <span><a href="{{route('ticket.index')}}" class="btn btn-danger btn-sm"

                                        type="button">Go Back</a></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-3">
                                @include('clients.alerts.success')
                                @include('clients.alerts.errors')
                                <form action="{{route('ticket.store' )}}" method="post" enctype="multipart/form-data">

                                    @csrf
                                    <h5>ticket </h5>
                                    <div class="row col-md-12">

                                   
                                    <div class="form-group col-md-6">
                                        <label for=""></label>
                                        <input type="text" class="form-control" name="orgemail" value="{{$data->sender}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('sender')
                                        <small id="helpId" class="form-text text-muted">{{$titel}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for=""></label>
                                        <input type="text" class="form-control" name="ogwhatsapp" value="{{$data->status}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('status')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$status}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for=""></label>
                                        <input type="text" class="form-control" name="topic" value="{{$data->topic}}" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('topic')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>

                                    </div>
                                
                                        </div>
                                        <button class="btn btn-primary"> send </button>
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



