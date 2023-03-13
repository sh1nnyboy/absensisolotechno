@extends("layouts.app")
		
@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">

		
		
		<div class="row product-grid">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<div class="clearfix">
							<p class="mb-0 float-start">Informasi</p>
						</div>
						<a href="{{ url('user-profile') }}" class="card-title cursor-pointer"><h3>Biodata</h3></a>
						
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					
					<div class="card-body">
						<div class="clearfix">
							<p class="mb-0 float-start">Informasi</p>
						
						</div>
						<a href="{{ url('berkas') }}" class="card-title cursor-pointer"><h3>Berkas</h3></a>
						
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					
					<div class="card-body">
						<div class="clearfix">
							<p class="mb-0 float-start">Informasi</p>
							
						</div>
						<a href="{{ url('rekap-absensi') }}" class="card-title cursor-pointer"><h3>Rekap Absensi</h3></a>
						
					</div>
				</div>
			</div>
			{{-- @endif --}}
		</div><!--end row-->
	</div>
</div>
<!--end page wrapper -->
@endsection
	