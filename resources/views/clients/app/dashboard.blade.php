@extends('layouts.master')
@section('breadceumbs')
    {{-- <x-bread-crumps> --}}
    @component('components.bread-crumps', ['head' => 'Updata applction', 'links' => ['applction', 'Updata applction']])
    @endcomponent
@endsection


@section('title')
    Updata applction
@stop
@section('content')

    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="row">
                            <h6 class="text-capitalize col-4"> updata applction</h6>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <span><a href="{{ route('application.index') }}" class="btn btn-danger btn-sm"
                                        type="button">Go Back</a></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="{{asset("app/{$Applction->Logo}")}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$Applction->AppName}}</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">{{ $Applction->Discrptions}}</h6>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="#" class="card-link">Card link</a>
                                                <a href="#" class="card-link">Another link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <a href="{{route('AddDetialsDetials' ,$Applction->AppProfile->id) }}" class="btn btn-primary">
                                            application detaits
                                        </a>

                                        <a href="{{route('Screen.edit',$Applction->Screen[0]->id) }}" class="btn btn-primary">
                                            edit scrren1
                                        </a>
                                        <a href="{{route('Screen.edit1',$Applction->Screen[1]->id) }}" class="btn btn-primary">
                                            edit scrren2
                                        </a>
                                        <a href="{{route('Screen.edit2',$Applction->Screen[2]->id) }}" class="btn btn-primary">
                                            edit scrren3
                                        </a>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>


<div class="row">
    <div class="mt-3">


<div class="container">
    <div class="card_apps">
        <div class="img-box">
            <img src="{{asset("app/{$Applction->Logo}")}}">
        </div>
        <div class="content_apps">
            <h2>My App<br><span>{{$Applction->Name}}</span></h2>
            <p>{{$Applction->Discrptions}}.</p>
             <ul>
                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                 <li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
             </ul>
        </div>
    </div>



        <div class="card_apps">
        <div class="img-box">
            <img src="{{asset("app/{$Applction->Logo}")}}">
        </div>
        <div class="content_apps">
            <h2>My App<br><span>{{$Applction->AppName}}</span></h2>
            <p>{{$Applction->Discrptions}}.</p>
             <ul>
                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                 <li><a href="#"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></li>
                 <li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
             </ul>
        </div>
    </div>

    <div class="card_apps">
        <div class="img-box">
            <img src="{{asset("app/{$Applction->Logo}")}}">
        </div>
        <div class="content_apps">
            <h2>Nikhil<br><span>Web Developer</span></h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
             Iste repellendus necessitatibus inventore iusto fuga.</p>
             <ul>
                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                 <li><a href="#"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></li>
                 <li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
             </ul>
        </div>
    </div>
</div>
</div>



                    </div>



                </div>
            </div>
        </div>
        </footer>

    </div>
@endsection
