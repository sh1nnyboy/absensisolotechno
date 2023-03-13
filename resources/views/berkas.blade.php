@extends("layouts.app")
		
		@section("wrapper")

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Berkas</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Berkas Pribadi</li>
							</ol>
						</nav>
					</div>
					
				</div>
		<!--end breadcrumb-->

        <!-- Judul -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Database Berkas Pribadi</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Judul -->

        <div class="row">
		<div class="col-lg-8">
			<div class="card">
				<div class="card-body">
					<form action="/user-profile/{{ auth()->user()->id }}" method="POST" enctype="multipart/form-data">
						@method("patch")
						@csrf

					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0" for="nama">Kartu Keluarga (KK)</h6>
						</div>
						<div class="col-sm-9">
							<div class="form-group">
								<input type="file" name="kk" id="kk" class="form-control">
							</div>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0" for="nama">Kartu Tanda Penduduk (KTP)</h6>
						</div>
						<div class="col-sm-9">
							<div class="form-group">
								<input type="file" name="ktp" id="ktp" class="form-control">
							</div>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0" for="nama">Akta Kelahiran</h6>
						</div>
						<div class="col-sm-9">
							<div class="form-group">
								<input type="file" name="akta" id="akta" class="form-control">
							</div>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0" for="nama">Ijazah</h6>
						</div>
						<div class="col-sm-9">
							<div class="form-group">
								<input type="file" name="ijazah" id="ijazah" class="form-control">
							</div>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0" for="nama">Sertifikat</h6>
						</div>
						<div class="col-sm-9">
							<div class="form-group">
								<input type="file" name="sertifikat" id="sertifikat" class="form-control">
							</div>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0" for="nama">Surat Rekomendasi</h6>
						</div>
						<div class="col-sm-9">
							<div class="form-group">
								<input type="file" name="sr" id="sr" class="form-control">
							</div>
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
			<!-- <div class="col-xl-11 mx-auto">
				
				<hr/>
				<div class="card">
					<div class="card-body">
						<table class="table mb-0 table-hover">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Nama</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Kartu Keluarga (KK)</td>
									<td>
									<form method="POST" action="/upload" enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for="file" class="sr-only">Upload file:</label>
											<input type="file" name="file" id="file" class="form-control">
										</div>
										<button type="submit" class="btn btn-primary">Upload KK</button>
									</form>
								<tr>
									<th scope="row">2</th>
									<td>Kartu Tanda Penduduk</td>
									<td>
									<form method="POST" action="/upload" enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for="file" class="sr-only">Upload file:</label>
											<input type="file" name="file" id="file" class="form-control">
										</div>
										<button type="submit" class="btn btn-primary">Upload KTP</button>
									</form>
									<div class="col-sm-9">
											<button type="submit" class="btn btn-light">Lihat KTP</button>
											<button type="submit" class="btn btn-light">Hapus KTP</button>	
											<button type="submit" class="btn btn-light">Unduh KTP</button>
									</div>
									</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Akta Kelahiran</td>
									<td>
									<form method="POST" action="/upload" enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for="file" class="sr-only">Upload file:</label>
											<input type="file" name="file" id="file" class="form-control">
										</div>
										<button type="submit" class="btn btn-primary">Upload Akta</button>
									</form>
									<div class="col-sm-9">
											<button type="submit" class="btn btn-light">Lihat Akta</button>
											<button type="submit" class="btn btn-light">Hapus Akta</button>	
											<button type="submit" class="btn btn-light">Unduh Akta</button>
									</div>
									</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Ijazah</td>
									<td>
									<form method="POST" action="/upload" enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for="file" class="sr-only">Upload file:</label>
											<input type="file" name="file" id="file" class="form-control">
										</div>
										<button type="submit" class="btn btn-primary">Upload Ijazah</button>
									</form>
									<div class="col-sm-9">
											<button type="submit" class="btn btn-light">Lihat Ijazah</button>
											<button type="submit" class="btn btn-light">Hapus Ijazah</button>	
											<button type="submit" class="btn btn-light">Unduh Ijazah</button>
									</div>
									</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Sertifikat</td>
									<td>
									<form method="POST" action="/upload" enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for="file" class="sr-only">Upload file:</label>
											<input type="file" name="file" id="file" class="form-control">
										</div>
										<button type="submit" class="btn btn-primary">Upload Sertifikat</button>
									</form>
									<div class="col-sm-9">
											<button type="submit" class="btn btn-light">Lihat Setifikat</button>
											<button type="submit" class="btn btn-light">Hapus Sertifikat</button>	
											<button type="submit" class="btn btn-light">Unduh Sertifikat</button>
									</div>
									</td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td>Surat Rekomendasi</td>
									<td>
									<form method="POST" action="/upload" enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for="file" class="sr-only">Upload file:</label>
											<input type="file" name="file" id="file" class="form-control">
										</div>
										<button type="submit" class="btn btn-primary">Upload Surat Rekomendasi</button>
									</form>
									<div class="col-sm-9">
											<button type="submit" class="btn btn-light">Lihat Surat Rekomendasi</button>
											<button type="submit" class="btn btn-light">Hapus Surat Rekomendasi</button>	
											<button type="submit" class="btn btn-light">Unduh Surat Rekomendasi</button>
									</div>
									</td>
							</tbody>
						</table>
					</div>
				</div>
			</div> -->
		</div>
		<!--end row-->
        
    </div>
</div>
<!-- end-page wrapper -->


@endsection

