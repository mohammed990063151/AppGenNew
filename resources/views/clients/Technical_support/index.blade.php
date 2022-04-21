@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'ticket ' ,
    'links' => [ 'ticket']
    ])
    @endcomponent
    @endsection
    @section('title')

@stop
@section('content')

<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-capitalize col-4">{{__('translation.ticket')}}</h6>

                            <span><a href="{{route((Auth::guard('admin')->check()?'admin.':'').'ticket.create')}}" class="btn btn-primary btn-sm"
                                {{--  --}}
                                    type="button">{{__('translation.open-ticket')}}</a></span>

                    </div>
                    <div class="table-responsive mt-5">
                        @include('clients.alerts.success')
                        @include('clients.alerts.errors')
                        <table class="table align-items-center table-bordered  ">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>{{__('translation.subject')}}</td>
                                    <td>{{__('translation.topic')}}</td>
                                    <td>{{__('translation.sender')}}</td>
                                    <td>{{__('translation.status')}}</td>
                                    <td>{{__('translation.date')}}</td>
                                  <td>{{__('translation.options')}}</td>     
                                </tr>
                            </thead>
                            <tbody>                                    
                                    @forelse ($allTicket as $i => $data )
                             <tbody>
                                <tr>

                                    <td>{{$i}}</td>
                                    <td>{{$data->subject}}</td>
                                    <td>{{($data->Topic->topicname) ?? ' - '}}</td>
                                    <td>{{($data->user->name) ?? ' - '}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>{{$data->created_at}}</td>
                                   <td><a href="{{route( (Auth::guard('admin')->check()?'admin.':'').'ticket.show', $data->id)}}" class="btn btn-primary btn-sm"
                                    {{--  --}}
                                        type="button">{{__('translation.view')}}</a></span> </td>
                                    
                                    <form action="{{route((Auth::guard('admin')->check()?'admin.':'').'ticket.create' )}}" method="post" style="display:inline">
                                        @csrf
                                        {{-- @method('DELETE') --}}
                                    </form>
                                </tr>
                             </tbody>
                             @empty
                             <p>No users</p>
                             @endforelse
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
