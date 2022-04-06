@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'translation.Add New profile' ,
    'links' => ['profile' , 'Add New profile']
    ])
@section('title')
Add New profile
@stop

    @endcomponent
    @endsection

    @section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="d-flex justify-content-between">
                            <h6 class="text-capitalize col-4"> {{__('translation.Add New profile')}}</h6>

                                <span><a href="{{route('profile.index')}}" class="btn btn-danger btn-sm"
                                        type="button">{{__('translation.go back')}}</a></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-3">
                                @include('clients.alerts.success')
                                @include('clients.alerts.errors')
                                <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h5>{{__('translation.Add Profile details')}}</h5>
                                    <div class="row col-md-12">


                                    <div class="form-group col-md-6">
                                        <label for="">{{__('translation.App Profile Name')}}</label>
                                        <input type="text" class="form-control" name="orgname" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('orgname')
                                        <span class="text-danger error">{{ $message
                                        }}</span>@enderror

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">{{__('translation.App Profile email')}}</label>
                                        <input type="text" class="form-control" name="orgemail" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('orgemail')
                                        <span class="text-danger error">{{ $message
                                        }}</span>@enderror

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">{{__('translation.App Profile whatsapp')}}</label>
                                        <input type="text" class="form-control" name="ogwhatsapp" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('ogwhatsapp')
                                        <span class="text-danger error">{{ $message
                                        }}</span>@enderror

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">{{__('translation.App Profile color')}}</label>
                                        <input type="text" class="form-control" name="color" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('color')
                                        <span class="text-danger error">{{ $message
                                        }}</span>@enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">{{__('translation.App Profile pc')}}</label>
                                        <input type="text" class="form-control" name="pc" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('pc')
                                        <span class="text-danger error">{{ $message
                                        }}</span>@enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">{{__('translation.App Profile sc')}}</label>
                                        <input type="text" class="form-control" name="sc" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('sc')
                                        <span class="text-danger error">{{ $message
                                        }}</span>@enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">{{__('translation.applaction')}}</label>
                            <select name="app_id" id="app_id" class="form-control" required>

                                @foreach ($applcation as $applcation)
                                    <option value="{{ $applcation->id }}">{{ $applcation->name }}</option>
                                @endforeach
                                @error('app_id')
                                <span class="text-danger error">{{ $message
                                }}</span>@enderror
                            </select>
                                    </div>
                                <button class="btn m-1 btn-primary"> {{__('translation.Save')}} </button>
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












    {{-- <div class="_3WqBaLCYbnU_M9KuvuJiXF width-100 position-relative" style="height: 692.619px;"><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634431" style="left: 130px; top: 604px; width: 61px; height: 57px;"></div><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634434" style="left: 62px; top: 622px; width: 57px; height: 58px;"></div><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634444" style="left: 202px; top: 622px; width: 56px; height: 58px;"></div><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634445" style="left: 266px; top: 622px; width: 54px; height: 57px;"></div><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634477" style="left: 1px; top: 622px; width: 53px; height: 59px;"></div><div></div></div> --}}
