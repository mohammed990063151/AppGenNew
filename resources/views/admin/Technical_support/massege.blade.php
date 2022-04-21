@extends('layouts.Admin.app')
@section('BreadCrumbs')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
    {{-- <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">{{__('translation.notification')}}</h3>

        </div> --}}
        <div class="content-header-right text-md-right col-md-6 col-12">
            {{-- @can('role-create') --}}
            {{-- <div class="btn-group">
                <a href="{{ route('notification.create') }}" class="btn btn-round btn-info" type="button"><i
                        class="icon-cog3"></i>
                    {{__('translation.add')}}</a>
            </div> --}}
            {{-- @endcan --}}
        </div>
    </div>
    <div class="content-body">
        
        <!-- Zero configuration table -->
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card">
                            <div class="card-header">
                                    
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                        
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-capitalize col-4">{{_('translation.massges')}}</h6>
                                </div>
                                <div class="">
                                    {{-- {{dd($data->Ticketmassege)}} --}}
                                    @php
                                     $isFirest = true
                                    @endphp
                                        @foreach ($data->Ticketmassege as $ticketmassege)
                                       
                                       
                                       @if( $isFirest  || date('Y-m-d',strtotime($ticketmassege->created_at)) != $perDate   )
                                        <div class="d-flex justify-content-center  ">
                                            <span class="bg-info m-1 text-white py-1 px-2 btn-rounded" style="border-radius: 30px">
                                            {{date('Y-m-d',strtotime($ticketmassege->created_at))}}
                                            @php
                                                $perDate=date('Y-m-d',strtotime($ticketmassege->created_at));
                                                $isFirest = false;
                                            @endphp  
                                            </span>
                                         
                                            </div>
                                        
                                        @endif
                                        {{-- @if($data->sender ==$ticketmassege->sender) --}}
                                             <div class="d-flex justify-content-{{($data->sender ==$ticketmassege->sender)?"start":"end"}}  ">
                                                <span class="bg-primary m-2 text-white py-1 px-3 btn-rounded" style="border-radius: 10px">
                                                {{$ticketmassege->text}}   &nbsp;&nbsp; <sub>   {{ date('h:i A',strtotime($ticketmassege->created_at)) }}</sub>
                                                </span>
                                             
                                                </div>
                                                    {{-- @else 
                                                <div class="d-flex justify-content-end ">
                                                    <span class="bg-primary m-2 text-white py-1 px-3 btn-rounded" style="border-radius: 10px">
                                                        {{$ticketmassege->text}} <sub>   {{$ticketmassege->created_at}}</sub>
                                                </span>
                                                </div>
                                                @endif --}}
                                          
                                        @endforeach
 
                                                {{-- <div >
                                                    
                                                    <input type="text" placeholder="type your massege" style="border:none;background:#f2f2f2;border-radius:5px;width:100%;height:40px"> 
                                                    <a href="{{route('ticket.show', $data->id)}}" class="btn btn-primary btn-sm"
                                                         
                                                            type="button">send</a>  
                                                 </div> --}}
                                                 <form action="{{route('ticket.send')}}" method="post" >
                                                    @csrf
                                                    
                  
                                                
                                                 <div class="card">
                                                    <input id="" placeholder="type your massege" name="text" required>
                                                    <input type="hidden" name="ticket_id" value="{{$data->id}}"/>
                                                    <button type="submit" class="btn btn-primary btn-round">{{__('translation.send')}}</button>  
                                                </div> 
                                                
                                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
            </div>
            </div>
        </div>
            {{-- {!! $Notification->links() !!} --}}
        </section>
        <!--/ Zero configuration table -->
    </div>
</div>
@endsection


@push('scripts')
<script type="text/javascript">
    function deleteConfirmation(iteration) {
                swal.fire({
                    title: "{{__('translation.delete') . __('translation.?') }} ",
                    text: '{{ __('translation.do_you_want_Delete_item')}}' ,
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonText:'{{ __('translation.delete')}}',
                    cancelButtonText:'{{ __('translation.cancel')}}',
                    reverseButtons: !0
                }).then(function (e) {
                    if (e.value === true) {
                        console.log('delted');
                        $('#deleteform'+iteration).submit();
                    } else {
                        e.dismiss;
                    }
                }, function (dismiss) {
                    return false;
                })
            }
</script>

@endpush
