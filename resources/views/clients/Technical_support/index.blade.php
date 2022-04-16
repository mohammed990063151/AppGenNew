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
                        <h6 class="text-capitalize col-4">{{_('translation.ticket')}}</h6>

                            <span><a href="{{route('ticket.create')}}" class="btn btn-primary btn-sm"
                                {{--  --}}
                                    type="button">{{_('translation.open-ticket')}}</a></span>

                    </div>
                    <div class="table-responsive mt-5">
                        @include('clients.alerts.success')
                        @include('clients.alerts.errors')
                        <table class="table align-items-center table-bordered  ">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>{{_('translation.subject')}}</td>
                                    <td>{{_('translation.topic')}}</td>
                                    <td>{{_('translation.sender')}}</td>
                                    <td>{{_('translation.status')}}</td>
                                    <td>{{_('translation.date')}}</td>
                                    
                                  <td>{{_('translation.options')}}</td>     
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
                                   <td><a href="{{route('ticket.show', $data->id)}}" class="btn btn-primary btn-sm"
                                    {{--  --}}
                                        type="button">{{_('translation.view')}}</a></span> </td>
                                    
                                    <form action="{{route('ticket.create' )}}" method="post" style="display:inline">
                                        @csrf
                                        {{-- @method('DELETE') --}}
      
                                    </form>
                                    
                                    {{-- <a href="{{route('' , $data->id)}}" class="btn btn-info btn-icon-split"> --}}

                                            
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
