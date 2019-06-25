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
							<li><a href="{{base_url('superuser/kategoripenilaian')}}">Kategori</a></li>
							<li class="active">{{ ($type=="create") ? 'Tambah Data Kategori' : 'Perbarui Data Kategori' }}</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah Kategori</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">

							<div class="form-group">
								<table class="table table-striped datatable-basic table-lg table-responsive" border="1">
		                    <thead>
		                        <tr>
		                        	<th>No</th>
		                        	<th>Komponen</th>
		                            <th>Skor maksimal</th>
		                            <th>Skor Perolehan</th>
		                            <th>Pencapaian</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	
		                         <tr>
		                        	<td align="center">1</td>
			                        <td style="width:300px;">
			                        	kategori
			                        	
			                        </td>
			                        <td style="width:300px;">
			                        	jumlah subkategori dikali 10
			                        </td>
			                        <td class="text-center">
			                        	jumlah skor yang diperoleh() subkategori ditambah )
			                        </td>
			                        <td class="text-center">
			                          jumlah kategori dibagi jumlah skor yang diperoleh
			                        </td>
		                        </tr>

		                        <tr>
		                        	<td align="center" colspan="2">Total</td>
			                        
			                        <td style="width:300px;">
			                        	skor maksimal
			                        </td>
			                        <td class="text-center">
			                        	skor perolehan
			                        </td>
			                        <td class="text-center">
			                          average 
			                        </td>
		                        </tr>
		                    
		                    </tbody>
		                </table><br><br>

		                <table class="table table-striped datatable-basic table-lg table-responsive" border="1">
		                    <thead>
		                        <tr>
		                        	<th>Capaian Akhir</th>
		                        	<th>Kategori</th>
		                           
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	
		                         <tr>
		                        	<td align="center">Hasil average</td>
			                        <td style="width:300px;">
			                        	=IF(A65>=71%,"A",IF(A65>=51%,"B",IF(A65>=26%,"C",IF(A65>=0%,"D"))))
			                        	
			                        </td>
			                        
		                        </tr>

		                        
		                    
		                    </tbody>
		                </table><br><br>

		                <table class="table table-striped datatable-basic table-lg table-responsive" border="1">
		                    <thead>
		                        <tr>
		                        	<th>No</th>
		                        	<th>Skoring</th>
		                        	<th>Kategori</th>
		                           
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	
		                         <tr>
		                        	<td align="center">1</td>
			                        <td style="width:300px;">
			                        	71%  -  100%	                        	
			                        </td>
			                        <td style="width:300px;">
			                        	A	                        	
			                        </td>
			                        
		                        </tr>

		                        
		                    
		                    </tbody>
		                </table>


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
					blockMessage($('#form-blog'),'Please Wait , {{ ($type =="create") ? "Menambahkan Kategori" : "Memperbarui Kategori" }}','#fff');
				}
			})
			.done(function(data){
				$('#form-blog').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '{{ ($type =="create") ? "Kategori Di Buatkan" : "Kategori Di Perbarui" }}'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("{{base_url('superuser/kategoripenilaian')}}");
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