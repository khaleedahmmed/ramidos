<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="{{ url('/admin') }}"  aria-expanded="true"
                   class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            {{-- @can('admins') --}}
            <li class="menu">
                <a href="#admins" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-user-shield"></i>
                                <span>{{__('admin.admins')}}</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>

                <ul class="collapse submenu list-unstyled" id="admins" data-parent="#accordionExample">
                    <li>
                        <a href="{{ url('/admin/admins') }}"> {{__('admin.display')}} {{__('admin.admins')}} </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/admins/create') }}"> {{__('admin.add')}} {{__('admin.admin')}}  </a>
                    </li>
                </ul>
            </li>
            {{-- @endcan --}}

            {{-- @can('users') --}}
            <li class="menu">
                <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-users"></i>
                                <span>{{__('admin.users')}}</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>

                <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                    <li>
                        <a href="{{ url('/admin/users') }}"> {{__('admin.display')}} {{__('admin.users')}} </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/users/create') }}"> {{__('admin.add')}} {{__('admin.user')}}  </a>
                    </li>
                </ul>
            </li>
            {{-- @endcan --}}

            {{-- @can('roles') --}}
            {{-- <li class="menu">
                <a href="#roles" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-tasks"></i>
                        <span>{{__('admin.roles')}}</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>

                <ul class="collapse submenu list-unstyled" id="roles" data-parent="#accordionExample">
                    <li>
                        <a href="{{ url('/admin/roles') }}"> {{__('admin.display')}} {{__('admin.roles')}} </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/roles/create') }}"> {{__('admin.add')}} {{__('admin.role')}}  </a>
                    </li>
                </ul>
            </li> --}}
            {{-- @endcan --}}

            {{-- @can('permissions') --}}
            {{-- <li class="menu">
                <a href="#permissions" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-check-double" width="24" height="24" ></i>

                        <span>{{__('admin.permissions')}}</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="permissions" data-parent="#accordionExample">
                    <li>
                        <a href="{{ url('/admin/permissions') }}"> {{__('admin.display')}} {{__('admin.permissions')}} </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/permissions/create') }}"> {{__('admin.add')}} {{__('admin.permission')}}  </a>
                    </li>
                </ul>
            </li> --}}
            {{-- @endcan --}}


            {{-- @can('abouts') --}}
            <li class="menu">
                <a href="#abouts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-check-double" width="24" height="24" ></i>

                        <span>{{__('admin.about')}}</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="abouts" data-parent="#accordionExample">
                    <li>
                        <a href="{{ url('/admin/abouts') }}"> {{__('admin.display')}} {{__('admin.abouts')}} </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/abouts/create') }}"> {{__('admin.add')}} {{__('admin.abouts')}}  </a>
                    </li>
                </ul>
            </li>
            {{-- @endcan --}}

            {{-- @can('clients') --}}
            <li class="menu">
                <a href="#clients" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-check-double" width="24" height="24" ></i>

                        <span>{{__('admin.clients')}}</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="clients" data-parent="#accordionExample">
                    <li>
                        <a href="{{ url('/admin/clients') }}"> {{__('admin.display')}} {{__('admin.clients')}} </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/clients/create') }}"> {{__('admin.add')}} {{__('admin.clients')}}  </a>
                    </li>
                </ul>
            </li>
            {{-- @endcan --}}

            {{-- @can('requests') --}}
            <li class="menu">
                <a href="#requests" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-check-double" width="24" height="24" ></i>

                        <span>{{__('admin.requests')}}</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="requests" data-parent="#accordionExample">
                    <li>
                        <a href="{{ url('/admin/requests') }}"> {{__('admin.display')}} {{__('admin.requests')}} </a>
                    </li>
                </ul>
            </li>
            {{-- @endcan --}}

            {{-- @can('countries') --}}
            <li class="menu">
                <a href="#countries" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-check-double" width="24" height="24" ></i>

                        <span>{{__('admin.countries')}}</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="countries" data-parent="#accordionExample">
                    <li>
                        <a href="{{ url('/admin/countries') }}"> {{__('admin.display')}} {{__('admin.countries')}} </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/countries/create') }}"> {{__('admin.add')}} {{__('admin.country')}}  </a>
                    </li>
                </ul>
            </li>
            {{-- @endcan --}}


                {{-- @can('countries') --}}
                <li class="menu">
                    <a href="#sections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fas fa-check-double" width="24" height="24" ></i>

                            <span>{{__('admin.homePageSections')}}</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="sections" data-parent="#accordionExample">
                        <li>
                            <a href="{{ url('/admin/sectionOne') }}"> {{__('admin.display')}} {{__('admin.sectionOne')}} </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/sectionTwo') }}"> {{__('admin.display')}} {{__('admin.sectionTwo')}} </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/sectionThree') }}"> {{__('admin.display')}} {{__('admin.sectionThree')}} </a>
                        </li>
                        
                    </ul>
                </li>
                {{-- @endcan --}}


                <li class="menu">
                    <a href="#services" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fas fa-check-double" width="24" height="24" ></i>

                            <span>{{__('admin.services')}}</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="services" data-parent="#accordionExample">
                        <li>
                            <a href="{{ url('/admin/services') }}"> {{__('admin.display')}} {{__('admin.services')}} </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/services/create') }}"> {{__('admin.add')}} {{__('admin.services')}}  </a>
                        </li>
                    </ul>
                </li>


                <li class="menu">
                    <a href="#sliders" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fas fa-check-double" width="24" height="24" ></i>

                            <span>{{__('admin.sliders')}}</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="sliders" data-parent="#accordionExample">
                        <li>
                            <a href="{{ url('/admin/sliders') }}"> {{__('admin.display')}} {{__('admin.sliders')}} </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/sliders/create') }}"> {{__('admin.add')}} {{__('admin.sliders')}}  </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#terms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fas fa-check-double" width="24" height="24" ></i>

                            <span>{{__('admin.terms')}}</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="terms" data-parent="#accordionExample">
                        <li>
                            <a href="{{ url('/admin/terms') }}"> {{__('admin.display')}} {{__('admin.terms')}} </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/terms/create') }}"> {{__('admin.add')}} {{__('admin.terms')}}  </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="{{ route('settings.index') }}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="far fa-chart-bar"></i>
                            <span> {{ __('admin.settings') }}</span>
                        </div>
                    </a>
                </li>


        </ul>
    </nav>
</div>
