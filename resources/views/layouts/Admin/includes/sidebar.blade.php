<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">{{ __('translation.Menu') }}</li>
            <li class="sidebar-item {{ request()->routeIs('admin.index') ? 'active' : '' }} ">
                <a href="{{route('dash')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>{{ __('translation.Dashboard') }}</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('features.index') ? 'active' : '' }} ">
                <a href="{{ route('features.index') }}" class='sidebar-link'>
                    {{-- <i class="fa fa-assistive-listening-systems"></i> --}}
                    <i class="bi bi-flag"></i>
                    <span>{{ __('translation.Features') }}</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('subscription.index') ? 'active' : '' }} ">
                <a href="{{ route('subscription.index') }}" class='sidebar-link'>
                    {{-- <i class="fa fa-assistive-listening-systems"></i> --}}
                    <i class="bi bi-bag-check-fill"></i>
                    <span>{{ __('translation.subscription') }}</span>
                </a>
            </li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-calendar2-week"></i>
                    <span>{{ __('translation.package') }}</span>
                </a>
                <ul class="submenu">
                    <li class="submenu-item ">
                        <a href="{{ route('packages.create') }}">{{__('translation.Add Package')}}</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('packages.index') }}">{{__('translation.Show pacakges')}}</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>{{ __('translation.reports') }}</span>
                </a>
                <ul class="submenu">
                    <li class="submenu-item ">
                        <a href="{{ route('client.reports') }}">{{ __('translation.client_reports') }}</a>
                    </li>
                    <li class="submenu-item ">
                        <a
                            href="{{ route('subscription.reports') }}">{{ __('translation.subscription_report') }}</a>
                    </li>
                    <li class="submenu-item ">
                        <a
                            href="{{ route('notification.report') }}">{{ __('translation.notification_reports') }}</a>
                    </li>
                </ul>
            </li>





















            <li class="sidebar-title">{{ __('translation.clients_Mangement') }}</li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <span class="bi bi-file-person-fill blue-color"> </span>
                            <span>{{__('translation.User Mangment')}}</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item ">
                                <a href="{{route('admin.create')}}">{{__('translation.Add User')}}</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{route('admin.index')}}">{{__('translation.Show Users')}}</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="sidebar-item {{ request()->routeIs('ticket.index') ? 'active' : ''}} ">
                        <a href="{{ route('ticket.index')}}" class='sidebar-link'>

                            <i class="bi bi-bricks"></i>
                            <span>{{_('translation.Technical support')}}</span>
                        </a>
                    </li> --}}



            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person"></i>
                    <span>{{ __('translation.Client_Mangemnt') }}</span>
                </a>
                <ul class="submenu">
                    {{-- <li class="submenu-item ">
                                <a href="{{route('client.create')}}">Add Client </a>
                            </li> --}}
                    <li class="submenu-item ">
                        <a href="{{ route('client.index') }}">{{ __('translation.Show_Clients') }} </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-gear"></i>
                    <span>{{ __('translation.Setting') }}</span>
                </a>
                <ul class="submenu">
                    <li class="submenu-item ">
                        <a href="{{ route('getOrganizationProfile') }}">
                            {{ __('translation.orgnazation_profile') }}</a>
                    </li>
                    {{-- <li class="submenu-item ">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                     class="bx bx-log-out"></i>{{ __('translation.Logout') }}</a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                     </form>
                        <a href="{{ route('admin.login') }}"></a>
                    </li> --}}
                </ul>
            </li>

            {{-- <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>Extra Components</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="extra-component-avatar.html">Avatar</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="extra-component-sweetalert.html">Sweet Alert</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="extra-component-toastify.html">Toastify</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="extra-component-rating.html">Rating</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="extra-component-divider.html">Divider</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-grid-1x2-fill"></i>
                            <span>Layouts</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="layout-default.html">Default Layout</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="layout-vertical-1-column.html">1 Column</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="layout-vertical-navbar.html">Vertical Navbar</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="layout-rtl.html">RTL Layout</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="layout-horizontal.html">Horizontal Menu</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-title">Forms &amp; Tables</li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Form Elements</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="form-element-input.html">Input</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="form-element-input-group.html">Input Group</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="form-element-select.html">Select</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="form-element-radio.html">Radio</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="form-element-checkbox.html">Checkbox</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="form-element-textarea.html">Textarea</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="form-layout.html" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Form Layout</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-pen-fill"></i>
                            <span>Form Editor</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="form-editor-quill.html">Quill</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="form-editor-ckeditor.html">CKEditor</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="form-editor-summernote.html">Summernote</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="form-editor-tinymce.html">TinyMCE</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="table.html" class='sidebar-link'>
                            <i class="bi bi-grid-1x2-fill"></i>
                            <span>Table</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                            <span>Datatables</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="table-datatable.html">Datatable</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="table-datatable-jquery.html">Datatable (jQuery)</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-title">Extra UI</li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-pentagon-fill"></i>
                            <span>Widgets</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="ui-widgets-chatbox.html">Chatbox</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="ui-widgets-pricing.html">Pricing</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="ui-widgets-todolist.html">To-do List</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-egg-fill"></i>
                            <span>Icons</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
                            </li>
                            <li class="submenu-item ">
                                <a href="ui-icons-fontawesome.html">Fontawesome</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="ui-icons-dripicons.html">Dripicons</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-bar-chart-fill"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="ui-chart-chartjs.html">ChartJS</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="ui-chart-apexcharts.html">Apexcharts</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="ui-file-uploader.html" class='sidebar-link'>
                            <i class="bi bi-cloud-arrow-up-fill"></i>
                            <span>File Uploader</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-map-fill"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="ui-map-google-map.html">Google Map</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="ui-map-jsvectormap.html">JS Vector Map</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-title">Pages</li>

                    <li class="sidebar-item  ">
                        <a href="application-email.html" class='sidebar-link'>
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email Application</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="application-chat.html" class='sidebar-link'>
                            <i class="bi bi-chat-dots-fill"></i>
                            <span>Chat Application</span>
                        </a>
                    </li>
                    <li class="sidebar-item  ">
                        <a href="application-gallery.html" class='sidebar-link'>
                            <i class="bi bi-image-fill"></i>
                            <span>Photo Gallery</span>
                        </a>
                    </li>
                    <li class="sidebar-item  ">
                        <a href="application-checkout.html" class='sidebar-link'>
                            <i class="bi bi-basket-fill"></i>
                            <span>Checkout Page</span>
                        </a>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-person-badge-fill"></i>
                            <span>Authentication</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="auth-login.html">Login</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="auth-register.html">Register</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="auth-forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-x-octagon-fill"></i>
                            <span>Errors</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="error-403.html">403</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="error-404.html">404</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="error-500.html">500</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-title">Raise Support</li>

                    <li class="sidebar-item  ">
                        <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                            <i class="bi bi-life-preserver"></i>
                            <span>Documentation</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                            <i class="bi bi-puzzle"></i>
                            <span>Contribute</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="https://github.com/zuramai/mazer#donate" class='sidebar-link'>
                            <i class="bi bi-cash"></i>
                            <span>Donate</span>
                        </a>
                    </li>
                </ul> --}}
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
