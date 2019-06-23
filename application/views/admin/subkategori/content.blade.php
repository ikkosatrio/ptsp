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
							<li><a href="{{base_url('superuser/subkategori')}}">Kategori</a></li>
							<li class="active">{{ ($type=="create") ? 'Tambah Data Sub Kategori' : 'Perbarui Data Sub Kategori' }}</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah Sub Kategori</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
						<form id="form-blog" class="form-horizontal" action="{{ ($type=='create') ? base_url('superuser/subkategori/created') : base_url('superuser/subkategori/updated/'.$subkategori->id_subkat) }}" method="post">
							<div class="form-group">
                                <label class="col-lg-2 control-label">Kategori <span class="text-danger"><b>*</b></span></label>
                                <div class="col-lg-10">
                                    <select class="select-search" name="kategori" required>
                                        <option value="">Pilih Kategori</option>
                                        @foreach($kategori as $result)
                                            @if($type=="update")
                                                <option value="{{$result->id_kategori}}" {{($result->id_kategori==$subkategori->id_kategori) ? "selected" : ""}}>{{$result->nama_kat}}</option>
                                            @else
                                                <option value="{{$result->id_kategori}}">{{$result->nama_kat}}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                </div>
                            </div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Kode <span class="text-danger"><b>*</b></span></label>
								<div class="col-lg-10">
									<input class="form-control" type="text" placeholder="Kode Penilaian" name="kode_subkat"
									value="{{ ($type=='create') ? '' : $subkategori->kode_subkat }}" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Nama Penilaian <span class="text-danger"><b>*</b></span></label>
								<div class="col-lg-10">
									<input class="form-control" type="text" placeholder="Nama Sub Kategori" name="nama_subkat"
									value="{{ ($type=='create') ? '' : $subkategori->nama_subkat }}" required>
								</div>
							</div>


							<div class="form-group">
								<label class="col-lg-2 control-label">Deskripsi Sub Kategori <span class="text-danger"><b>*</b></span></label>
								<div class="col-lg-10">
									<textarea rows="10" id="editor-full" cols="100" class="wysihtml5 wysihtml5-default2 form-control"  name="deskripsi" >{!! ($type=='create') ? '' : $subkategori->deskripsi_subkat !!}</textarea>
								</div>
							</div>

					<div class="text-right">
							<button type="submit" class="btn btn-primary">{{ ($type=='create') ? 'Buat Sub Kategori' : 'Ubah Sub kategori' }} <i class="icon-arrow-right14 position-right"></i></button>
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
					blockMessage($('#form-blog'),'Please Wait , {{ ($type =="create") ? "Menambahkan Sub Kategori" : "Memperbarui Sub Kategori" }}','#fff');
				}
			})
			.done(function(data){
				$('#form-blog').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '{{ ($type =="create") ? "Sub Kategori Di Buatkan" : "Sub Kategori Di Perbarui" }}'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("{{base_url('superuser/subkategori')}}");
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