<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							
							<li class="nav-item dropdown dropdown-large">
								
								<div class="dropdown-menu dropdown-menu-end">
									<div class="header-notifications-list">
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a>
								</div>
							</li>
							
						</ul>
					</div>
					@auth
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							{{-- <img src="{{ asset('assets/images/avatars/avatar-2.png') }}" class="user-img" alt="user avatar"> --}}
							<div class="user-info ps-3">
								<p class="user-name mb-0"> {{ auth()->user()->nama }} </p> 
								<p class="designattion mb-0"> {{ auth()->user()->role }} </p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="{{ url('user-profile') }}"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li>
								<form action="/logout" method="post">
									@csrf
									<button type="submit" class="dropdown-item"><i class='bx bx-log-out-circle' href="javascript:;"></i><span>Logout</span></button>
								</form>
							</li>
						</ul>
					</div>
					@else

					@endauth
				</nav>
			</div>
		</header>
		<!--end header -->