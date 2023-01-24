<ul class="sidebar-menu">

    <li class="dropdown @yield('dashboard')">
      <a href="/admin/home" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
    </li>
    <li class="dropdown @yield('teachers')">
      <a href="{{ route('teachers.index') }}" ><i
          data-feather="briefcase"></i><span>Teachers</span></a>
    </li>

  </ul>
