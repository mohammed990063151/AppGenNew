@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps', [
        'head' => __('translation.Technical support'),
         'links' => [
            BredCrumpLinks( route('clients.dashboard')  ,  __('translation.Dashboard')), 
             BredCrumpLinks( route('ticket.index')  , __('translation.Technical support')), 
          ]])
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
                        <h6 class="text-capitalize col-4">{{__('translation.Technicalsupport tickets')}}</h6>

                            <span><a href="{{route((Auth::guard('admin')->check()?'admin.':'').'ticket.create')}}" class="btn btn-primary btn-sm"
                                {{--  --}}
                                    type="button">{{__('translation.open-ticket')}}</a></span>

                    </div>
                    <div class="table-responsive mt-5">
                        @include('clients.alerts.success')
                        @include('clients.alerts.errors')
                      
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                <tr>
                                    <td>{{__('translation.no')}}</td>
                                    <td>{{__('translation.subject')}}</td>
                                    <td>{{__('translation.topic')}}</td>
                                    <td>{{__('translation.sender')}}</td>
                                    <td>{{__('translation.status')}}</td>
                                    <td>{{__('translation.date')}}</td>
                                  <td>{{__('translation.action')}}</td>     
                                </tr>
                            </thead>
                        <tbody>
                               @forelse ($allTicket as $i => $data )
                        
                                <tr>

                                    <td>{{$i}}</td>
                                    <td>{{$data->subject}}</td>
                                    <td>{{($data->Topic->topicname) ?? ' - '}}</td>
                                    <td>{{($data->user->name) ?? ' - '}}</td>
                                    <td>{{__('translation.' . $data->status);}}</td>
                                    <td>{{$data->created_at}}</td>
                                   <td><a href="{{route( (Auth::guard('admin')->check()?'admin.':'').'ticket.show', $data->id)}}" class="btn btn-primary btn-sm"
                                    {{--  --}}
                                         type="button">{{__('translation.view')}}</a></span> </td>
                                    
                                    <form action="{{route((Auth::guard('admin')->check()?'admin.':'').'ticket.create' )}}" method="post" style="display:inline">
                                        @csrf 
                                        {{-- @method('DELETE') --}}
                                     </form>
                                </tr>
                             {{-- </tbody> --}}
                             @empty
                             <p>No users</p>
                             @endforelse 


        </tbody>
        <tfoot>
            <tr>
                <th>{{ __('translation.No') }}</th>
                <th>{{ __('translation.subject') }}</th>
                <th>{{ __('translation.topic') }}</th>
                {{-- <th>{{__('translation.area')}}</th> --}}
                <th>{{ __('translation.sender') }}</th>
                <th>{{ __('translation.status') }}</th>
                <th>{{ __('translation.date') }}</th>
                <th>{{ __('translation.action') }}</th>
            </tr>
        </tfoot>                                   
                                    {{-- @forelse ($allTicket as $i => $data )
                        
                                <tr>

                                    <td>{{$i}}</td>
                                    <td>{{$data->subject}}</td>
                                    <td>{{($data->Topic->topicname) ?? ' - '}}</td>
                                    <td>{{($data->user->name) ?? ' - '}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>{{$data->created_at}}</td>
                                   <td><a href="{{route( (Auth::guard('admin')->check()?'admin.':'').'ticket.show', $data->id)}}" class="btn btn-primary btn-sm"
                                    {{--  --}}
                                        {{-- type="button">{{__('translation.view')}}</a></span> </td>
                                    
                                    <form action="{{route((Auth::guard('admin')->check()?'admin.':'').'ticket.create' )}}" method="post" style="display:inline">
                                        @csrf --}}
                                        {{-- @method('DELETE') --}}
                                    {{-- </form>
                                </tr>
                             </tbody>
                             @empty
                             <p>No users</p>
                             @endforelse --}}
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
