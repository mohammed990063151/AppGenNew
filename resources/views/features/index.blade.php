@extends('layouts.Admin.app')
@section('BreadCrumbs', __('translation.Show_Fetures'))
{{-- <x-bread-crumps> --}}
@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="d-flex justify-content-between">
                            <h6 class="text-capitalize col-4">{{ __('translation.Feature_table') }}</h6>
                            <a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                                {{ __('translation.new_Feature') }}
                            </a>
                            {{-- <span><a href="{{route('packages.create')}}" class="btn btn-primary btn-sm"
                                        type="button">add New</a></span> --}}
                        </div>
                    </div>
                    <div class="table-responsive mt-5">
                        <table class="table align-items-center table-bordered">
                            <thead>
                                <tr>
                                    <td>{{ __('translation.id') }}</td>
                                    <td>{{ __('translation.name') }}</td>
                                    <td>{{ __('translation.option') }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($Features as $key => $Feature)
                                    <tr>
                                        <td>{{ $Feature->id }}</td>
                                        <td>{{ $Feature->name }}</td>
                                        <td>
                                            <!-- Modal -->
                                            <form action="{{ route('features.destroy', $Feature->id) }}" method="post"
                                                style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-circle btn-danger"><i
                                                        class="bi bi-trash2-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"> No data Right Now</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <td>id</td>
                                <td>name</td>
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
