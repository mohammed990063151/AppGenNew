@extends('layouts.Admin.app')
@section('BreadCrumbs', __('translation.Show clients'))
    @section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="d-flex justify-content-between">
                            <h6 class="text-capitalize col-4">{{__('translation.Clients table')}}</h6>
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModal">
                                    {{__('translation.new Client')}}
                                </button>
                        </div>
                        <div class="table-responsive mt-5">
                            <table class="table align-items-center table-bordered  ">
                                <thead>
                                    <tr style="text-align:center">
                                        <td>id</td>
                                        <td>Name</td>
                                        <td>Emial</td>
                                        <td>Applications</td>
                                        <td>Subscribtions</td>
                                        <td>Package</td>
                                        <td>Status</td>
                                        <td>Option</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($Clients as $key => $Client )
                                    <tr style="text-align:center">
                                        <td>{{$Client->id}}</td>
                                        <td>{{$Client->Name}}</td>
                                        <td>{{$Client->Email}}</td>
                                        <td>{{$Client->Applications->count()}}</td>
                                        <td>{{$Client->Subscription->count() ?? ''}}</td>
                                        <td>{{$Client->Package->name ?? ''}}</td>
                                        <td>{!! $Client->StatusWithSpan() !!}</td>

                                        <td>
                                            <!-- Modal -->
                                            <form action="{{route('client.destroy' , $Client->id)}}" method="post"
                                                style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-circle btn-danger"><i
                                                        class="bi bi-trash2"></i></button>
                                            </form>
                                            <a href="{{route('client.status' , $Client->id)}}" class="btn btn-sm btn-circle {{$Client->status ? 'btn-warning' :'btn-success'}}"><i class="bi bi-toggle-on"></i></a>
                                            <a href="{{route('client.edit' , $Client->id)}}" class="btn btn-sm btn-circle btn-primary "><i class="bi bi-pen"></i></a>
                                            {{-- <a href="{{route('client.edit' , $Client->id)}}" class="btn btn-sm btn-circle btn-secondary "> --}}
                                                {{-- <i class="fa fa-solid fa-file"></i> --}}
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
                                <tfoot style="text-align:center">
                                    <td>id</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Applications</td>
                                    <td>Subscribtions</td>
                                    <td>Package</td>
                                    <td>Status</td>
                                    <td>Option</td>
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
