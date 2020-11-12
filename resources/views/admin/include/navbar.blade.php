<div class="sticky-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="sidebar-header">
         <img src="{{url('assets/admin/images/logo.png')}}" alt="logo"/>

      </div>
        <button type="button" id="sidebarCollapse" class="sidebartooglebtn">
            <i class="fas fa-align-left"></i>
            <span></span>
        </button>
        
        <div class="navbar-collapse justify-content-end" id="navbarSupportedContent">
          <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" style="border-radius:50%; height:45px;"/>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                  <div class="dropdown">
                    <a class="dropdown-toggle mx-1" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                      {{-- <div class="flex-shrink-0"> --}}
                    {{-- </div> --}}
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }} <i class="fas fa-angle-down"></i></div> 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-top: 0%;">
                     
                      {{-- <a class="dropdown-item" href="{{ route('logout') }}"><i class='fas fa-sign-out-alt'></i> Sign Out</a> --}}


                    <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a>
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        {{-- <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                          {{ __('Profile') }}
                      </x-jet-responsive-nav-link> --}}
                        
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                            <i class='fas fa-sign-out-alt'></i>{{ __('Logout') }}
                      </a>
                    </form>
                    </div>
                  </div>
                </li>
            </ul>
        </div>
    </div>
  </nav>
</div>