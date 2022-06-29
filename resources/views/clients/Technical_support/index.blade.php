@extends('layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps', [
        'head' => __('translation.Technical support'),
         'links' => [
            BredCrumpLinks( route('clients.dashboard')  ,  __('translation.Dashboard')),
             BredCrumpLinks( route('ticket.index')  , __('translation.Technical support-ticket')),
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
                    <div class="d-flex justify-content-between" style="    margin-bottom: -4rem";>
                        <h6 class="text-capitalize col-4" style="margin-bottom: ;margin: revert;"
                        >{{__('translation.ticket')}}</h6>

                        <span><a href="{{route((Auth::guard('admin')->check()?'admin.':'').'ticket.create')}}" class="btn btn-outline-primary btn-sm"
                            {{--  --}}
                                type="button" style="    margin-bottom: -4rem;
                                ">{{__('translation.open new ticket')}}</a></span>

                    </div>
                    <div class="table-responsive mt-5">
                        @include('clients.alerts.success')
                        @include('clients.alerts.errors')
                        {{-- @component('components.table-components' , ['jksa'])
                        @endcomponent --}}
                        {{-- @php --}}
                        // $row = [

                        //     'id' => 'id',
                        //     'subject' => 'subject',
                        //     'Topic' => 'Topic->topicname',
                        //     'name' => 'user->name',
                        //     'status' => 'status',
                        //     'option' => [
                        //         'edit' => ['icon'=>'bi bi-apple', 'class'=>'bg-danger','route'=>''],
                        //         'delete' => ['icon'=>'bi bi-archive', 'class'=>'bg-warning','route'=>''],
                        //         'status' =>  ['icon'=>'bi bi-arrow-up', 'class'=>'bg-success','route'=>''],
                        {{-- //     ]];
                        // @endphp
                        // <x-table-components :model="$allTicket" :rows="$row"/>
                         --}}
                        <div class="table-responsive" style="margin-bottom: 18px;">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                <tr style="font-weight: 600;text-align:center" >
                                    <td>{{__('translation.No')}}</td>
                                    <td>{{__('translation.Subject')}}</td>
                                    <td>{{__('translation.Topic')}}</td>
                                    <td>{{__('translation.Sender')}}</td>
                                    <td>{{__('translation.Status')}}</td>
                                    <td>{{__('translation.Date')}}</td>
                                <td>{{__('translation.action')}}</td>
                                </tr>
                            </thead>
                        <tbody>


                               @forelse ($allTicket as $i => $data )

                                <tr style="text-align:center">

                                    <td>{{$i+1}}</td>
                                    <td>{{$data->subject}}</td>
                                    <td>{{($data->Topic->topicname) ?? ' - '}}</td>
                                    <td>{{($data->user->name) ?? ' - '}}</td>
                                    <td>{{__('translation.' . $data->status);}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td><a href="{{route( (Auth::guard('admin')->check()?'admin.':'').'ticket.show', $data->id)}}" class="btn btn-outline-primary btn-icon-only"
                                        {{--  --}}
                                             type="button"><svg style="width:18px;height:18px;" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M12 4.5C7 4.5 2.7 7.6 1 12C2.7 16.4 7 19.5 12 19.5H13.1C13 19.2 13 18.9 13 18.5C13 17.9 13.1 17.4 13.2 16.8C12.8 16.9 12.4 17 12 17C9.2 17 7 14.8 7 12S9.2 7 12 7 17 9.2 17 12C17 12.3 17 12.6 16.9 12.9C17.6 12.7 18.3 12.5 19 12.5C20.2 12.5 21.3 12.8 22.3 13.5C22.6 13 22.8 12.5 23 12C21.3 7.6 17 4.5 12 4.5M12 9C10.3 9 9 10.3 9 12S10.3 15 12 15 15 13.7 15 12 13.7 9 12 9M19 21V19H15V17H19V15L22 18L19 21" />
                                            </svg></i>
                                            </a></span> </td>

                                    <form action="{{route((Auth::guard('admin')->check()?'admin.':'').'ticket.create' )}}" method="post" style="display:inline">
                                        @csrf
                                        {{-- @method('DELETE') --}}
                                     </form>
                                </tr>
                             {{-- </tbody> --}}
                             @empty
                             <p>
                                <tr class="text-center">
                                    <td colspan="10">{{ __('translation.table_empty') }}</td>
                                </tr></p>
                             @endforelse



        </tbody>
        <tfoot>
            <tr style="text-align:center">
                <th>{{ __('translation.No') }}</th>
                <th>{{ __('translation.Subject') }}</th>
                <th>{{ __('translation.Topic') }}</th>
                {{-- <th>{{__('translation.area')}}</th> --}}
                <th>{{ __('translation.Sender') }}</th>
                <th>{{ __('translation.Status') }}</th>
                <th>{{ __('translation.Date') }}</th>
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
