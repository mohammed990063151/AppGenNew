@extends('layouts.master')
@section('breadceumbs')
    {{-- <x-bread-crumps> --}}
    @component('components.bread-crumps', ['head' => 'Edite screen', 'links' => ['Screen ', ' Edite screen']])
    @endcomponent
@endsection
@section('title')
    Edite screen
@stop
@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="row">
                            <h6 class="text-capitalize col-4"> Edite screen</h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <span><a href="{{ route('Screen.index') }}" class="btn btn-danger btn-sm" type="button">Go
                                        Back</a></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-3">

                                <form action="{{ route('Screen.update1', $Screen->id) }}" method="POST"
                                    enctype="multipart/form-data">

                                    @csrf
                                    <div class="row col-md-12">

                                        <div class="row col-md-6">
                                            <h5>screen three</h5>
                                            <div>


                                            </div>

                                            <div class="form-group col-md-6">
                                                <div class="form-group">
                                                    <label for="">logo</label>
                                                    <input type="file" class="form-control" name="image"
                                                        value="{{ $Screen->image }}" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            @error('image')
                                                <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                            @enderror

                                            <div class="form-group col-md-6">
                                                <label for="">Discrption1st</label>
                                                <input type="text" class="form-control" name="Discrption1st"
                                                    value="{{ $Screen->Discrption1st }}" aria-describedby="helpId"
                                                    placeholder="">
                                                @error('Discrption1st')
                                                    <small id="helpId"
                                                        class="form-text text-danger text-muted">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Color</label>
                                                <input type="text" class="form-control" name="Color"
                                                    value="{{ $Screen->Color }}" aria-describedby="helpId" placeholder="">
                                                @error('Color')
                                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="">Containar Button BarColor</label>
                                                <input type="text" class="form-control" name="ContainarButtonBarColor"
                                                    value="{{ $Screen->ContainarButtonBarColor }}"
                                                    aria-describedby="helpId" placeholder="">
                                                @error('ContainarButtonBarColor')
                                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Icons Background Color</label>
                                                <input type="text" class="form-control" name="IconsBackgroundColor"
                                                    value="{{ $Screen->IconsBackgroundColor }}" aria-describedby="helpId"
                                                    placeholder="">
                                                @error('IconsBackgroundColor')
                                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Icons Color</label>
                                                <input type="text" class="form-control" name="IconsColor"
                                                    value="{{ $Screen->IconsColor }}" aria-describedby="helpId"
                                                    placeholder="">
                                                @error('IconsColor')
                                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                                @enderror
                                            </div>




                                            <div class="form-group col-md-6">

                                                <input type="hidden" class="form-control" value="{{ $Screen->id }}"
                                                    name="app_id" aria-describedby="helpId" placeholder="">


                                                <button class="btn m-1 btn-primary"> Save </button>
                                            </div>
                                            {{-- <div class="form-group col-md-6">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Name profile</label>
                                <select name="profile_id" id="profile_id" class="form-control" required>

                                    @foreach ($profile as $profile)
                                        <option value="{{ $profile->id }}">{{$profile->Name}}</option>
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
                                        </div> --}}
                                        </div>

                                        <div class="form-group col-md-6">
                                            <iframe class="mobile" id="mobile_id"
                                                src="https://ahmedict6.github.io/mobile-app-genrator-app/" />


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
