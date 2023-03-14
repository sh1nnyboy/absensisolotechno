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
			@if(count($errors) > 0)
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
				{{ $error }} <br/>
				@endforeach
			</div>
			@endif
				<div class="card">
					<div class="card-body">
					<form method="POST" action="/store" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="kk">KK:</label>
							<input type="text" class="form-control" id="kk" name="kk">
						</div>
						<div class="form-group">
							<label for="arsip">Arsip:</label>
							<input type="file" class="form-control-file" id="arsip" name="arsip">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>

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
			
		</div>
	</div>
	<!-- end-page wrapper -->

	@endsection