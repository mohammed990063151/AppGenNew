@extends('layouts.Admin.app')
@section('BreadCrumbs', __('translation.Show_Subscrption'))

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="row">
                            <h6 class="text-capitalize col-4">{{ __('translation.Subscription_table') }}</h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                {{-- <span><a href="{{route('packages.create')}}" class="btn btn-primary btn-sm"
                                        type="button">add New</a></span> --}}
                            </div>
                        </div>
                        <div class="table-responsive mt-5">
                            <table class="table align-items-center table-bordered  ">
                                <thead>
                                    <tr>
                                        <td>{{ __('translation.id') }}</td>
                                        <td>{{ __('translation.user_name') }}</td>
                                        <td>{{ __('translation.Package_name') }}</td>
                                        <td>{{ __('translation.price') }}</td>
                                        <td>{{ __('translation.expired_time') }}</td>
                                        {{-- <td>status</td> --}}
                                        <td>{{ __('translation.option') }}</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($Subscriptions as $key => $Subscription)
                                        <tr>
                                            {{-- {{dd($Subscriptions)}} --}}
                                            <td>{{ $Subscription->id }}</td>
                                            <td>{{ $Subscription->Package->name }}</td>
                                            <td>{{ $Subscription->User->name }}</td>
                                            <td>{{ $Subscription->amount }}</td>
                                            <td>{{ $Subscription->exporation_date }}</td>
                                            {{-- <td>{!! $Subscription->StatusWithSpan() !!}</td> --}}
                                            <td>
                                                <!-- Modal -->
                                                <form action="{{ route('packages.destroy', $Subscription->id) }}"
                                                    method="post" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-circle btn-danger"><i
                                                            class="bi bi-trash2-fill"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">{{ __('translation.No_data') }} </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>

                                    <td>{{ __('translation.id') }}</td>
                                    <td>{{ __('translation.user_name') }}</td>
                                    <td>{{ __('translation.Package_name') }}</td>
                                    <td>{{ __('translation.price') }}</td>
                                    <td>{{ __('translation.expired_time') }}</td>
                                    {{-- <td>status</td> --}}
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

    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative
                                Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>
@endsection
