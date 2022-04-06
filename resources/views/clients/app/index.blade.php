@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'applction table ' ,
    'links' => [ 'applction ']
    ])
    @endcomponent
    @endsection

    @section('title')
    applction
@stop
@section('content')




<div class="container-fluid py-4">

    <div class="row mt-4">

        <div class="col-lg-12 mb-lg-0 mb-4">

            <div class="card z-index-2 h-100">

                <div class="card-header pb-0 pt-3 bg-transparent">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-capitalize col-4">applction table</h6>

                        {{-- <div class="col-2"> --}}
                            <span><a href="{{route('application.create')}}" class="btn btn-primary btn-sm"
                                    type="button">add applction</a>
                            </span>
                        {{-- </div> --}}
                    </div>
                    <div class="table-responsive mt-5">
                        @include('clients.alerts.success')
                        @include('clients.alerts.errors')


                    <section class="projects" id ="projects">
                        {{-- <h2 class="title">how are you feeling</h2> --}}
<div class="content">

    @foreach($data as $data)
    <div class="project-card">
        <div class="project-image">
            <img  src="/app/{{$data->image}}"/>
        </div>
    <div class="project-info">
<p class="project-category">{{$data->name}}</p>
<strong class="project-title">
{{-- <span>dev</span> --}}
<a href="{{route('application.edit', $data->id)}}" class="more-add">edite</a>
<a href="#" class="more-details">add profile</a>

</strong>

    </div>


        </div>   @endforeach
</div>
                    </section>
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

</div>--}}

</div>
</div>
</div>
</div>
</div>









@endsection
