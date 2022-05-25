<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3  {{getclass(['ar'=> ' fixed-end me-4 rotate-caret ps ps__rtl ','en'=>' fixed-start ms-4 ps' ])}}"id="sidenav-main">
    <div class="sidenav-header">
            <div class="d-flex justify-content-around align-items-center">
                <div class="logo">
                    <div style=" margin: 10px">
                        <img src="{{ $OrganizationProfile->logo }}" alt=""
                                style="
                                background-size: 32px 32px;
                                border: 0;
                                -webkit-border-radius: 50%;
                                border-radius: 50%;
                                display: block;
                                margin: 0px;
                                position: relative;
                                height: 32px;
                                width: 32px;
                                z-index: 0;
                            " />   
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
<span class="text-info mx-2"  >
                    <svg style="width:22px;height:22px;" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M21,16V4H3V16H21M21,2A2,2 0 0,1 23,4V16A2,2 0 0,1 21,18H14V20H16V22H8V20H10V18H3C1.89,18 1,17.1 1,16V4C1,2.89 1.89,2 3,2H21M5,6H14V11H5V6M15,6H19V8H15V6M19,9V14H15V9H19M5,12H9V14H5V12M10,12H14V14H10V12Z" />
                    </svg>
                </span>
                    <span class="nav-link-text ms-1 font-weight-bold" >{{__('translation.Dashboard')}}</span>
                </a>
                </li>

            <li class="nav-item">

                <a class="nav-link {{ request()->routeIs('application.index') ? 'active' : '' }}  "
                    href="{{ route('application.index') }}">
                    <span class="text-success mx-2">
                    <svg style="width:22px;height:22px;(28, 128, 0)" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10.5 15.5C10.5 15.87 10.4 16.2 10.22 16.5C9.88 15.91 9.24 15.5 8.5 15.5S7.12 15.91 6.78 16.5C6.61 16.2 6.5 15.87 6.5 15.5C6.5 14.4 7.4 13.5 8.5 13.5S10.5 14.4 10.5 15.5M23 15V18C23 18.55 22.55 19 22 19H21V20C21 21.11 20.11 22 19 22H5C3.9 22 3 21.11 3 20V19H2C1.45 19 1 18.55 1 18V15C1 14.45 1.45 14 2 14H3C3 10.13 6.13 7 10 7H11V5.73C10.4 5.39 10 4.74 10 4C10 2.9 10.9 2 12 2S14 2.9 14 4C14 4.74 13.6 5.39 13 5.73V7H14C17.87 7 21 10.13 21 14H22C22.55 14 23 14.45 23 15M21 16H19V14C19 11.24 16.76 9 14 9H10C7.24 9 5 11.24 5 14V16H3V17H5V20H19V17H21V16M15.5 13.5C14.4 13.5 13.5 14.4 13.5 15.5C13.5 15.87 13.61 16.2 13.78 16.5C14.12 15.91 14.76 15.5 15.5 15.5S16.88 15.91 17.22 16.5C17.4 16.2 17.5 15.87 17.5 15.5C17.5 14.4 16.61 13.5 15.5 13.5Z" />
                    </svg>
                </span>
                    <span class="nav-link-text ms-1 font-weight-bold">{{ __('translation.Application') }}</span>
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
<span class="text-danger mx-2">
                    <svg style="width:22px;height:22px;" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M21,19V20H3V19L5,17V11C5,7.9 7.03,5.17 10,4.29C10,4.19 10,4.1 10,4A2,2 0 0,1 12,2A2,2 0 0,1 14,4C14,4.1 14,4.19 14,4.29C16.97,5.17 19,7.9 19,11V17L21,19M14,21A2,2 0 0,1 12,23A2,2 0 0,1 10,21" />
                    </svg>
                </span>
                    <span class="nav-link-text ms-1 font-weight-bold">{{__('translation.Notification_Mangement')}}</span>
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
<span class="text-primary mx-2">
                    <svg style="width:22px;height:22px;" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M20,12A2,2 0 0,0 22,14V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V14C3.11,14 4,13.1 4,12A2,2 0 0,0 2,10V6C2,4.89 2.9,4 4,4H20A2,2 0 0,1 22,6V10A2,2 0 0,0 20,12M16.5,16.25C16.5,14.75 13.5,14 12,14C10.5,14 7.5,14.75 7.5,16.25V17H16.5V16.25M12,12.25A2.25,2.25 0 0,0 14.25,10A2.25,2.25 0 0,0 12,7.75A2.25,2.25 0 0,0 9.75,10A2.25,2.25 0 0,0 12,12.25Z" />
                    </svg>
                </span>
                    <span class="nav-link-text ms-1 font-weight-bold">{{__('translation.Technical support')}}</span>
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