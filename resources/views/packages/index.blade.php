@extends('layouts.Admin.app')
@section('BreadCrumbs', __('translation.Show_Packages'))
@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="d-flex justify-content-between">
                            <h6 class="text-capitalize col-4">{{ __('translation.Packages_Table') }}</h6>
<a href="{{route('packages.create')}}" type="button" class="btn btn-sm btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
    {{ __('translation.New_Package') }}
</a>
                            {{-- <span><a href="{{route('packages.create')}}" class="btn btn-primary btn-sm"
                                        type="button">add New</a></span> --}}
                        </div>
                    </div>
                    <div class="table-responsive mt-5">
                        <table class="table align-items-center table-bordered  ">
                            <thead>
                                <tr style="text-align: center">
                                    <td>{{ __('translation.id') }}</td>
                                    <td>{{ __('translation.name') }}</td>
                                    <td>{{ __('translation.price') }}</td>
                                    <td>{{ __('translation.duration') }}</td>
                                    <td>{{ __('translation.Status') }}</td>
                                    <td>{{ __('translation.option') }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($Packages as $key => $Package)
                                    <tr style="text-align: center">
                                        <td>{{ $Package->id }}</td>
                                        <td>{{ $Package->name }}</td>
                                        <td>{{ $Package->price }}</td>
                                        <td>{{ $Package->duration }}</td>
                                        <td>{!! $Package->StatusWithSpan() !!}</td>
                                        <td>
                                            <!-- Modal -->
                                            <form action="{{ route('packages.destroy', $Package->id) }}" method="post"
                                                style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-circle  btn btn-outline-danger btn-icon-only"> <i
                                                        class="bi bi-trash2-fill"></i> </button>
                                            </form>
                                            <a href="{{ route('packages.status', $Package->id) }}"
                                                class="btn  btn-sm btn-circle  {{ $Package->status ? 'btn-warning' : 'btn btn-outline-success btn-icon-only' }}"><i
                                                    class="bi bi-toggle-on"></i></a>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                @empty
                                    <tr>
                                        <td colspan="5">{{ __('translation.No_data') }} </td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot style="text-align: center">

                                <td>{{ __('translation.id') }}</td>
                                <td>{{ __('translation.name') }}</td>
                                <td>{{ __('translation.price') }}</td>
                                <td>{{ __('translation.duration') }}</td>
                                <td>{{ __('translation.Status') }}</td>
                                <td>{{ __('translation.option') }}</td>
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





