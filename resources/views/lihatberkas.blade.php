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
								<li class="breadcrumb-item active" aria-current="page">Lihat Pribadi</li>
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
            <div class="col-md-14">
                <div class="card">
                <div class="card-header">{{ ('Daftar Arsip') }}</div>
        
        <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>KK</th>
                <th>KTP</td>
                <th>Surat Rekomendasi</th>
                <th>Ijazah</th>
                <th>Akta Kelahiran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arsips as $arsip)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <!-- <a href="{{ Storage::url($arsip->kk) }}" target="_blank">
                        <img src="{{ Storage::url($arsip->kk) }}" alt="{{ $arsip->kk }}">
                    </a> -->
                    <a href="{{ Storage::url($arsip->kk) }}" target="_blank">
                        <i class="bx bx-file"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ Storage::url($arsip->ktp) }}" target="_blank">
                        <i class="bx bx-file"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ Storage::url($arsip->suratrekomendasi) }}" target="_blank">
                        <i class="bx bx-file"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ Storage::url($arsip->ijazah) }}" target="_blank">
                        <i class="bx bx-file"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ Storage::url($arsip->aktakelahiran) }}" target="_blank">
                        <i class="bx bx-file"></i>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-warning">Edit</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
</div>
<!-- end-page wrapper -->

@endsection