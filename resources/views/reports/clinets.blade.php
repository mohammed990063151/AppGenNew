@extends('layouts.Admin.app')
@section('BreadCrumbs', __('translation.Clients Report'))
@section('content')
<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-capitalize col-4">{{__('translation.Clients Report')}} </h6>
                        <div class="col-6"></div>
                        {{-- <div class="col-2"> --}}
                            {{-- </div> --}}
                    </div>
                    <div class="table-responsive mt-5">
                        <table class="table align-items-center table-bordered  ">
                            <thead>
                                <tr style="text-align:center">
                                    <td>{{__('translation.id')}}</td>
                                    <td>{{__('translation.Name')}}</td>
                                    <td>{{__('translation.Subscrption')}}</td>
                                    <td>{{__('translation.Application')}}</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($Clients as $key => $Client )
                                <tr style="text-align:center">
                                    <td>{{$Client->id}}</td>
                                    <td>{{$Client->name}}</td>
                                    <td>{{$Client->Subscript->count()}}</td>
                                    <td>{{$Client->Applications->count() }}</td>
                                </tr>
                                <tr></tr>
                                @empty
                                <tr style="text-align:center">
                                    <td colspan="5"> No data Right Now</td>
                                </tr>
                                @endforelse
                            </tbody>
                            <tfoot style="text-align:center">
                                <td>{{__('translation.id')}}</td>
                                <td>{{__('translation.Name')}}</td>
                                <td>{{__('translation.Subscrption')}}</td>
                                <td>{{__('translation.Application')}}</td>
                            </tfoot>
                        </table>
                    </div>
                </div>
                {!! $Clients->links() !!}
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
