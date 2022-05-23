<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3  {{getclass(['ar'=> ' fixed-end me-4 rotate-caret ps ps__rtl ','en'=>' fixed-start ms-4 ps' ])}}"id="sidenav-main">
    <div class="sidenav-header">
            <div class="d-flex justify-content-around align-items-center">
                <div class="logo">
                    <div style=" margin: 10px">
                        <img src="{{ $OrganizationProfile->logo }}" alt=""
                                style="width: 43px; height: 43px" />  
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "

id="sidenav-main">
    <div class="sidenav-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
 <div style=" margin: 10px">
                                        {{-- <img src="{{ $OrganizationProfile->logo }}" alt=""> style="width: 43px; height: 43px">
                                           <span class="ms-1 font-weight-bold">{{ $OrganizationProfile->name}}</span> --}}

            </div>
        </div>
        <span class="ms-1 font-weight-bold">{{ $OrganizationProfile->name}}</span>
        <span class='w-20'></span>
        

    </div>
    <hr class="horizontal dark mt-">
    <div style="height: auto"  class="collapse navbar-collapse px-0 w-auto {{getclass(['ar'=>'ps ps__rtl ps--active-y','en'=>''])}}">
        <ul class="navbar-nav">
            {{-- <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('clients.dashboard') ? 'active' : '' }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('translation.Dashboard') }}</span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link  {{ request()->routeIs('clients.dashboard') ? 'active' : ''}} " href="{{ route('clients.dashboard')}}">

                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{__('translation.Dashboard')}}</span>
                </a>
                </li>

            <li class="nav-item">

                <a class="nav-link {{ request()->routeIs('application.index') ? 'active' : '' }}  "
                    href="{{ route('application.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('translation.Application') }}</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link  {{ request()->is('profile.index') ? 'active' : '' }} "
                    href="{{ route('profile.index') }}">

                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('translation.App_profile') }}</span>
                </a>
            </li> --}}
            {{-- <li class="nav-item">

                <a class="nav-link {{ request()->routeIs('notification') ? 'active' : '' }}  "
                    href="{{ route('notification.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bell-55 text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1"> {{ __('translation.Notification_Mangement') }}</span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link  {{ request()->routeIs('notification.index') ? 'active' : ''}} " href="{{ route('notification.index')}}">

                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{__('translation.Notification_Mangement')}}</span>
                </a>
                </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('application.index') ? 'active' : '' }}  "
                    href="{{ route('application.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('translation.Application') }}</span>
                </a>
            </li>
             <li class="nav-item"> --}}
                 <li class="nav-item">
                <a class="nav-link  {{ request()->routeIs('ticket.index') ? 'active' : ''}} " href="{{ route('ticket.index')}}">

                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{__('translation.Technical support')}}</span>
                </a>
                </li>
            {{-- </li>      <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link " href="../pages/profile.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/sign-in.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/sign-up.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li> --}}
        </ul>
    </>
</div>
</aside>