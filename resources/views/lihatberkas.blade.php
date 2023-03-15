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

	<!-- end-page wrapper -->

	@endsection