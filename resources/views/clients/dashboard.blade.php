@extends('layouts.master')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="row space-between">
                            <h6 class="text-capitalize col-4">{{ __('translation.packages_table') }}</h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <span><a href="{{ route('profile.create') }}" class="btn btn-primary btn-sm"
                                        {{--  --}} type="button">{{ __('translation.add_New') }}</a></span>
                            </div>
                        </div>
                        <div class="table-responsive mt-5">
                            <table class="table align-items-center table-bordered  ">
                                <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>name</td>
                                        <td>price</td>
                                        <td>duration</td>
                                        <td>status</td>
                                        <td>option</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @forelse ($Packages as $key => $Package )
                                <tr>
                                    <td>{{$Package->id}}</td>
                                    <td>{{$Package->name}}</td>
                                    <td>{{$Package->price}}</td>
                                    <td>{{$Package->duration}}</td>
                                    <td>{!! $Package->StatusWithSpan() !!}</td>
                                    <td> --}}
                                    <!-- Modal -->
                                    <form action="" method="post" style="display:inline">
                                        {{-- {{route('packages.destroy' , $Package->id)}} --}}
                                        {{-- @csrf
                                            @method('DELETE') --}}
                                        <button class="btn btn-sm btn-circle btn-danger"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                    <a href="" class="btn btn-sm btn-circle btn-xs ">
                                        {{-- {{$Package->status ? 'btn-warning' :'btn-success'}} --}}
                                        {{-- {{route('packages.status' , $Package->id)}} --}}
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                    <a href="" class="btn btn-info btn-icon-split">
                                        {{-- {{route('EditFeatures' , $Package->id)}} --}}
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                        <span class="text">{{ __('translation.Show_Pacakage_Feture') }}</span>
                                    </a>
                                    </td>
                                    </tr>
                                    <tr></tr>
                                    {{-- @empty --}}
                                    <tr>
                                        <td colspan="5">{{ __('translation.No_data_Right_Now') }}
                                        </td>
                                    </tr>
                                    {{-- @endforelse --}}
                                </tbody>
                                <tfoot>
                                    <td>id</td>
                                    <td>name</td>
                                    <td>price</td>
                                    <td>duration</td>
                                    <td>status</td>
                                    <td>option</td>
                                </tfoot>
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
