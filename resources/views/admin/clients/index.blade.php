@extends('layouts.master2')
@section('breadceumbs')
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
                            {{-- <div class="col-2"> --}}
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    new Client
                                </button>
                                {{-- <span><a href="{{route('packages.create')}}" class="btn btn-primary btn-sm"
                                        type="button">add New</a></span> --}}
                            {{-- </div> --}}
                        </div>
                        <div class="table-responsive mt-5">
                            <table class="table align-items-center table-bordered  ">
                                <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>name</td>
                                        <td>emial</td>
                                        <td>package</td>
                                        <td>status</td>
                                        <td>option</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($Clients as $key => $Client )
                                    <tr>
                                        <td>{{$Client->id}}</td>
                                        <td>{{$Client->name}}</td>
                                        <td>{{$Client->email}}</td>
                                        <td>{{$Client->Package->name ?? ''}}</td>
                                        <td>{!! $Client->StatusWithSpan() !!}</td>

                                        <td>
                                            <!-- Modal -->
                                            <form action="{{route('client.destroy' , $Client->id)}}" method="post"
                                                style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-circle btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                            <a href="{{route('client.status' , $Client->id)}}" class="btn btn-sm btn-circle {{$Client->status ? 'btn-warning' :'btn-success'}}"><i class="fa fa-thin fa-power-off"></i></a>
                                            <a href="{{route('client.edit' , $Client->id)}}" class="btn btn-sm btn-circle btn-primary "><i class="fa fa-thin fa-pen"></i></a>
                                            <a href="{{route('client.edit' , $Client->id)}}" class="btn btn-sm btn-circle btn-secondary ">
                                                <i class="fa fa-solid fa-file"></i>
                                            </a>
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
                                    <td>package</td>
                                    <td>status</td>
                                    <td>option</td>
                                </tfoot>
                            </table>
                        </div>
                        {!! $Clients->links() !!}
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
                        <div class="modal-body">
                            <form method="post" action="{{route('client.store')}}">
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
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Package</label>
                                    {{-- <input type="email" name='email' class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email"> --}}
                                    <select name="package" id="id" class="form-control">
                                        @foreach ($Packages as $Package )
                                        <option value="{{$Package->id}}">{{$Package->name}}</option>
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
