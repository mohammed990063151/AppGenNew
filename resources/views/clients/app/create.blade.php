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
                            <h6 class="text-capitalize col-4"> add applction</h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <span><a href="{{route('application.index')}}" class="btn btn-danger btn-sm"
                                        type="button">Go Back</a></span>
                            </div>
                        </div>


                                <div class="row">
                                    <div class="col-md-3" id="logoname">

                                        <div class="form-group col-md-6 text-center">
                                            <section class="projects" id ="projects">
                                                {{-- <h2 class="title">how are you feeling</h2> --}}
                                 <div class="content">

                                    {{-- <a href="{{route('application.create')}}" class="more-add"> --}}
                            <div class="project-card text-center">

                                    <div class="project-image text-center">
                                        <img id="Logos" height="100" width="150" src="/app/1648470761.jpg">
                                    </div>

                            <div class="project-info">
                        <p class="project-category"> applction</p>
                        <strong class="project-title">
                        {{-- <span>dev</span> --}}
                        {{-- </a> --}}


                        </strong>

                            </div>


                                </div>
                        </div>
                                            </section>
                                    </div>
                                    </div>
                                    <div class="col-md-9">
                                        <form action="{{route('application.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <h5>Applction details</h5>
                                            <div class="row col-md-12">





                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label for="">logo</label>
                                                      <input type="file"
                                                        class="form-control" name="Logo" id="Logo" aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </div>
                                                @error('Logo') <span class="text-danger error">{{ $message
                                                }}</span>@enderror



                                            <div class=" col-md-6">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" name="AppName" id="AppName"
                                                    aria-describedby="helpId" placeholder="">
                                                    @error('AppName') <span class="text-danger error">{{ $message
                                                    }}</span>@enderror
                                            </div></div>
                                            <div class="row col-md-12">
                                            <div class="col-md-6">
                                                <label for=""> Link</label>
                                                <input type="text" class="form-control" name="Link" id=""
                                                    aria-describedby="helpId" placeholder="">
                                                    @error('Link') <span class="text-danger error">{{ $message
                                                    }}</span>@enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Phone</label>
                                                <input type="text" class="form-control" name="Phone" id=""
                                                    aria-describedby="helpId" placeholder="">
                                                    @error('Phone') <span class="text-danger error">{{ $message
                                                    }}</span>@enderror
                                            </div></div>
                                            <div class="row col-md-12">
                                            {{-- <div class="col-md-6">
                                                <label for="">Splash_Screen</label>
                                                <input type="text" class="form-control" name="Splash_Screen" id=""
                                                    aria-describedby="helpId" placeholder="">
                                                    @error('Discrptions') <span class="text-danger error">{{ $message
                                                    }}</span>@enderror
                                            </div> --}}
                                            <div class="col-md-6">
                                                <label for="">WhatsApp</label>
                                                <input type="text" class="form-control" name="WhatsApp" id=""
                                                    aria-describedby="helpId" placeholder="">

                                                @error('WhatsApp') <span class="text-danger error">{{ $message
                                                }}</span>@enderror
                                            </div></div>
                                            {{-- <div class="row col-md-12"> --}}
                                            <div class="col-md-12">
                                                <label> Discrptions</label>
                                                <textarea name="Discrptions" id="" cols="30" rows="10"
                                                    class="form-control"></textarea>
                                                @error('Discrptions') <span class="text-danger error">{{ $message
                                                    }}</span>@enderror </div><br><br>
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


                                        <button class="btn m-1 btn-primary"> Save </button>
                                        </form>

                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </footer>
    </div>
    @endsection
