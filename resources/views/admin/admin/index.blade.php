@extends('layouts.Admin.app')
@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
@endsection
@section('BreadCrumbs', __('translation.Show Users'))
@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="d-flex justify-content-between">
                            <h6 class="text-capitalize col-4">{{ __('translation.Admin_Table') }}</h6>
                            <a type="button" class="btn btn-sm btn btn-outline-primary" href='{{ route('admin.create') }}'
                                data-toggle="modal" data-target="#exampleModal">
                                {{ __('translation.New_admin') }}
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
                                    <td>{{ __('translation.email') }}</td>
                                    <td>{{ __('translation.Photo') }}</td>
                                    <td>{{ __('translation.option') }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($Admins as $key => $Admin)
                                    <tr style="text-align: center">
                                        <td>{{ $Admin->id }}</td>
                                        <td>{{ $Admin->name }}</td>
                                        <td>{{ $Admin->email }}</td>
                                        <td>{{ $Admin->photo }}</td>
                                        <td>
                                            <!-- Modal -->
                                            <form action="{{ route('admin.destroy', $Admin->id) }}" method="post"
                                                style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-circle btn-danger"><i
                                                        class="bi bi-trash-fill"></i></button>
                                            </form>
                                            <a href="{{ route('admin.edit', $Admin->id) }}"
                                                class="btn btn-sm btn-icon btn-info"><i class="bi bi-pen-fill"></i> </a>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                @empty
                                    <tr>
                                        <td colspan="5">{{ __('translation.No_data_Right_Now') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot style="text-align: center">
                                <td>{{ __('translation.id') }}</td>
                                <td>{{ __('translation.name') }}</td>
                                <td>{{ __('translation.email') }}</td>
                                <td>{{ __('translation.Photo') }}</td>
                                <td>{{ __('translation.option') }}</td>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('admin.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">name</label>
                                <input type="name" name='name' class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name='email' class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name='password' class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Password confirem</label>
                                    <input type="password" name='password_confrim' class="form-control"
                                        id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
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
    </div>
@endsection
