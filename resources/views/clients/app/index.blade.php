@extends('layouts.master')

@section('content')

<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <div class="row space-between">
                        <h6 class="text-capitalize col-4">packages table</h6>
                        <div class="col-6"></div>
                        <div class="col-2">
                            <span><a href="{{route('application.create')}}" class="btn btn-primary btn-sm"
                                {{--  --}}
                                    type="button">add New</a></span>
                        </div>
                    </div>
                    <div class="table-responsive mt-5">
                        <table class="table align-items-center table-bordered  ">
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
                                    <td><img height="100" width="150" src="/app/{{$data->image}}"></td>
                                    <td>
                                        <!-- Modal -->
                                        <form action="{{route('application.destroy' , $data->id)}}" method="post" style="display:inline">

                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-circle btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>

                                        <a href="{{route('application.edit' , $data->id)}}" class="btn btn-info btn-icon-split">
                                            
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Show Pacakage Feture</span>
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
