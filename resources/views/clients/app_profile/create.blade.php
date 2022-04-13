@extends('layouts.master')
@section('breadceumbs')
    {{-- <x-bread-crumps> --}}
    @component('components.bread-crumps', ['head' => 'Add New profile', 'links' => ['profile', 'Add New profile']])
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
                            <h6 class="text-capitalize col-4"> New profile</h6>

                            <span><a href="{{ route('profile.index') }}" class="btn btn-danger btn-sm" type="button">Go
                                    Back</a></span>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <div class="mt-3">

                                <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h5>Add Profile details</h5>
                                    <div class="row col-md-12">
                                        <div class="form-group col-md-6">
                                            <label for=""> Name</label>
                                            <input type="text" class="form-control" name="Name" id=""
                                                aria-describedby="helpId" placeholder="">
                                                @error('Name') <span class="text-danger error">{{ $message
                                                }}</span>@enderror

                                        </div>


                                        <div class="form-group col-md-6">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" name="Email" id=""
                                                aria-describedby="helpId" placeholder="">
                                                @error('Email') <span class="text-danger error">{{ $message
                                                }}</span>@enderror

                                        </div>


                                    </div>

                                    <div class="row col-md-12">


                                        <div class="form-group col-md-6">
                                            <label for="">Facebook</label>
                                            <input type="text" class="form-control" name="Facebook" id=""
                                                aria-describedby="helpId" placeholder="">
                                                @error('Facebook') <span class="text-danger error">{{ $message
                                                }}</span>@enderror

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Snapchat</label>
                                            <input type="text" class="form-control" name="Snapchat" id=""
                                                aria-describedby="helpId" placeholder="">
                                                @error('Snapchat') <span class="text-danger error">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="row col-md-12">
                                        <div class="form-group col-md-6">
                                            <label for="">Instgram</label>
                                            <input type="text" class="form-control" name="Instgram" id=""
                                                aria-describedby="helpId" placeholder="">
                                                @error('Instgram') <span class="text-danger error">{{ $message
                                                }}</span>@enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Twitter</label>
                                            <input type="text" class="form-control" name="Twitter" id=""
                                                aria-describedby="helpId" placeholder="">
                                                @error('Twitter') <span class="text-danger error">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="row col-md-12">
                                        <div class="form-group col-md-6">
                                            <label for="">TikTok</label>
                                            <input type="text" class="form-control" name="TikTok" id=""
                                                aria-describedby="helpId" placeholder="">
                                                @error('TikTok') <span class="text-danger error">{{ $message
                                                }}</span>@enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Social_Media_Icons_Color</label>
                                            <input type="text" class="form-control" name="Social_Media_Icons_Color" id=""
                                                aria-describedby="helpId" placeholder="">
                                                @error('Social_Media_Icons_Color') <span class="text-danger error">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="row col-md-12">

                                        <div class="form-group col-md-6">
                                            {{-- <label class="my-1 mr-2" for="inlineFormCustomSelectPref">applaction</label> --}}
                                    {{-- <select name="app_id" id="app_id" class="form-control" required> --}}
                                        <input  type="hidden" class="form-control" value="{{ $applcation ->id}}" name="app_id"
                                        aria-describedby="helpId" placeholder="">
                                        {{-- @foreach ($applcation as $applcation)
                                            <option value="{{ $applcation }}"></option>
                                        @endforeach --}}
                                        @error('app_id') <span class="text-danger error">{{ $message
                                        }}</span>@enderror
                                    {{-- </select> --}}
                                            </div>

                                            <div class="container mt-3">

                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="hidden" id="mySwitch"
                                                    name="is_active" value="1" checked>
                                                {{-- <label class="form-check-label" for="mySwitch">active</label> --}}
                                            </div>

                                        </div>

                                        <button class="btn m-1 btn-primary"> Save </button>


                                    </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <iframe class="mobile" id="mobile_id"
                                src="https://ahmedict6.github.io/mobile-app-genrator-app/" />

                            {{-- <div class="container">
                                <div class="chat">
                                    <div class="chat-header">
                                        <div class="profile">
                                            <div class="left">
                                             <img src="/assets/css/img/pp.png" class="pp">

                                                 <i class="fa fa-battery-quarter" aria-hidden="true"></i>
                                                <i class="fa fa-wifi" aria-hidden="true"></i>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>

                                            </div>
                                            <div class="right">
                                                <h5>11:50</h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-box">


                                        <section class="projects" id="projects">


                                            <div class="content">







                                            </div>
                                        </section>

                                        <div class="chat-l">
                                            <div class="mess">
                                                <p>
                                                    <img src="../assets/img/team-1.jpg" alt="profile_image"
                                                        class="logoapp">
                                                    <span>msc</span>
                                                </p>
                                                <div class="check">

                                                </div>
                                            </div>
                                            <div class="sp"></div>
                                        </div>
                                        <div class="chat-l">
                                            <div class="mess">
                                                <p>
                                                    <img src="../assets/img/team-1.jpg" alt="profile_image"
                                                        class="logoapp">
                                                    <span>msc</span>
                                                </p>
                                                <div class="check">

                                                </div>
                                            </div>
                                            <div class="sp"></div>
                                        </div>
                                        <div class="chat-l">
                                            <div class="mess">
                                                <p>
                                                    <img src="../assets/img/team-1.jpg" alt="profile_image"
                                                        class="logoapp">
                                                    <span>msc</span>
                                                </p>
                                                <div class="check">

                                                </div>
                                            </div>
                                            <div class="sp"></div>
                                        </div>


                                    </div>

                                    <div class="navigationes">

                                        <ul>

                                            <li class="list">
                                                <a href="#">
                                                    <span class="icon">
                                                        <ion-icon name="person-outline"></ion-icon>
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="list">
                                                <a href="#">
                                                    <span class="icon">
                                                        <ion-icon name="camera-outline"></ion-icon>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="list active">
                                                <a href="#">
                                                    <span class="icon">
                                                        <ion-icon name="home-outline"></ion-icon>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="list">
                                                <a href="#">
                                                    <span class="icon">
                                                        <ion-icon name="chatbubble-outline"></ion-icon>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="list">
                                                <a href="#">
                                                    <span class="icon">
                                                        <ion-icon name="settings-outline"></ion-icon>
                                                    </span>
                                                </a>
                                            </li>
                                            <div class="indicator"></div>

                                        </ul>
                                    </div>
                                </div>
                            </div> --}}


                        </div>
                    </div>
                </div>
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












{{-- <div class="_3WqBaLCYbnU_M9KuvuJiXF width-100 position-relative" style="height: 692.619px;"><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634431" style="left: 130px; top: 604px; width: 61px; height: 57px;"></div><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634434" style="left: 62px; top: 622px; width: 57px; height: 58px;"></div><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634444" style="left: 202px; top: 622px; width: 56px; height: 58px;"></div><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634445" style="left: 266px; top: 622px; width: 54px; height: 57px;"></div><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634477" style="left: 1px; top: 622px; width: 53px; height: 59px;"></div><div></div></div> --}}
