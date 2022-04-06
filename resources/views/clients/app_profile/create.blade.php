@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'Add New profile' ,
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
                            <h6 class="text-capitalize col-4"> Add New profile</h6>
                              {{-- <div class="row col-md-12"> --}}
                                {{-- <div class="wrap"> --}}
                                    {{-- <div class="container landscape-1">

                                      <header class="top">
                                        <h1 class="title">Welcome, Chris</h1>
                                        <time datetime="14-02-2020">14 February, 2020</time>
                                      </header>

                                      <div class="notification">
                                        <p>
                                          <strong>
                                            <img src="http://co0kie.github.io/codepen/mindful/notification.svg" alt="">
                                            Activities today
                                          </strong>
                                          Meditation and relaxation
                                        </p>
                                        <small>8:00 p.m.</small>
                                      </div>

                                      {{-- <section class="content">
                                        <h2 class="heading">What do you need today?</h2>
                                        <div class="slides">
                                          <article class="article"> --}}
                                            {{-- <img src="http://co0kie.github.io/codepen/mindful/buddhist-yoga-pose.svg" alt="">
                                            <div class="text">
                                              <h6>Meditation Zen</h6>
                                              <p>Recommended in the morning</p>
                                            </div>
                                          </article>
                                        </div>
                                      </section>  --}}

                                      {{-- <nav class="navigation">
                                        <a href="#">
                                          <img src="http://co0kie.github.io/codepen/mindful/home.svg" alt="">
                                        </a>
                                        <a href="#">
                                          <img src="http://co0kie.github.io/codepen/mindful/moon.svg" alt="">
                                        </a>
                                        <a href="#">
                                          <img src="http://co0kie.github.io/codepen/mindful/user.svg" alt="">
                                        </a>
                                      </nav>

                                    </div> --}}



                                <span><a href="{{route('profile.index')}}" class="btn btn-danger btn-sm"
                                        type="button">Go Back</a></span>
                            </div>
                        </div>
                        <div class="row mt-4">
<div class="col-lg-5">


    <div class="container">
        <div class="chat">
            <div class="chat-header">
                <div class="profile">
                    <div class="left">
                        <img src="/assets/css/img/arrow.png" class="arrow">
                        {{-- <img src="/assets/css/img/pp.png" class="pp"> --}}
                        <i class="fa fa-battery-quarter" aria-hidden="true"></i>
                        <i class="fa fa-wifi" aria-hidden="true"></i>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="right">
                        <img src="/appassets/css/img/video.png" class="icon">
                        {{-- <img src="/assets/css/img/phone.png" class="icon"> --}}
                        <h5>11:50</h5>  </div>
                </div>
            </div>
            <div class="chat-box">
                {{-- <div class="chat-r">
                    <div class="sp"></div>
                    <div class="mess mess-r">
                        <p><img src="/assets/css/img/emoji-1.png" class="emoji">
                            Hi, mohammed
                        </p>
                        <div class="check">
                            <span>4:00 PM</span>
                            <img src="/assets/css/img/check-2.png">
                        </div>
                    </div>
                </div> --}}

                <section class="projects" id ="projects">
                    {{-- <h2 class="title">how are you feeling</h2> --}}
<div class="content">

@foreach($data2 as $data2)
<div class="project-card">
    <div class="project-image">
        <img  src="/app/{{$data2->image}}"/>
    </div>
<div class="project-info">
<p class="project-category">{{$data2->name}}</p>
<strong class="project-title">
{{-- <span>dev</span> --}}
<a href="{{route('application.edit', $data2->id)}}" class="more-add">edite</a>
<a href="#" class="more-details">add profile</a>

</strong>

</div>


    </div>   @endforeach
</div>
                </section>


                <div class="chat-l">
                    <div class="mess">
                        <p>
                            <img src="../assets/img/team-1.jpg" alt="profile_image" class="logoapp">
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
                            <img src="../assets/img/team-1.jpg" alt="profile_image" class="logoapp">
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
                            <img src="../assets/img/team-1.jpg" alt="profile_image" class="logoapp">
                            <span>msc</span>
                        </p>
                        <div class="check">

                        </div>
                    </div>
                    <div class="sp"></div>
                </div>


            </div>


            <div class="chat-footer">
                <img src="/assets/css/img/emo.png" class="emo">
                <textarea placeholder="Type a message"></textarea>
                <div class="icons">
                    <img src="/assets/css/img/attach file.png">
                    <img src="/assets/css/img/camera.png">
                </div>
                <img src="/assets/css/img/mic.png" class="mic">
            </div>
        </div>
    </div>



</div>




                        <div class="col-lg-7 mb-lg-0 mb-4">
                            <div class="mt-3">

                                <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h5>Add Profile details</h5>





                                    <div class="row col-md-12">


                                    <div class="form-group col-md-6">
                                        <label for="">App Profile Name</label>
                                        <input type="text" class="form-control" name="orgname" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('orgname')
                                        <span class="text-danger error">{{ $message
                                        }}</span>@enderror

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile email</label>
                                        <input type="text" class="form-control" name="orgemail" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('orgemail')
                                        <span class="text-danger error">{{ $message
                                        }}</span>@enderror

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile whatsapp</label>
                                        <input type="text" class="form-control" name="ogwhatsapp" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('ogwhatsapp')
                                        <span class="text-danger error">{{ $message
                                        }}</span>@enderror

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile color</label>
                                        <input type="text" class="form-control" name="color" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('color')
                                        <span class="text-danger error">{{ $message
                                        }}</span>@enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile pc</label>
                                        <input type="text" class="form-control" name="pc" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('pc')
                                        <span class="text-danger error">{{ $message
                                        }}</span>@enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">App Profile sc</label>
                                        <input type="text" class="form-control" name="sc" id=""
                                            aria-describedby="helpId" placeholder="">
                                        @error('sc')
                                        <span class="text-danger error">{{ $message
                                        }}</span>@enderror
                                    </div>

                                    {{-- <div class="form-group col-md-6">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">applaction</label>
                            <select name="app_id" id="app_id" class="form-control" required>

                                @foreach ($applcation as $applcation)
                                    <option value="{{ $applcation->id }}">{{ $applcation->name }}</option>
                                @endforeach
                                @error('app_id')
                                <span class="text-danger error">{{ $message
                                }}</span>@enderror
                            </select>
                                    </div> --}}

                                                                  <button class="btn m-1 btn-primary"> Save </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div></div>
            </div>
        </div>
        </footer>
    </div>
    @endsection



    {{-- <div class="_3WqBaLCYbnU_M9KuvuJiXF width-100 position-relative" style="height: 692.619px;"><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634431" style="left: 130px; top: 604px; width: 61px; height: 57px;"></div><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634434" style="left: 62px; top: 622px; width: 57px; height: 58px;"></div><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634444" style="left: 202px; top: 622px; width: 56px; height: 58px;"></div><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634445" style="left: 266px; top: 622px; width: 54px; height: 57px;"></div><div class="_1tbN39d0nYr3WRpHWsC6Ov" data-testid="hotspot-109634477" style="left: 1px; top: 622px; width: 53px; height: 59px;"></div><div></div></div> --}}
