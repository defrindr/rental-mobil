<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        <li>
          <a href="{{ route("dashboard") }}">
            <i class="fa fa-dashboard"></i>
            <span>Dasboard</span>
          </a>
        </li>
        <li>
          <a onclick="goto(this);return 0" src="{{ route("mobil_index") }}">
            <i class="fa fa-car"></i>
            <span>Mobil</span>
          </a>
        </li>
        @if(\Auth::user()->email == "admin@rental.com")
          <li>
            <a onclick="goto(this);return 0" src="{{ route("user_index") }}">
              <i class="fa fa-user"></i>
              <span>User</span>
            </a>
          </li>
        @endif
        <li>
          <a onclick="goto(this);return 0" src="{{ route("costumer_index") }}">
            <i class="fa fa-user-secret"></i>
            <span>Costumer</span>
          </a>
        </li>
        <li>
          <a onclick="goto(this);return 0" src="{{ route('pinjam_index') }}">
            <i class="fa fa-bitcoin"></i>
            <span>Pinjam</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
