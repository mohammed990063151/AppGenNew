@extends('layouts.Admin.app')
@section('BreadCrumbs' , 'Add Packages Futrue')
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
                            <span><a href="{{route('packages.index')}}" class="btn btn-danger btn-sm" type="button">Go
                                    Back</a></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mt-3">
                            <form action="{{route('packages.store')}}" method="post">
                                @csrf
                                <h5>Package details</h5>
                                <div class="row col-md-12">

                                    <div class="form-group col-md-6">
                                        <label for="">Package Name</label>
                                        <input type="text" class="form-control" name="Name" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Nmae')
                                        <small id="helpId" class="form-text text-danger text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Package Price</label>
                                        <input type="number" class="form-control" name="Price" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Price')
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Package Duration</label>
                                        <select class="form-control" name="Duration" id="">
                                            <option value="30">1 mounth</option>
                                            <option value="60">2 mounth</option>
                                            <option value="90">3 mounth</option>
                                        </select>
                                        @error('Duration')
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-2"></div>
                                <hr />
                                <h5>Package Name</h5>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Package Text</label>
                                        <input type="text" class="form-control" name="Text" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Text')
                                        <small id="helpId" class="form-text text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Package Icon</label>
                                        <input type="text" class="form-control" name="Icon" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('Icon')
                                        <small id="helpId" class="form-text text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
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
