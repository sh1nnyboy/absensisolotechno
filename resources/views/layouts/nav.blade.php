<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				
				<div>
					<a href="/"><h4 class="logo-text">Solo Technopark</h4></a> 
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				
				<li>
					<a href="{{ url('dashboard') }}" class="">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
			
				<li>
					<a href="{{ url('user-profile') }}">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Biodata</div>
					</a>
				</li>

				<li>
					<a href="{{ url('berkas') }}">
						<div class="parent-icon"><i class="bx bx-notepad"></i>
						</div>
						<div class="menu-title">Berkas</div>
					</a>
				</li>
			
				<li>
					<a href="{{ url('rekap-absensi') }}" class="">
						<div class="parent-icon"><i class='bx bx-calendar'></i>
						</div>
						<div class="menu-title">Rekap Absensi</div>
					</a>
				</li>


			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->