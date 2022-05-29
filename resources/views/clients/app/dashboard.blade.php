@extends('layouts.master')
@section('breadceumbs')
    {{-- <x-bread-crumps> --}}
    {{-- @component('components.bread-crumps',
        [
            'head' => __('translation.'),
            'links' => [BredCrumpLinks(route('clients.dashboard'), __('translation.Dashboard')), BredCrumpLinks(route('ticket.index'), __('translation.Technical support'))],
        ])
    @endcomponent --}}
@endsection
@section('title')
    Updata Applction
@stop
@section('content')

@if (session()->has('Add'))
<div class="alert alert-success alert-dismissible fade show" >
 <button type="button" class="close_success" data-dismiss="alert" >&times;</button>
        <strong>{{ session()->get('Add') }}</strong>



    </div>

@endif


@if ($errors->any())
<div class="alert alert-danger" style="position: fixed;
right: 0px;
z-index: 9999;
bottom: 300px;
margin-bottom: 19px;
margin-right: 40px;
max-width: 350px;">

    <strong>{{ session()->get('errors') }}</strong>
</div>
@endif



    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card  h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="d-flex justify-content-between">


                            <div>
                                <h5>{{ __('translation.Update_My_App') }}</h5>
                            </div>
                            <div class="row">
                                <div class="col">
                                <span><a href="{{ route('Applction_Building', $MyApp->id) }}" class="btn btn-outline-success btn-icon-only">
                                    <i class="bi bi-building"></i>
                                </a></span></div>
                                <div class="col">
                                <span><a href="{{ route('application.index') }}" class="btn btn-outline-danger btn-icon-only " >
                                    <i class="bi bi-arrow-left"></i></a></span></div>
                                    <div class="col">
                                 <form action="{{ route('application.delete', $MyApp->id) }}" method="post" id='delteForm'
                                    style="display:inline">
                                    @csrf
                                    @method('DELETE') 
                                    <a href='#' class=" btn btn-outline-danger btn-icon-only"

                                     {{-- data-bs-toggle="modal" data-bs-target="#exampleModal"  --}}
                                      style=""
                                      onclick="event.preventDefault();
                                      DeleteApp('delteForm')"
                                      > 
                                      <i class="fa fa-trash"></i>
                                    </a>
                                </form>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-3">
                                <div class="container">
                                    <div class="card_apps">
                                        <a href="{{ route('application.edit_Applaction', $Applction->id) }}">
                                            <div class="img-box">

                                                <img class="rounded float-start" src="{{ asset("app/5.jpg") }}">
                                            </div>
                                            <div class="content_apps">
                                                <h2 style="color: #000000;">main basic<br><span>{{ $Applction->Name }}</span></h2>
                                                <p style="color: #000000;">{{ $Applction->Discrptions }}.</p>
                                    </div> </a>
                                </div>
                                <div class="card_apps">
                                    @foreach ($Applction->screen as $screen)
                                        <a href="{{ route('AddDetialsDetials', $Applction->AppProfile->id) }}">
                                    @endforeach
                                    <div class="img-box">
                                        <img class="rounded float-start" src="{{ asset("app/7.jpg") }}">
                                    </div>
                                    <div class="content_apps">
                                        <h2 style="color: #000000;">Social Media<br><span style="color: #000000;">{{ $Applction->AppName }}</span></h2>
                                        <p style="color: #000000;">{{ $Applction->Discrptions }}.</p>
                                        <ul>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card_apps">
                                    <div class="img-box">
                                        <img class="rounded float-start" src="{{ asset("app/5.jpg") }}">
                                    </div>
                                    <div class="content_apps">
                                        <h2 style=";">main screen<br><span></span></h2>
                                        <p></p>
                                        <ul>
                                            @foreach ($Applction->screen as $screen)
                                                <li><a href="{{ route('Screen.edit', $screen->id) }}"><i
                                                            class="fa fa-desktop" aria-hidden="true" style=""></i></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title">Delete My App  </h6>
                                    </div>
                                        <div class="modal-body">
                                            <form action="{{ route('application.delete', $MyApp->id) }}" method="post"
                                                >
                                                @csrf
                                                @method('DELETE')
                                            <p>{{ __('translation.do_you_want_Delete_item') }}</p><br>
                                            <input type="hidden" name="id" id="id" value="{{ $Applction->Name }}">
                                            <input type="text" class="form-control" name="Name" id="Name" value="{{ $Applction->Name }}"  readonly>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn bg-gradient-primary">DELETE</button>
                                          </div>   </form>
                                </div>

                            </div>
                          </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        
        function DeleteApp(val) {

             console.log();
            Swal.fire({
                title:" {{__('translation.Are_you_sure?')}}",
                text: " {{__('translation.You_wont_be_able_to_revert_this!')}}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: " {{__('translation.Yes,_delete_it!')}}", 
                cancelButtonText: " {{__('translation.cancel_')}}"
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        " {{__('translation.Deleted')}}",
                        " {{__('translation.Your_file_has_been_deleted.')}}",
                        " {{__('translation.success')}}"
                    );
                    document.getElementById(val).submit();
                }
});
        }

    </script>
@endsection
