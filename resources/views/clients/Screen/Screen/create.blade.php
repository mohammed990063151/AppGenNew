@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'Add screen' ,
    'links' => ['screen' ,  'Add screen']
    ])

    @endcomponent
    @endsection
    @section('title')
    Add screen
@stop

    @section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="row">
                            <h6 class="text-capitalize col-4">add screen</h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <span><a href="{{route('Screen.index')}}" class="btn btn-danger btn-sm"
                                        type="button">Go Back</a></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        @include('clients.alerts.success')
                                        @include('clients.alerts.errors')
                                <form action="{{route('Screen.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h5>Applction details</h5>
                                    <div class="row col-md-12">

                                        <div>

                                        <label>Screen Image</label>
                                        <input type="file" name="screen_image"  required>
                                        @error('screen_image')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                <div class="form-group col-md-6">
                                    <label for="">Screen Title</label>
                                    <input type="text" class="form-control" name="screen_title" id=""
                                        aria-describedby="helpId" placeholder="">
                                    @error('screen_title')
                                    <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Screen Body</label>
                                    <input type="text" class="form-control" name="screen_body" id=""
                                        aria-describedby="helpId" placeholder="">
                                    @error('screen_body')
                                    <small id="helpId" class="form-text text-muted">{{$message}}</small>
                                    @enderror
                                </div>



                                <div class="form-group col-md-6">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Name profile</label>
                            <select name="profile_id" id="profile_id" class="form-control" required>

                                @foreach ($profile as $profile)
                                    <option value="{{ $profile->id }}">{{ $profile->orgname }}</option>
                                @endforeach
                                @error('profile_id')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                            </select>
                                    </div>




                                <div class="form-group col-md-6">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Screen</label>
                            <select name="screen_type"  class="form-control" required>


                                <option value="screen one">screen one</option>
                                <option value="screen two">screen two</option>
                                <option value="screen three">screen three</option>

                                @error('screen_type')
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
