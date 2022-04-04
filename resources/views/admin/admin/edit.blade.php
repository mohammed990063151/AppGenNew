@extends('layouts.Admin.app')
@section('BreadCrumbs', 'Admins Mangement')
    @section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="d-flex justify-content-between">
                            <h6 class="text-capitalize col-4">Users Mangement</h6>
                                <a href="{{route('admin.index')}}" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    go back
                                </a>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{$Admin ? route('admin.update' , $Admin->id) : route('admin.store')}}">
                                @csrf
                            @if ($Admin)
                                @method('patch')
                            @endif
                        </div>
                                {{-- <span><a href="{{route('packages.create')}}" class="btn btn-primary btn-sm"
                                        type="button">add New</a></span> --}}
                            </div>
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
