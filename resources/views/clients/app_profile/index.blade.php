@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'translation.profile ' ,
    'links' => [ 'profile']
    ])
    @endcomponent
    @endsection
    @section('title')
    {{__('translation.Sign_Up')}}
@stop
@section('content')

<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-capitalize col-4"> {{__('translation.profile')}}</h6>

                            <span><a href="{{route('profile.create')}}" class="btn btn-primary btn-sm"
                                {{--  --}}
                                    type="button"> {{__('translation.add New')}}</a></span>

                    </div>
                    <div class="table-responsive mt-5">
                        @include('clients.alerts.success')
                        @include('clients.alerts.errors')
                        <table class="table align-items-center table-bordered  ">
                            <thead>
                                <tr>
                                    <td> {{__('translation.id')}}</td>
                                    <td> {{__('translation.name')}}</td>
                                    <td> {{__('translation.email')}}</td>
                                    <td> {{__('translation.Whatsapp')}}</td>
                                    <td> {{__('translation.color')}}</td>
                                    <td> {{__('translation.pc')}}</td>
                                    <td> {{__('translation.sc')}}</td>
                                    <td> {{__('translation.Name applaction')}}</td>
                                    <td> {{__('translation.option')}}</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @forelse ($data as  $data )
                                <?php $i++; ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$data->orgname}}</td>
                                    <td>{{$data->orgemail}}</td>
                                    <td>{{$data->ogwhatsapp}}</td>
                                    <td>{{$data->color}}</td>
                                    <td>{{$data->pc}}</td>
                                    <td>{{$data->sc}}</td>
                                    <td> {{$data->app->name?? '-'}}</td>
                                <td>
                                        <!-- Modal -->
                                        <form action="{{route('profile.destroy' , $data->id)}}" method="post" style="display:inline">
                                            @csrf
                                            {{-- @method('DELETE') --}}
                                            <button class="btn btn-sm btn-circle btn-danger">Delete</button>
                                        </form>

                                        <a href="{{route('profile.edit' , $data->id)}}" class="btn btn-info btn-icon-split">

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
                                    <td colspan="5"> {{__('translation. No data Right Now')}}</td>
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
