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
		<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ ('Upload Berkas') }}</div>

                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('berkas.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="kk">Kartu Keluarga (KK)</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="kk" name="kk">
                                        <label class="custom-file-label" for="kk">Choose file</label>
                                    </div>
                                </div>
                                @error('kk')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="ktp">KTP</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="ktp" name="ktp">
                                        <label class="custom-file-label" for="ktp">Choose file</label>
                                    </div>
                                </div>
                                @error('ktp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="suratrekomendasi">Surat Rekomendasi</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="suratrekomendasi" name="suratrekomendasi">
                                        <label class="custom-file-label" for="suratrekomendasi">Choose file</label>
                                    </div>
                                </div>
                                @error('suratrekomendasi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="ijazah">Ijazah</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="ijazah" name="ijazah">
                                        <label class="custom-file-label" for="ijazah">Choose file</label>
                                    </div>
                                </div>
                                @error('ijazah')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="aktakelahiran">Akta Kelahiran</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="aktakelahiran" name="aktakelahiran">
                                        <label class="custom-file-label" for="aktakelahiran">Choose file</label>
                                    </div>
                                </div>
                                @error('aktakelahiran')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
							</div>
							<button type="submit" class="btn btn-primary">{{ ('Upload') }}</button>
							</form>

        
		</div>
	</div>
	<!-- end-page wrapper -->

	@endsection