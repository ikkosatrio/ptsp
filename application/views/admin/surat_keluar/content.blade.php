@extends('admin.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('style')
	
@endsection
@section('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_inputs.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_select2.js"></script>

@endsection
@section('content')
	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{base_url('superuser')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="{{base_url('superuser/suratkeluar')}}">Surat Keluar</a></li>
							<li class="active">{{ ($type=="create") ? 'Tambah Data Surat Keluar' : 'Perbarui Data Surat Keluar' }}</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah Surat Keluar</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
						<form id="form-blog" class="form-horizontal" action="{{ ($type=='create') ? base_url('superuser/suratkeluar/created') : base_url('superuser/suratkeluar/updated/'.$suratkeluar->id_suratkeluar)}}" method="post">
							
							<div class="form-group">
								<label class="col-lg-2 control-label">No Berkas <span class="text-danger"></label>
								<div class="col-lg-10">
									<input class="form-control" type="text" placeholder="No Berkas" name="no_berkas"
									value="{{ ($type=='create') ? '' : $suratkeluar->no_berkas }}" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Sifat Surat <span class="text-danger"></label>
								<div class="col-lg-10">
		                            <label class="btn btn-primary">
										<input name="sifat_surat" type="radio" value="biasa" checked />Biasa
									</label>
									<label class="btn btn-primary">
										<input name="sifat_surat" type="radio" value="penting" />Penting
									</label>
									<label class="btn btn-primary">
										<input name="sifat_surat" type="radio" value="segera" />Segera
									</label>
									<label class="btn btn-primary">
										<input name="sifat_surat" type="radio" value="rahasia" />Rahasia
									</label>
                            </div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Tujuan Surat<span class="text-danger"></label>
								<div class="col-lg-10">
									<input class="form-control" type="text" placeholder="Masukkan Tujuan Surat" name="tujuan_surat"
									value="{{ ($type=='create') ? '' : $suratkeluar->tujuan_surat }}" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">No Surat <span class="text-danger"></label>
								<div class="col-lg-10">
									<input class="form-control" type="text" placeholder="No Surat" name="no_surat"
									value="{{ ($type=='create') ? '' : $suratkeluar->no_surat }}" required>
								</div>
							</div>
						

							<div class="form-group">
								<label class="col-lg-2 control-label">Tanggal Surat <span class="text-danger"></label>
								<div class="col-lg-2
								">
									<input class="form-control" type="date" name="tgl_surat"
										value="{{ ($type=='create') ? '' : $suratkeluar->tgl_surat }}" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Isi Ringkas<span class="text-danger"></label>
								<div class="col-lg-10">
									<input class="form-control" type="text" placeholder="Masukkan Isi Ringkas" name="isi_ringkas"
									value="{{ ($type=='create') ? '' : $suratkeluar->isi_ringkas }}" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-2 control-label">Keterangan Surat<span class="text-danger"></label>
								<div class="col-lg-10">
									<input class="form-control" type="text" placeholder="Masukkan Keterangan Surat" name="keterangan_surat"
									value="{{ ($type=='create') ? '' : $suratkeluar->keterangan_surat }}" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-2 control-label">Relasi Surat Masuk<span class="text-danger"><b>*</b></span></label>
								<div class="col-lg-10">
									<input class="form-control" type="text" placeholder="Masukkan Relasi Surat Jika Ada" name="relasi_masuk"
									value="{{ ($type=='create') ? '' : $suratkeluar->relasi_masuk }}">
								</div>
							</div>

					<div class="text-right">
							<button type="submit" class="btn btn-primary">{{ ($type=='create') ? 'Buat Surat Keluar' : 'Ubah Surat Keluar' }} <i class="icon-arrow-right14 position-right"></i></button>
							@if($type=="update")
							<a class="btn btn-danger" href="javascript:void(0)" onclick="window.history.back(); "> Batalkan <i class="fa fa-times position-right"></i></a>
							@endif
					</div>
					</div>
					</form>
					<!-- /form horizontal -->


					<!-- Footer -->
					{{-- <div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div> --}}
					<!-- /footer -->

				</div>
			</div>
	@section('script')
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/uploaders/fileinput.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_layouts.js"></script>

	<script type="text/javascript">
		var editorsmall = false;
	</script>

	<script type="text/javascript" src="{{base_url()}}assets/js/pages/uploader_bootstrap.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/styling/switch.min.js"></script>
	<script type="text/javascript">
	$(".switch").bootstrapSwitch();

	

	$("#form-blog").submit(function(e){
			e.preventDefault();
			var formData = new FormData( $("#form-blog")[0] );

			 for ( instance in CKEDITOR.instances ) {
		        CKEDITOR.instances[instance].updateElement();
		    }

			$.ajax({
				url: 		$("#form-blog").attr('action'),
				method: 	"POST",
				data:  		new FormData(this),
          		processData: false,
          		contentType: false,
				beforeSend: function(){
					blockMessage($('#form-blog'),'Please Wait , {{ ($type =="create") ? "Menambahkan Surat Keluar" : "Memperbarui Surat Keluar" }}','#fff');
				}
			})
			.done(function(data){
				$('#form-blog').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '{{ ($type =="create") ? "Surat Keluar Di Buatkan" : "Surat Keluar Di Perbarui" }}'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("{{base_url('superuser/suratkeluar')}}");
						return;
					}
				});
			})
			.fail(function() {
			    $('#form-blog').unblock();
				sweetAlert({
					title: 	"Opss!",
					text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
					type: 	"error",
				},
				function(){
				});
			 })
			
		})
	</script>
	<script type="text/javascript" src="{{base_url()}}assets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/editor_ckeditor.js"></script>
	
@endsection
@endsection


