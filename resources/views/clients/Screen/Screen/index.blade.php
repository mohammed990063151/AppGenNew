@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'screen ' ,
    'links' => [' screen']
    ])
    @endcomponent
    @endsection
@section('content')

<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-capitalize col-4">screen table</h6>

                            <span><a href="{{route('Screen.create')}}" class="btn btn-primary btn-sm"
                                {{--  --}}
                                    type="button">add New</a></span>

                    </div>
                    <div class="table-responsive mt-5">
                        <table class="table align-items-center table-bordered  ">
                            <thead>
                                <tr>
                                    <td>id</td>
                                    <td>Screen Image</td>
                                    <td>Screen Title</td>
                                    <td>Screen Body</td>
                                    <td>Screen Type</td>
                                    <td>profile name</td>
                                    <td>option</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @forelse ($Screen as  $Screen )
                                <?php $i++; ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td><img height="70" width="100" src="/screen/{{$Screen->screen_image}}"></td>
                                    <td>{{$Screen->screen_title}}</td>
                                    <td>{{$Screen->screen_body}}</td>
                                    <td>{{$Screen->screen_type}}</td>
                                    <td> {{$Screen->app_profile->orgname?? '-'}}</td>
                                    <td>
                                        <!-- Modal -->
                                        <form action="{{route('Screen.destroy' , $Screen->id)}}" method="post" style="display:inline">
                                            @csrf
                                            {{-- @method('DELETE') --}}
                                            <button class="btn btn-sm btn-circle btn-danger">Delete</button>
                                        </form>

                                        <a href="{{route('Screen.edit' , $Screen->id)}}" class="btn btn-info btn-icon-split">

                                            <span class="icon text-white-50">
                                                {{-- <i class="fas fa-info-circle"></i> --}}
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

</div>

</div>
</div>
</div>
</div>
</div>









@endsection
