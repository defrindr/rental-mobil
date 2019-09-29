<!-- Main Header -->
<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">RMJ</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Rental Mobil <b>JAYA</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
						<span class="hidden-xs">{{ Auth::user()->username }}</span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
						<img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

						<p>
							{{ Auth::user()->username }} - Web Developer
							<small>Member since Nov. 2012</small>
						</p>
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
								<a href="#" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="pull-right">
								<a href="/logout" class="btn btn-default btn-flat">Logout</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>