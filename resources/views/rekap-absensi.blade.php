@extends("layouts.app")
		
		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Absensi</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Rekap Absensi</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<!-- Isian Absensi -->
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<form>
								<h6>Status Kehadiran</h6>
								<h3>Senin, 09 Januari 2023</h3>
								<h6>================================================================</h6>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0" for="status">Status</h6>
											</div>
											<div class="dropdown col-sm-9">
											<a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
												Status Kehadiran
											</a>

											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Hadir</a></li>
												<li><a class="dropdown-item" href="#">Izin</a></li>
											</ul>
											</div>
										</div>
										
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0" for="nik">Keterangan</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" name="nik" class="form-control" id="nik" value="{{ auth()->user()->nik }}" />
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9">
												<button type="submit" class="btn btn-light">Simpan</button>
											</div>
										</div>
										</form>
									</div>
								</div>
								
							</div>
				<!-- Kolom Rekap -->
				<div class="row">
					<div class="col-xl-11 mx-auto">
						
						<hr/>
						<div class="card">
							<div class="card-body">
								<table class="table mb-0 table-hover">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Tanggal</th>
											<th scope="col">Waktu</th>
											<th scope="col">Status</th>
											<th scope="col">Keterangan</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>06 Januari 2023</td>
											<td>07:30:15</td>
											<td>Hadir</td>
											<td>Tepat Waktu</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>05 Januari 2023</td>
											<td>08:00:44</td>
											<td>Hadir</td>
											<td>Terlambat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>04 Januari 2023</td>
											<td>09:10:11</td>
											<td>Izin</td>
											<td>Sakit</td>
										</tr>
										<tr>
											<th scope="row">4</th>
											<td>03 Januari 2023</td>
											<td>-</td>
											<td>Alpha</td>
											<td>Alpha</td>
										</tr>
										<tr>
											<th scope="row">5</th>
											<td>02 Januari 2023</td>
											<td>- </td>
											<td>Libur </td>
											<td>Libur Tahun Baru</td>
										</tr>
										<tr>
											<th scope="row">6</th>
											<td>01 Januari 2023</td>
											<td>- </td>
											<td>Libur</td>
											<td>Libur Tahun Baru</td>
										</tr>
										
										
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
		@endsection
	