@extends('clients.layouts.master')
@section('breadceumbs')
{{-- <x-bread-crumps> --}}
    @component('components.bread-crumps' , ['head' => 'applction table ' ,
    'links' => [ 'applction ']
    ])
    @endcomponent
    @endsection

    @section('title')
    applction
@stop
@section('content')

{{--

<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            <img src="../assets/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
              Sayo Kravits
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
              Public Relations
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
          <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                  <i class="ni ni-app"></i>
                  <span class="ms-2">App</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                  <i class="ni ni-email-83"></i>
                  <span class="ms-2">Messages</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                  <i class="ni ni-settings-gear-65"></i>
                  <span class="ms-2">Settings</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Edit Profile</p>
                <button class="btn btn-primary btn-sm ms-auto">Settings</button>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">User Information</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">

                    <label for="example-text-input" class="form-control-label">Username</label>
                    <input class="form-control" type="text" value="lucky.jesse">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Email address</label>
                    <input class="form-control" type="email" value="jesse@example.com">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">First name</label>
                    <input class="form-control" type="text" value="Jesse">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Last name</label>
                    <input class="form-control" type="text" value="Lucky">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Contact Information</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Address</label>
                    <input class="form-control" type="text" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">City</label>
                    <input class="form-control" type="text" value="New York">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Country</label>
                    <input class="form-control" type="text" value="United States">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Postal code</label>
                    <input class="form-control" type="text" value="437300">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">About me</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">About me</label>
                    <input class="form-control" type="text" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4">

      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
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
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>



</div>
<div class="fixed-plugin">
  <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
    <i class="fa fa-cog py-2"> </i>
  </a>
  <div class="card shadow-lg">
    <div class="card-header pb-0 pt-3 ">
      <div class="float-start">
        <h5 class="mt-3 mb-0">Argon Configurator</h5>
        <p>See our dashboard options.</p>
      </div>
      <div class="float-end mt-4">
        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
          <i class="fa fa-close"></i>
        </button>
      </div>
      <!-- End Toggle Button -->
    </div>
    <hr class="horizontal dark my-1">
    <div class="card-body pt-sm-3 pt-0 overflow-auto">
      <!-- Sidebar Backgrounds -->
      <div>
        <h6 class="mb-0">Sidebar Colors</h6>
      </div>
      <a href="javascript:void(0)" class="switch-trigger background-color">
        <div class="badge-colors my-2 text-start">
          <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
        </div>
      </a>
      <!-- Sidenav Type -->
      <div class="mt-3">
        <h6 class="mb-0">Sidenav Type</h6>
        <p class="text-sm">Choose between 2 different sidenav types.</p>
      </div>
      <div class="d-flex">
        <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
      </div>
      <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
      <!-- Navbar Fixed -->
      <hr class="horizontal dark my-sm-4">
      <div class="mt-2 mb-5 d-flex">
        <h6 class="mb-0">Light / Dark</h6>
        <div class="form-check form-switch ps-0 ms-auto my-auto">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
        </div>
      </div>
      <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
      <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
      <div class="w-100 text-center">
        <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
        <h6 class="mt-3">Thank you for sharing!</h6>
        <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
          <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
          <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
        </a>
      </div>
    </div>
  </div>
</div>
  <div class="container">
                <div class="chat">
                    <div class="chat-header">
                        <div class="profile">
                            <div class="left">
                                {{-- <img src="/assets/css/img/arrow.png" class="arrow">
                                <img src="/assets/css/img/pp.png" class="pp"> --}}

                                {{-- <img src="/assets/css/img/more.png" class="icon"> --}}
                                <i class="fa fa-battery-quarter" aria-hidden="true"></i>
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                {{-- <h2>mohammed</h2>
                                <span>online</span> --}}
                            </div>
                            <div class="right">
                                <img src="/appassets/css/img/video.png" class="icon">
                                {{-- <img src="/assets/css/img/phone.png" class="icon"> --}}
                                <h5>11:50</h5>

                            </div>
                        </div>
                    </div>
                    <div class="chat-box">
                        {{-- <div class="chat-r">
                            <div class="sp"></div>
                            <div class="mess mess-r">
                                <p><img src="/assets/css/img/emoji-1.png" class="emoji">
                                    Hi, mohammed
                                </p>
                                <div class="check">
                                    <span>4:00 PM</span>
                                    <img src="/assets/css/img/check-2.png">
                                </div>
                            </div>
                        </div> --}}

                        <section class="projects" id ="projects">
                            {{-- <h2 class="title">how are you feeling</h2> --}}
        <div class="content">

        {{-- @foreach($data2 as $data2)
        <div class="project-card">
            <div class="project-image">
                <img  src="/app/{{$data2->image}}"/>
            </div>
        <div class="project-info">
        <p class="project-category">{{$data2->name}}</p>
        <strong class="project-title"> --}}
        {{-- <span>dev</span> --}}
        {{-- <a href="{{route('application.edit', $data2->id)}}" class="more-add">edite</a>
        <a href="#" class="more-details">add profile</a>

        </strong>

        </div>


            </div>   @endforeach --}}
        </div>
                        </section>

                        <div class="chat-l">
                            <div class="mess">
                                <p>
                                    <img src="../assets/img/team-1.jpg" alt="profile_image" class="logoapp">
                                    <span>msc</span>
                                </p>
                                <div class="check">

                                </div>
                            </div>
                            <div class="sp"></div>
                        </div>
                        <div class="chat-l">
                            <div class="mess">
                                <p>
                                    <img src="../assets/img/team-1.jpg" alt="profile_image" class="logoapp">
                                    <span>msc</span>
                                </p>
                                <div class="check">

                                </div>
                            </div>
                            <div class="sp"></div>
                        </div>
                        <div class="chat-l">
                            <div class="mess">
                                <p>
                                    <img src="../assets/img/team-1.jpg" alt="profile_image" class="logoapp">
                                    <span>msc</span>
                                </p>
                                <div class="check">

                                </div>
                            </div>
                            <div class="sp"></div>
                        </div>


                    </div>

                    <div class="navigations">

                        <ul>

                            <li class="list">
                                <a href="#">
                                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                                    {{-- <span class="text">profile</span> --}}
                                </a>
                            </li>

                            {{-- <li class="list"> --}}
                                {{-- <a href="#">
                                    <span class="icon"><ion-icon name="camera-outline"></ion-icon>
                                    </span> --}}
                                    {{-- <span class="text">photo</span> --}}
                                {{-- </a> --}}
                            {{-- </li> --}}
                            <li class="list active">
                                <a href="#">
                                    <span class="icon">
                                        <ion-icon name="home-outline"></ion-icon></span>
                                    {{-- <span class="text">home</span> --}}
                                </a>
                            </li>
                            {{-- <li class="list"> --}}
                                {{-- <a href="#">
                                    <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon>
                                    </span> --}}
                                    {{-- <span class="text">mesaages</span> --}}
                                {{-- </a> --}}
                            {{-- </li> --}}
                            <li class="list">
                                <a href="#">
                                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                                    {{-- <span class="text">setting</span> --}}
                                </a>
                            </li>
                        <div class="indicator"></div>

                        </ul></div>
                </div>
            </div>


        </div>
      </div>
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> --}}
@endsection
