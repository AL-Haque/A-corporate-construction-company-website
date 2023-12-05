<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <div class="d-flex sidebar-profile">
          <div class="sidebar-profile-image">
            <img src="{{asset('images/'.$info->logo)}}" alt="image">
            <span class="sidebar-status-indicator"></span>
          </div>
          <div class="sidebar-profile-name">
            <p class="sidebar-name">
            {{Auth::user()->name}}
            </p>
            <p class="sidebar-designation">
              Welcome
            </p>
          </div>
        </div>


      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="typcn typcn-th-small " style="padding-right: 1.4rem" ></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('company.index')}}">
          <i class="typcn typcn-user-add-outline " style="padding-right: 1.4rem" ></i>
          <span class="menu-title" >Company Profile </span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('slider.index')}}">
          <i class="typcn typcn-infinity-outline" style="padding-right: 1.4rem" ></i>
          <span class="menu-title"  >Slider</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{route('banner.index')}}">
          <i class="typcn typcn-flag-outline" style="padding-right: 1.4rem" ></i>
          <span class="menu-title"  >Banner</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('employee.index')}}">
          <i class="typcn typcn-user-outline" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Employee</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{route('service.index')}}" >
          <i class="typcn typcn-image" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Service</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('client.index')}}">
          <i class="typcn typcn-group" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Client</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{route('photo.index')}}">
          <i class="typcn typcn-image" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Photo</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{route('video.index')}}">
          <i class="typcn typcn-video-outline" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Video</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('map.index')}}">
          <i class="typcn typcn-location-outline" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Location</span>
        </a>
      </li>

      @if (Auth::user()->role == 0)
      <li class="nav-item {{ Route::is('index') ? 'active' : '' }}">
          <a href="{{ route('index') }}" class="nav-link">
            <i class="typcn typcn-user-outline" style="padding-right: 1.4rem"></i>
            <span class="menu-title" >Users</span>
          </a>
      </li>
  @endif
      </li>




  </nav>
