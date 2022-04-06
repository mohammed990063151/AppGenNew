@extends('layouts.Admin.app')
@section('BreadCrumbs', 'Subscription Report')
@section('content')
<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-capitalize col-4">clients report </h6>
                        <div class="col-6"></div>
                        {{-- <div class="col-2"> --}}
                            {{-- </div> --}}
                    </div>
                    <div class="table-responsive mt-5">
                        <table class="table align-items-center table-bordered  ">
                            <thead>
                                <tr>
                                    <td>id</td>
                                    <td>name</td>
                                    <td> subscription </td>
                                    <td> application</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($Clients as $key => $Client )
                                <tr>
                                    <td>{{$Client->id}}</td>
                                    <td>{{$Client->name}}</td>
                                    <td>{{$Client->Subscript->count()}}</td>
                                    <td>{{$Client->Applications->count() }}</td>
                                </tr>
                                <tr></tr>
                                @empty
                                <tr>
                                    <td colspan="5"> No data Right Now</td>
                                </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <td>id</td>
                                <td>name</td>
                                <td>subscrption</td>
                                <td>application</td>
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
