@extends('admin.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('style')
	<style type="text/css">
	.w3-col.m4, .w3-third {
		    width: 20.00%;
		}
	.form-control{
		width: 90%;
	}
	</style>
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
							<li><a href="{{base_url('superuser/banding')}}">Banding</a></li>
							<li class="active">{{ ($type=="create") ? 'Tambah Data Banding' : 'Perbarui Data Banding' }}</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah Data Banding</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
						<form id="form-blog" class="form-horizontal" action="{{ ($type=='create') ? base_url('superuser/banding/created') : base_url('superuser/banding/updated/'.$banding->id_banding) }}" method="post">
							
						<div class="w3-container">

 
							  <div class="w3-row">
							    <a href="javascript:void(0)" onclick="openCity(event, 'surat');">
							      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Surat</div>
							    </a>
							    <a href="javascript:void(0)" onclick="openCity(event, 'pembanding');">
							      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Pembanding</div>
							    </a>
							    <a href="javascript:void(0)" onclick="openCity(event, 'terbanding');">
							      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Terbanding</div>
							    </a>
							    <a href="javascript:void(0)" onclick="openCity(event, 'berkaspa');">
					      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Berkas PA</div>
							    </a>

							    <a href="javascript:void(0)" onclick="openCity(event, 'berkaspta');">
							      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Berkas PTA</div>
							    </a>
							  </div>
							  <br>
							 	<br>
							  <div id="surat" class="w3-container city" style="display:true">
							    
							    <div class="row  col-md-12">
							    
								    <div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="No Urut Banding" name="id_banding"
										value="{{ ($type=='create') ? '' : $banding->id_banding }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="No Perkara" name="no_perkara"
										value="{{ ($type=='create') ? '' : $banding->no_perkara }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Asal PA" name="asal_pa"
										value="{{ ($type=='create') ? '' : $banding->asal_pa }}">
									</div>
								
								</div>


							<div class="row col-md-12">
								<div class="form-group col-md-4">
									<input class="form-control" type="text" placeholder="No Surat PTA" name="no_surat_pta"
									value="{{ ($type=='create') ? '' : $banding->no_surat_pta }}" >
								</div>
								<div class="form-group col-lg-4">
									<input class="form-control" type="text" placeholder="Bulan" name="bulan_pta"
									value="{{ ($type=='create') ? '' : $banding->bulan_pta }}" >
								</div>
								<div class="form-group col-lg-4">
									<input class="form-control" type="text" placeholder="Tanggal Surat Hijriah" name="tgl_surat_pta_h"
									value="{{ ($type=='create') ? '' : $banding->tgl_surat_pta_h }}" >
								</div>
							</div>

							<div class="row col-md-12">
								
								<div class="form-group col-md-4">
									<label class="control-label">Tanggal Terima Berkas</label>
									<input class="form-control" type="date"  name="tgl_terima_berkas"
									value="{{ ($type=='create') ? '' : $banding->tgl_terima_berkas }}">
								</div>
								<div class="form-group col-md-4">
									<label class="control-label">Tanggal Surat PTA Masehi</label>
									<input class="form-control" type="date"  name="tgl_surat_pta_m"
									value="{{ ($type=='create') ? '' : $banding->tgl_surat_pta_m }}">
								</div>
								
							</div>

							  </div>

							  <div id="pembanding" class="w3-container city" style="display:none">
							   <h5 style="text-align:center;"><b>Pembanding</b></h5>
							   <div class="row  col-md-12">
							    
								    <div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Nama Pembanding" name="nama_pb"
										value="{{ ($type=='create') ? '' : $banding->nama_pb }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Semula" name="semula_pb"
										value="{{ ($type=='create') ? '' : $banding->semula_pb }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Umur" name="umur_pb"
										value="{{ ($type=='create') ? '' : $banding->umur_pb }}" >
									</div>
								
								</div>

								<div class="row  col-md-12">
							    
								    <div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Agama" name="agama_pb"
										value="{{ ($type=='create') ? '' : $banding->agama_pb }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Pendidikan" name="pendidikan_pb"
										value="{{ ($type=='create') ? '' : $banding->pendidikan_pb }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Pekerjaan" name="pekerjaan_pb"
										value="{{ ($type=='create') ? '' : $banding->pekerjaan_pb }}" >
									</div>
								
								</div>

								<div class="row  col-md-12">
							    
								    <div class="form-group col-md-6">
										<input class="form-control" type="text" placeholder="Alamat" name="alamat_pb"
										value="{{ ($type=='create') ? '' : $banding->alamat_pb }}">
									</div>
															
								</div>

								<h5 style="text-align:center;"><b>Kuasa Hukum Pembanding</b></h5>
							   <div class="row  col-md-12">
							    
								    <div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Nama" name="nama_kh_pb"
										value="{{ ($type=='create') ? '' : $banding->nama_kh_pb }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Umur" name="umur_kh_pb"
										value="{{ ($type=='create') ? '' : $banding->umur_kh_pb }}" >
									</div>
								
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Agama" name="agama_kh_pb"
										value="{{ ($type=='create') ? '' : $banding->agama_kh_pb }}" >
									</div>
									
								</div>

								<div class="row  col-md-12">
							    
								    <div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Nama" name="pekerjaan_kh_pb"
										value="{{ ($type=='create') ? '' : $banding->pekerjaan_kh_pb }}" >
									</div>
									<div class="form-group col-md-6">
										<input class="form-control" type="text" placeholder="Umur" name="alamat_kh_pb"
										value="{{ ($type=='create') ? '' : $banding->alamat_kh_pb }}" >
									</div>
								
									
								</div>



							  </div>

							  <div id="terbanding" class="w3-container city" style="display:none">
							    
							     <h5 style="text-align:center;"><b>Terbanding</b></h5>
							   <div class="row  col-md-12">
							    
								    <div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Nama Terbanding" name="nama_tb"
										value="{{ ($type=='create') ? '' : $banding->nama_tb }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Semula" name="semula_tb"
										value="{{ ($type=='create') ? '' : $banding->semula_tb }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Umur" name="umur_tb"
										value="{{ ($type=='create') ? '' : $banding->umur_tb }}" >
									</div>
								
								</div>

								<div class="row  col-md-12">
							    
								    <div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Agama" name="agama_tb"
										value="{{ ($type=='create') ? '' : $banding->agama_tb }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Pendidikan" name="pendidikan_tb"
										value="{{ ($type=='create') ? '' : $banding->pendidikan_tb }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Pekerjaan" name="pekerjaan_tb"
										value="{{ ($type=='create') ? '' : $banding->pekerjaan_tb }}" >
									</div>
								
								</div>

								<div class="row  col-md-12">
							    
								    <div class="form-group col-md-6">
										<input class="form-control" type="text" placeholder="Alamat" name="alamat_tb"
										value="{{ ($type=='create') ? '' : $banding->alamat_tb }}" >
									</div>
															
								</div>

								<h5 style="text-align:center;"><b>Kuasa Hukum Terbanding</b></h5>
							   <div class="row  col-md-12">
							    
								    <div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Nama" name="nama_kh_tb"
										value="{{ ($type=='create') ? '' : $banding->nama_kh_tb }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Umur" name="umur_kh_tb"
										value="{{ ($type=='create') ? '' : $banding->umur_kh_tb }}" >
									</div>
								
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Agama" name="agama_kh_tb"
										value="{{ ($type=='create') ? '' : $banding->agama_kh_tb }}" >
									</div>
									
								</div>

								<div class="row  col-md-12">
							    
								    <div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Nama" name="pekerjaan_kh_tb"
										value="{{ ($type=='create') ? '' : $banding->pekerjaan_kh_tb }}" >
									</div>
									<div class="form-group col-md-6">
										<input class="form-control" type="text" placeholder="Umur" name="alamat_kh_tb"
										value="{{ ($type=='create') ? '' : $banding->alamat_kh_tb }}" >
									</div>
								
								</div>

							  </div>

							  <div id="berkaspa" class="w3-container city" style="display:none">
							    

							   <div class="row  col-md-12">
							    
								   <div class="form-group col-md-4">
										<label class="control-label">Tanggal Putus PA</label>
										<input class="form-control" type="date"  name="tgl_putus_pa"
									value="{{ ($type=='create') ? '' : $banding->tgl_terima_berkas }}">
									</div>
									<div class="form-group col-md-4">
										<label class="control-label">Tanggal Akta Banding</label>
										<input class="form-control" type="date" name="tgl_akta_banding"
										value="{{ ($type=='create') ? '' : $banding->tgl_akta_banding }}" >
									</div>
									<div class="form-group col-md-4">
										<label class="control-label">Tanggal SP PA</label>
										<input class="form-control" type="date" name="tgl_sp_pa"
										value="{{ ($type=='create') ? '' : $banding->tgl_sp_pa }}" >
									</div>
								
								</div>

								<div class="row  col-md-12">
							    
								    <div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="No Perkara PA" name="no_perkara_pa"
										value="{{ ($type=='create') ? '' : $banding->no_perkara_pa }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Amar PA" name="amar_pa"
										value="{{ ($type=='create') ? '' : $banding->amar_pa }}" >
									</div>
								
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Jenis PKR" name="jenis_pkr"
										value="{{ ($type=='create') ? '' : $banding->jenis_pkr }}" >
									</div>
									
								</div>

								<div class="row  col-md-12">
							    
								    <div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Ketua Majelis PA" name="ketua_majelis_pa"
										value="{{ ($type=='create') ? '' : $banding->ketua_majelis_pa }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Hakim Anggota 1" name="hakim_agg_pa1"
										value="{{ ($type=='create') ? '' : $banding->hakim_agg_pa1 }}" >
									</div>
								
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Hakim Anggota 2" name="hakim_agg_pa2"
										value="{{ ($type=='create') ? '' : $banding->hakim_agg_pa2 }}" >
									</div>
									
								</div>

								<div class="row  col-md-12">
							    
								    <div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Panitera Pengganti PA" name="pp_pa"
										value="{{ ($type=='create') ? '' : $banding->pp_pa }}" >
									</div>
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="Kode PA" name="kode_pa"
										value="{{ ($type=='create') ? '' : $banding->kode_pa }}" >
									</div>								
									<div class="form-group col-md-4">
										<input class="form-control" type="text" placeholder="No SP PA" name="no_sp_pa"
										value="{{ ($type=='create') ? '' : $banding->no_sp_pa }}" >
									</div>
									
								</div>

								<div class="row  col-md-12">
							    
								    <div class="form-group col-md-4">
								    	<label class="control-label">Bulan SP PA</label>
										<input class="form-control" type="text" placeholder="Bulan SP PA" name="bulan_sp_pa"
										value="{{ ($type=='create') ? '' : $banding->bulan_sp_pa }}" >
									</div>
									<div class="form-group col-md-4">
										<label class="control-label">PMH</label>
										<input class="form-control" type="date" placeholder="PMH" name="pmh"
										value="{{ ($type=='create') ? '' : $banding->pmh }}" >
									</div>
								
								</div>

							  </div>

							  <div id="berkaspta" class="w3-container city" style="display:none">
							    <div class="row  col-md-12">
							    
								    <div class="form-group col-md-7">
										<input class="form-control" type="text" placeholder="Ketua Majelis PTA" name="ketua_majelis_pta"
										value="{{ ($type=='create') ? '' : $banding->ketua_majelis_pta }}" >
									</div>
									<div class="form-group col-md-5">
										<input class="form-control" type="text" placeholder="Kode Hakim Majelis" name="kode_hm"
										value="{{ ($type=='create') ? '' : $banding->kode_hm }}" >
									</div>								
									
								</div>

								<div class="row  col-md-12">
							    
								    <div class="form-group col-md-7">
										<input class="form-control" type="text" placeholder="Hakim Anggota 1" name="hakim_agg_pta1"
										value="{{ ($type=='create') ? '' : $banding->hakim_agg_pta1 }}" >
									</div>
									<div class="form-group col-md-5">
										<input class="form-control" type="text" placeholder="Kode Hakim Anggota" name="kode_ha1"
										value="{{ ($type=='create') ? '' : $banding->kode_ha1 }}" >
									</div>								
									
								</div>

								<div class="row  col-md-12">
							    
								    <div class="form-group col-md-7">
										<input class="form-control" type="text" placeholder="Hakim Anggota 2" name="hakim_agg_pta2"
										value="{{ ($type=='create') ? '' : $banding->hakim_agg_pta2 }}" >
									</div>
									<div class="form-group col-md-5">
										<input class="form-control" type="text" placeholder="Kode Hakim Anggota" name="kode_ha2"
										value="{{ ($type=='create') ? '' : $banding->kode_ha2 }}" >
									</div>								
									
								</div>

								<div class="row  col-md-12">
							    
								    <div class="form-group col-md-7">
										<input class="form-control" type="text" placeholder="Panitera Pengganti PTA" name="pp_pta"
										value="{{ ($type=='create') ? '' : $banding->pp_pta }}" >
									</div>
									<div class="form-group col-md-5">
										<input class="form-control" type="text" placeholder="Kode Panitera Pengganti" name="kode_pp_pta"
										value="{{ ($type=='create') ? '' : $banding->kode_pp_pta}}" >
									</div>								
									
								</div>

								<div class="row  col-md-12">
							    
								   <div class="form-group col-md-4">
										<label class="control-label">Penunjukkan Panitera Pengganti</label>
										<input class="form-control" type="date"  name="penunjukkan_pp_pta"
									value="{{ ($type=='create') ? '' : $banding->penunjukkan_pp_pta }}">
									</div>
									<div class="form-group col-md-4">
										<label class="control-label">Tanggal  Berkas Diterima Majelis</label>
										<input class="form-control" type="date" name="tgl_berkas_diterima_majelis"
										value="{{ ($type=='create') ? '' : $banding->tgl_berkas_diterima_majelis }}" >
									</div>
									<div class="form-group col-md-4">
										<label class="control-label">Tanggal PHS</label>
										<input class="form-control" type="date" name="tgl_phs"
										value="{{ ($type=='create') ? '' : $banding->tgl_phs }}" >
									</div>
								
								</div>

								<div class="row  col-md-12">
							    
								   <div class="form-group col-md-4">
										<label class="control-label">Tanggal Putus Banding</label>
										<input class="form-control" type="date"  name="tgl_putus_banding"
									value="{{ ($type=='create') ? '' : $banding->tgl_putus_banding }}">
									</div>
									<div class="form-group col-md-4">
										<label class="control-label">Tanggal Minutasi</label>
										<input class="form-control" type="date" name="tgl_minutasi"
										value="{{ ($type=='create') ? '' : $banding->tgl_minutasi }}" >
									</div>
									<div class="form-group col-md-4">
										<label class="control-label">Tanggal Kirim Berkas</label>
										<input class="form-control" type="date" name="tgl_kirim_berkas"
										value="{{ ($type=='create') ? '' : $banding->tgl_kirim_berkas }}" >
									</div>
								
								</div>

								<div class="row  col-md-12">
							    
								   <div class="form-group col-md-4">
										<label class="control-label">Tanggal Upload</label>
										<input class="form-control" type="date"  name="tgl_putus_banding"
									value="{{ ($type=='create') ? '' : $banding->tgl_putus_banding }}">
									</div>
									<div class="form-group col-md-6">
										<label class="control-label">Amar Banding</label>
										<input class="form-control" type="text" placeholder="Amar Banding" name="amar_banding"
										value="{{ ($type=='create') ? '' : $banding->amar_banding }}" >
									</div>
									

								</div>
							
						</div>
							  	<div class="text-right">
							<button type="submit" class="btn btn-primary">{{ ($type=='create') ? 'Buat Data Banding' : 'Ubah Data Banding' }} <i class="icon-arrow-right14 position-right"></i></button>
							@if($type=="update")
							<a class="btn btn-danger" href="javascript:void(0)" onclick="window.history.back(); "> Batalkan <i class="fa fa-times position-right"></i></a>
							@endif</div>
							  

							  </div>

						
					
					</form>
					</div>
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
					blockMessage($('#form-blog'),'Please Wait , {{ ($type =="create") ? "Menambahkan Data Banding" : "Memperbarui Data Banding" }}','#fff');
				}
			})
			.done(function(data){
				$('#form-blog').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '{{ ($type =="create") ? "Data Banding Di Buatkan" : "Data Banding Di Perbarui" }}'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("{{base_url('superuser/banding')}}");
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
	<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
</script>


	<script type="text/javascript" src="{{base_url()}}assets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/editor_ckeditor.js"></script>
	
@endsection
@endsection