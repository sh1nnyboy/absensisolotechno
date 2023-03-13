@extends("layouts.app")
		
		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">My Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">My Profile</li>
							</ol>
						</nav>
					</div>
					
				</div>
				@if(session()->has('success'))
					<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
						<div class="d-flex align-items-center">
							<div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
							</div>
							<div class="ms-3">
								{{ session('success') }}
							</div>
						</div>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				@endif
				<!--end breadcrumb-->
				
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											{{-- <img src="{{ asset('assets/images/avatars/avatar-2.png') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110"> --}}
											<div class="mt-3">
												<h4>{{ auth()->user()->nama }}</h4>
												<p class="mb-1">{{ auth()->user()->jabatan }}</p>
												<p class="font-size-sm">{{ auth()->user()->alamat }}</p>
												<button class="btn btn-light">{{ auth()->user()->role }}</button>
												{{-- <button class="btn btn-light">Message</button> --}}
											</div>
										</div>
										<hr class="my-4" />
										
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-body">
										<form action="/user-profile/{{ auth()->user()->id }}" method="POST" enctype="multipart/form-data">
											@method("patch")
											@csrf

										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0" for="nama">Nama Lengkap</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" name="nama" class="form-control" id="nama" value="{{ auth()->user()->nama }}" />
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0" for="nik">NIK</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" name="nik" class="form-control" id="nik" value="{{ auth()->user()->nik }}" />
											</div>
										</div>

										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 for="ttl" class="mb-0" for="ttl">Tempat, Tanggal Lahir</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" name="ttl" id="ttl" class="form-control" value="{{ auth()->user()->ttl }}" />
											</div>

										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 for="kewarganegaraan" class="mb-0" for="kewarganegaraan">Kewarganegaraan</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control" value="{{ auth()->user()->kewarganegaraan }}" />
											</div>
										</div>

										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 for="perkawinan" class="mb-0" for="perkawinan">Perkawinan</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" name="perkawinan" id="perkawinan" class="form-control" value="{{ auth()->user()->perkawinan }}" />
											</div>
										</div>

										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 for="pendidikan" class="mb-0" for="pendidikan">Pendidikan</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" name="pendidikan" id="pendidikan" class="form-control" value="{{ auth()->user()->pendidikan }}" />
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 for="jabatan" class="mb-0" for="jabatan">Jabatan</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ auth()->user()->jabatan }}" />
											</div>
										</div>


										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0" for="telp">No. Telp</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" name="telp" class="form-control" id="telp" value="{{ auth()->user()->telp }}" />
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0" for="alamat">Alamat</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" name="alamat" class="form-control" id="alamat" value="{{ auth()->user()->alamat }}" />
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
				</div>
				
			</div>
		</div>
		<!--end page wrapper -->
		@endsection
	