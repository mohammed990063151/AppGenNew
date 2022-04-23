@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' =>  __('translation.ticket'), 
    'links' => [__('translation.ticket'),  __('translation.ticket'),]
    ])

    @endcomponent
    @endsection
    @section('title')
    {{__('translation.Add ticket')}}
@stop

    @section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="row">
                            <h6 class="text-capitalize col-4">    {{__('translation.Add ticket')}}</h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <span><a href="{{route((Auth::guard('admin')->check()?'admin.':'').'ticket.index')}}" class="btn btn-primary btn-sm"
                                    {{--  --}}
                                        type="button">{{__('translation.go-back')}}</a></span> 
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mt-3">
                                @include('clients.alerts.success')
                                @include('clients.alerts.errors')
                                <form action="{{route('ticket.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                  
                                    <div class="row col-md-12">
                                        <div class="form-group row" style='text-align:left'>

                                            <div class="form-group col-md-6" style='text-align:left'>
                                                <label for="">{{ __('translation.subject') }}</label>
                                                <input type="text" class="form-control" name="subject" id="subject"
                                                     placeholder="">
                                                @error('subject')
                                                <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                                @enderror
                                            </div>    
                                            <div class="col-sm-6">
                                                <label for="" style="text-align:left;">{{ __('translation.topic') }}</label>

                                            <select class="form-control" id="" name="topic_selected" >
                                         <option value="1" >{{__('translation.network')}}</option>        
                                         <option value="2" >{{__('translation.windows')}}</option>        
                                          {{-- <option value="{{$topic->id}}">{{ $topic->topic1}}</option> --}}
                                         </select>
                                            @error('topic')
                                            <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                            @enderror
                                        </div>
                                </div>


                                <div class="form-group row">
                                    <div class="form-group col-md-12" style='text-align:left'>
                                        <label for="w3review" style="text-align:left;">{{ __('translation.content') }}</label>
                                        <textarea name="content" class="form-control" rows="4" cols="50">
                                        
                                        </textarea>
                                        
                                        @error('content')
                                        <small id="helpId" class="form-text text-muted">{{$message}}</small>
                                        @enderror
                                    </div></div></div>


                                <button class="btn m-4 btn-primary" style="text-align:left;"> {{__('translation.Save')}} </button>
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
