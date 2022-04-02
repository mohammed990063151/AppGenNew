@extends('layouts.Admin.app')
@section('BreadCrumbs', 'Add Client')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'Packages' ,
    'links' => ['Dashboard' , 'Packages']
    ])

    @endcomponent
    @endsection
    @section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="d-flex justify-content-between">
                            <h6 class="text-capitalize col-4">Clients table</h6>
                            {{-- <div class="co"> --}}
                                <a type="button" href='{{route('client.index')}}' class="btn btn-warning" data-toggle="modal"
                                    data-target="#exampleModal">
                                    go back
                                </a>
                            {{-- </div> --}}
                        </div>
                            <form method="post" action="{{route('client.update' , $id)}}">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">name</label>
                                    <input type="name" name='name' value="{{$Client->name}}" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name='email'  value="{{$Client->email}}"  class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                {{-- @dd($Client) --}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Package</label>
                                    {{-- <input type="email" name='email' class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email"> --}}
                                        <select name="package" id="id" class="form-control">
                                        @foreach ($Packages as $Package )
                                        <option value="{{$Package->id}}" {{$Client->package_id == 1 ? 'selected' : ''}} >{{$Package->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name='password' class="form-control"
                                            id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Password confirem</label>
                                        <input type="password" name='password_confrim' class="form-control"
                                            id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                </div>
                                <div class="m-3">
                                    <button class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                        </div>
                                {{-- <span><a href="{{route('packages.create')}}" class="btn btn-primary btn-sm"
                                        type="button">add New</a></span> --}}
                            </div>
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
                            <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
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
    @endsection
