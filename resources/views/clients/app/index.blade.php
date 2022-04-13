@extends('layouts.master')
@section('breadceumbs')
    {{-- <x-bread-crumps> --}}
    @component('components.bread-crumps', ['head' => 'applction ', 'links' => ['applction ']])
    @endcomponent
@endsection

@section('title')
    new applction
@stop
@section('content')


    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="d-flex justify-content-between">
                            <h6 class="text-capitalize col-4"> new applction </h6>

                            {{-- <div class="col-12"> --}}
                                <span><a href="{{ route('application.create') }}" class="btn btn-primary btn-sm"
                                    {{--  --}}
                                        type="button">add apps</a></span>
                            {{-- </div> --}}
                        </div>

                        <div class="table-responsive mt-5" style="display: flex;">
                            @include('clients.alerts.success')
                            @include('clients.alerts.errors')


                            {{-- &emsp;&emsp; --}}
                            {{-- <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="app/add-user.png"  width = "210"
                            height= "150" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Add Applcation</h5>
                                <p class="card-text"></p><br><br><br>
                              <a href="{{route('application.create')}}" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                          <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="app/1648681857.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some  and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div> --}}


                            {{-- <section class="projects" id="projects">
                                <h2 class="title">how are you feeling</h2>
                                <div class="content">

                                    <a href="{{ route('application.create') }}" class="more-add">
                                        <div class="project-card">

                                            <div class="project-image">
                                                <svg style="width:200px;height:128px" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M16.61 15.15C16.15 15.15 15.77 14.78 15.77 14.32S16.15 13.5 16.61 13.5H16.61C17.07 13.5 17.45 13.86 17.45 14.32C17.45 14.78 17.07 15.15 16.61 15.15M7.41 15.15C6.95 15.15 6.57 14.78 6.57 14.32C6.57 13.86 6.95 13.5 7.41 13.5H7.41C7.87 13.5 8.24 13.86 8.24 14.32C8.24 14.78 7.87 15.15 7.41 15.15M16.91 10.14L18.58 7.26C18.67 7.09 18.61 6.88 18.45 6.79C18.28 6.69 18.07 6.75 18 6.92L16.29 9.83C14.95 9.22 13.5 8.9 12 8.91C10.47 8.91 9 9.24 7.73 9.82L6.04 6.91C5.95 6.74 5.74 6.68 5.57 6.78C5.4 6.87 5.35 7.08 5.44 7.25L7.1 10.13C4.25 11.69 2.29 14.58 2 18H22C21.72 14.59 19.77 11.7 16.91 10.14H16.91Z" />
                                                </svg>
                                            </div>

                                            <div class="project-info">
                                                <p class="project-category">Add applction</p>
                                                <strong class="project-title">
                                                    <span>dev</span>
                                    </a>


                                    </strong>

                                </div>


                        </div>
                    </div>
                    </section> --}}





                    <section class="projects" id="projects">
                        {{-- <h2 class="title">how are you feeling</h2> --}}
                        <div class="content">

                            @foreach ($Applction as $Applction)



                                <a href="{{ route('application.edit', $Applction->id) }}" class="more-add">
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

        <div class="menu">
                                    <div class="toggle">
                                        <ion-icon name="add-outline"></ion-icon>
                                    </div>
                                    <li style="--i:0">
                                        <a href="#">
                                            <ion-icon name="home-outline"></ion-icon>
                                        </a>
                                    </li>
                                    <li style="--i:1">
                                        <a href="{{route('profile.create')}}">
                                            <ion-icon name="person-outline"></ion-icon>
                                        </a>
                                    </li>
                                    <li style="--i:2">
                                        <a href="#">
                                            <ion-icon name="settings-outline"></ion-icon>
                                        </a>
                                    </li></div>
        {{-- <div id="tracking_id">
    <div class="inner_tracking title"></div>

</div>

<div class="inner_tracking main"></div>
<div class="child_tracking"> --}}
        {{-- @forelse ($data as  $data ) --}}

        {{-- <h5>heart rate</h5>
<p><span>0</span></p>
</div></div></div> --}}

        {{-- @endforelse --}}
        {{-- <table class="table align-items-center table-bordered  ">
                            <thead>
                                <tr>
                                    <td>id</td>
                                    <td>name</td>
                                    <td>link</td>
                                    <td>version</td>
                                    <td>image</td>
                                    <td>option</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as  $data )
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->link}}</td>
                                    <td>{{$data->version}}</td>
                                    <td><img height="70" width="100" src="/app/{{$data->image}}"></td>
                                    <td> --}}
        <!-- Modal -->
        {{-- <form action="{{route('application.destroy', $data->id)}}" method="post" style="display:inline">

                                            @csrf --}}
        {{-- @method('DELETE') --}}
        {{-- <button class="btn btn-sm btn-circle btn-danger">Delete</button>
                                        </form>

                                        <a href="{{route('application.edit', $data->id)}}" class="btn btn-info btn-icon-split">

                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Edite</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr></tr>
                                @empty
                                <tr>
                                    <td colspan="5"> No data Right Now</td>
                                </tr>
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div> --}}




    </div>
    </div>
    </div>
    </div>
    </div>









@endsection
