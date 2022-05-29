@extends('layouts.master')
@section('breadceumbs')
    {{-- <x-bread-crumps> --}}
    @component('components.bread-crumps',
        [
            'head' => __('translation.Application'),
            'links' => [BredCrumpLinks(route('clients.dashboard'), __('translation.Dashboard')), BredCrumpLinks(route('application.index'), __('translation.Application'))],
        ])
    @endcomponent
@endsection

@section('title')
    new applction
@stop
@section('content')

    <div class= "container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">

                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="d-flex justify-content-between">
                            <h6 class="text-capitalize col-4"> {{ __('translation.New_Application') }}</h6>




                            <span><a href="{{ route('application.create') }}" class="btn btn-outline-primary btn-sm"
                                {{--  --}} type="button">{{ __('translation.add_apps') }}</a></span>
                        </div>
                        <div class="table-responsive mt-5" style="display: flex;">

                            <section class="projects" id="projects">

                                {{-- <h2 class="title">how are you feeling</h2> --}}
                                <div class="content row">
                                    @foreach($Applction as $Applction) 
                                        <div class="col-sm-3">
                                            <div>
                                                <a href="{{ route('application.edit', $Applction->id) }}"
                                                    class="more-add">
                                                    <div class="project-card">
                                                        <div class="project-image">
                                                            <img src="/app/{{ $Applction->Logo }}" />
                                                        </div>
                                                        <div class="project-info">
                                                            <p class="project-category">{{ $Applction->AppName }}</p>
                                                            <strong class="project-title">
                                                                {{-- <span>dev</span> --}}
                                                </a>
                                                </strong>
                                            </div>
                                        </div>
                                        {{-- </div> --}}
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>









    @endsection
