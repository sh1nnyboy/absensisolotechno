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
					<div class="col-xl-11 mx-auto">
						
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
                                                <div class="col-sm-9">
												    <button type="submit" class="btn btn-light">Upload KK</button>
												    <button type="submit" class="btn btn-light">Lihat KK</button>
											    </div>
                                                <div class="col-sm-9">
												    <button type="submit" class="btn btn-light">Hapus KK</button>
											    <!-- </div>
                                                <div class="col-sm-9"> -->
												    <button type="submit" class="btn btn-light">Unduh KK</button>
											    </div>
                                            </td>
										</tr>

										<tr>
											<th scope="row">2</th>
											<td>Kartu Tanda Penduduk</td>
											<td>
                                            <div class="col-sm-9">
												    <button type="submit" class="btn btn-light">Upload KTP</button>
											    <!-- </div> 
                                                <div class="col-sm-9"> -->
												    <button type="submit" class="btn btn-light">Lihat KTP</button>
											    </div>
                                                <div class="col-sm-9">
												    <button type="submit" class="btn btn-light">Hapus KTP</button>
											    <!-- </div>
                                                <div class="col-sm-9"> -->
												    <button type="submit" class="btn btn-light">Unduh KTP</button>
											    </div>
                                            </td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Akta Kelahiran</td>
											<td>
                                            <div class="col-sm-9">
												    <button type="submit" class="btn btn-light">Upload Akta Lahir</button>
											    <!-- </div> 
                                                <div class="col-sm-9"> -->
												    <button type="submit" class="btn btn-light">Lihat Akta Lahir</button>
											    </div>
                                                <div class="col-sm-9">
												    <button type="submit" class="btn btn-light">Hapus Akta Lahir</button>
											    <!-- </div>
                                                <div class="col-sm-9"> -->
												    <button type="submit" class="btn btn-light">Unduh Akta Lahir</button>
											    </div>
                                            </td>
										</tr>
										<tr>
											<th scope="row">4</th>
											<td>Ijazah</td>
											<td>
                                            <div class="col-sm-9">
												    <button type="submit" class="btn btn-light">Upload Ijazah</button>
											    <!-- </div> 
                                                <div class="col-sm-9"> -->
												    <button type="submit" class="btn btn-light">Lihat Ijazah</button>
											    </div>
                                                <div class="col-sm-9">
												    <button type="submit" class="btn btn-light">Hapus Ijazah</button>
											    <!-- </div>
                                                <div class="col-sm-9"> -->
												    <button type="submit" class="btn btn-light">Unduh Ijazah</button>
											    </div>
                                            </td>
										</tr>
										<tr>
											<th scope="row">5</th>
											<td>Sertifikat</td>
											<td>
                                            <div class="col-sm-9">
												    <button type="submit" class="btn btn-light">Upload Sertifikat</button>
											    <!-- </div> 
                                                <div class="col-sm-9"> -->
												    <button type="submit" class="btn btn-light">Lihat Sertifikat</button>
											    </div>
                                                <div class="col-sm-9">
												    <button type="submit" class="btn btn-light">Hapus Sertifikat</button>
											    <!-- </div>
                                                <div class="col-sm-9"> -->
												    <button type="submit" class="btn btn-light">Unduh Sertifikat</button>
											    </div>
                                            </td>
										</tr>
										<tr>
											<th scope="row">6</th>
											<td>Surat Rekomendasi</td>
											<td>
                                            <div class="col-sm-9">
												    <button type="submit" class="btn btn-light">Upload S.Rekomendasi</button>
											    <!-- </div> 
                                                <div class="col-sm-9"> -->
												    <button type="submit" class="btn btn-light">Lihat S.Rekomendasi</button>
											    </div>
                                                <div class="col-sm-9">
												    <button type="submit" class="btn btn-light">Hapus S.Rekomendasi</button>
											    <!-- </div>
                                                <div class="col-sm-9"> -->
												    <button type="submit" class="btn btn-light">Unduh S.Rekomendasi</button>
											    </div>
                                            </td>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
        
    </div>
</div>
<!-- end-page wrapper -->


@endsection

