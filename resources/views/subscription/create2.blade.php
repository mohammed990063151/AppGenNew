@extends('layouts.master2')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'Add New Packages' ,
    'links' => ['Dashboard' , 'Packages' , 'Add New Packages']
    ])

    @endcomponent
    @endsection

    @section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="row">
                            <h6 class="text-capitalize col-4"> add new package</h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <span><a href="{{route('packages.index')}}" class="btn btn-danger btn-sm"
                                        type="button">Go Back</a></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-3">
                                <form action="{{route('StoreFeatures' , $id)}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <h5>Package Fetures</h5>
                                       <div class="mt-4"></div>
                                        @foreach ($PackageFetures as $PackageFeture )
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="features[]" id="" value="{{$PackageFeture->id}}" >
                                                {{$PackageFeture->name}}
                                            </label>
                                            </div>
                                        </div>
                                        @endforeach
                                       </div>
                                    </div>
                                    <div class="mt-2"></div>
                                    <button class="btn btn-sm btn-primary"> Next </button>
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
