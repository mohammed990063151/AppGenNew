@extends('layouts.Admin.app')
@section('BreadCrumbs', 'Admins Mangement')
    @section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="d-flex justify-content-between">
                            <h6 class="text-capitalize col-4">Admin table</h6>
                            <div class="col-2">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    new Admin
                                  </button>
                                {{-- <span><a href="{{route('packages.create')}}" class="btn btn-primary btn-sm"
                                        type="button">add New</a></span> --}}
                            </div>
                        </div>
                        <div class="table-responsive mt-5">
                            <table class="table align-items-center table-bordered  ">
                                <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>name</td>
                                        <td>emial</td>
                                        <td>photo</td>
                                        <td>option</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($Admins as $key => $Admin )
                                    <tr>
                                        <td>{{$Admin->id}}</td>
                                        <td>{{$Admin->name}}</td>
                                        <td>{{$Admin->email}}</td>
                                        <td>{{$Admin->photo}}</td>
                                        <td>
                                            <!-- Modal -->
                                            <form action="{{route('admin.destroy' , $Admin->id)}}" method="post" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-circle btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
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
                                    <td>email</td>
                                    <td>photo</td>
                                    <td>option</td>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>


              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('admin.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">name</label>
                                <input type="name" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email"  name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password"  name='password'class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Password confirem</label>
                                    <input type="password"  name='password_confrim' class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
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
