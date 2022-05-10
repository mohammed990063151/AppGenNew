@extends('layouts.master')
@section('content')
@section('breadceumbs')
@component('components.bread-crumps', [
    'head' => __('translation.Notification mangement'),
     'links' => [
        BredCrumpLinks( route('clients.dashboard')  ,  __('translation.Dashboard')), 
         BredCrumpLinks( route('notification.index')  , __('translation.Notification')), 
      ]])
@endcomponent
@endsection
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
                                    <div class="card-header">
                                        <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-v font-medium-3"></i></a>
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
                                                <h6 class="text-capitalize col-4">
                                                    {{ __('translation.notifiaction_tabl') }}
                                                </h6>
                                                {{-- <div class="col-2"> --}}
                                                <span><a href="{{ route('notification.create') }}"
                                                        class="btn btn-primary btn-sm"
                                                        type="button">{{ __('translation.add_notifiaction_table') }}</a></span>
                                                {{-- </div> --}}
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered ">
                                                    <thead>
                                                        <tr>
                                                            <th>{{ __('translation.No') }}</th>
                                                            <th>{{ __('translation.name') }}</th>
                                                            <th>{{ __('translation.note') }}</th>
                                                            {{-- Form<th>{{__('translation.area')}}</th> --}}
                                                            <th>{{ __('translation.notify_image') }}</th>
                                                            <th>{{ __('translation.date') }}</th>
                                                            {{-- <th>{{__('translation.')}}</th> --}}
                                                            <th>{{ __('translation.action') }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (count($Notification) > 0)
                                                            @foreach ($Notification as $key => $notification)
                                                                <tr>
                                                                    <td>{{ $key + 1 }}</td>
                                                                    <td>{{ $notification->title }}</td>
                                                                    <td>{{ $notification->notifcation }}</td>
                                                                    {{-- Form<th>{{__('translation.area')}}</th> --}}
                                                                    <th>
                                                                        @if ($notification->getRawOriginal('image'))
                                                                            <img src="{{ $notification->image }}"
                                                                                width='60px' height="60px" alt="">
                                            </div>
                                            </td>
                                        @else
                                            {{ __('translation.no.image') }}
                                            @endif
                                            </th>
                                            <th>{{ $notification->notification_date }}</th>
                                            {{-- <th>{{__('translation.')}}</th> --}}
                                            <td>
                                                <a class="btn btn-circle  btn-xs btn-success"
                                                    href="{{ route('notification.edit', $notification->id) }}">
                                                    <i class="fa fa-refresh"></i> </a>
                                                <form style='display:inline' id='deleteform{{ $key }}'
                                                    action='{{ route('notification.destroy', $notification->id) }}'>
                                                    <button
                                                        onclick="event.preventDefault();deleteConfirmation({{ $key }})"
                                                        class="btn btn-xs btn-circle  btn-danger" type="submit"
                                                        value="Delete">
                                                        <i class="fa fa-trash"></i>
                                                        </i></button>
                                                    {{-- {!! Form::close() !!}
                                            </from>
                                            {{-- @endcan --}}
                                            </td>

                                            </tr>
                                            @endforeach
                                            <tr>
                                            </tr>
                                        @else
                                            <tr class="text-center">
                                                <td colspan="10">{{ __('translation.table_empty') }}</td>
                                            </tr>
                                            @endif
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>{{ __('translation.No') }}</th>
                                                    <th>{{ __('translation.name') }}</th>
                                                    <th>{{ __('translation.note') }}</th>
                                                    {{-- <th>{{__('translation.area')}}</th> --}}
                                                    <th>{{ __('translation.notify_image') }}</th>
                                                    <th>{{ __('translation.date') }}</th>
                                                    <th>{{ __('translation.action') }}</th>
                                                </tr>
                                            </tfoot>
                                            </table>
                                        </div>
                                        @if (count($Notification) > 0)
                                            {{-- @dd('jksa') --}}
                                            {!! $Notification->links() !!}
                                        @endif
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
                title: "{{ __('translation.delete') . __('translation.?') }} ",
                text: '{{ __('translation.do_you_want_Delete_item') }}',
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: '{{ __('translation.delete') }}',
                cancelButtonText: '{{ __('translation.cancel') }}',
                reverseButtons: !0
            }).then(function(e) {
                if (e.value === true) {
                    console.log('delted');
                    $('#deleteform' + iteration).submit();
                } else {
                    e.dismiss;
                }
            }, function(dismiss) {
                return false;
            })
        }
    </script>
@endpush
