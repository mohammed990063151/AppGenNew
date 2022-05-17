@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-lg-12 mb-lg-0 mb-4">
                    <div class="content-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">

                                    {{-- @dd($applcation) --}}


                                    <div class="card-content collapse show">
                                        <div class="card-body card-dashboard">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="text-capitalize col-4">
                                                    {{ __('translation.notifiaction_table') }}
                                                </h6>
                                                {{-- <div class="col-2"> --}}
                                                <span><a href="{{ route('notification.index') }}"
                                                        class="
                                                        btn btn-outline-danger btn-sm"
                                                        type="button">{{ __('translation.go_back') }}</a></span>
                                                {{-- </div> --}}
                                            </div>


                                            {{-- <div class="card-content collapse show">
                                                <div class="card-body card-dashboard">
                                                    <div class="d-flex justify-content-between">
                                                        <h6 class="text-capitalize col-4">


                                                            {{ __('translation.notifiaction_table') }}
                                                            </< /h6>
                                                            <div class="col-2">

                                                                <span><a href="{{ route('notification.index') }}"
                                                                        class="btn btn-warning mr-1" type="button">
                                                                        {{ __('translation.go_back') }} </a></span>
                                                            </div>
                                                    </div> --}}
                                            <form action="{{ route('notification.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">{{ __('translation.title') }}</label>
                                                            <input type="text" class="form-control" name="title" id=""
                                                                aria-describedby="helpId" placeholder="">
                                                            @error('title')
                                                                <span class="text-danger error">
                                                                    {{$message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="my-1 mr-2"
                                                            for="inlineFormCustomSelectPref"></label>
                                                        <select name="app_id" id="app_id" class="form-control" required>

                                                            @foreach ($applcation as $applcation)
                                                                <option value="{{ $applcation->id }}">
                                                                    {{ $applcation->AppName }}</option>
                                                            @endforeach
                                                            @error('app_id')
                                                                <small id="helpId"
                                                                    class="form-text text-danger text-muted">{{ $message }}</small>
                                                            @enderror
                                                        </select>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <label> {{ __('translation.content') }}</label>
                                                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                                                        @error('content')
                                                            <span class="text-danger error">
                                                                {{$message
                                                                }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">{{ __('translation.photo') }}</label>
                                                                <input type="file" class="form-control" name="photo" id=""
                                                                    aria-describedby="helpId" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class=" d-flex  align-self-start mr-auto">
                                                    <div class=" m-1 mt-3">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                                            href="{{ route('notification.index') }}" type="button"
                                                            class="btn btn-outline-primary btn-sm">
                                                            <i class="la la-remove"></i>
                                                            {{ __('translation.cancel') }}
                                                        </a>
                                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                        <button type="submit" class="btn btn-outline-primary btn-sm" >
                                                            <i class="la la-check"></i>
                                                            {{ __('translation.send') }}
                                                        </button>
                                                    </div>
                                                </div>
                                        </div>

                                    </div>
                                    </form>
                                    @push('script')
                                        <script>
                                            document.addEventListener('livewire:load', function() {
                                                $('.select2').select2();
                                                $('select').select2();
                                            });
                                        </script>
                                    @endpush
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
