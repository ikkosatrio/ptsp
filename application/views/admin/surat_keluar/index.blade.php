@extends('admin.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/datatables_basic.js"></script>
@endsection
@section('content')
	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{base_url('superuser')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"><a href="#">Data Surat Keluar</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Daftar Surat Keluar</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
							<a href="{{base_url('superuser/suratkeluar/create')}}"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-plus-circle2"></i></b> Tambah Data Surat Keluar</button></a>
						</div>
						<table class="table table-striped datatable-basic table-lg table-responsive">
		                    <thead>
		                        <tr>
		                        	<th>No</th>
		                        	<th>No & Tanggal Surat</th>
		                            <th>Tujuan Surat</th>
		                            <th>Isi Ringkas</th>
		                            <th>File</th>
		                            <th class="text-center">Aksi</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($suratkeluar as $key => $result)
		                         <tr>
		                        	<td align="center">{{($key+1)}}</td>
			                        <td style="width:300px;">
			                        	<a href="{{base_url('superuser/suratkeluar/update/'.$result->id_suratkeluar.'/'.seo($result->no_surat))}}">
			                        		<b>{{ucwords(read_more($result->no_surat,30))}}</b>
			                        	</a><br>
			                        	<span class="text-size-mini">
			                        	Tanggal Dibuat : {{tgl_indo($result->created_at)}}
			                        	</span><br>
			                        </td>
			                        <td style="width:300px;">
			                        	<a href="{{base_url('superuser/suratkeluar/update/'.$result->id_suratkeluar.'/'.seo($result->tujuan_surat))}}">
			                        		<b>{{ucwords(read_more($result->tujuan_surat,30))}}</b>
			                        	</a>
			                        	
			                        </td>
			                        <td class="text-center">
			                        	<a href="{{base_url('superuser/suratkeluar/update/'.$result->id_suratkeluar.'/'.seo($result->isi_ringkas))}}">
			                        		<b>{{ucwords(read_more($result->isi_ringkas,30))}}</b>
			                        	</a>
			                        	
			                        </td>
			                        <td class="text-center">
			                        	<a href="{{base_url('superuser/suratkeluar/update/'.$result->id_suratkeluar.'/'.seo($result->isi_ringkas))}}">
			                        		<b>{{ucwords(read_more($result->isi_ringkas,30))}}</b>
			                        	</a>
			                        	
			                        </td>

			                        <!-- <td>
				                        <a href="{{img_pegawai($result->foto)}}" data-popup="lightbox">
					                        <img src="{{img_pegawai($result->foto)}}" alt="{{$result->foto}}" class="img-rounded img-preview" style="object-fit: cover;height: 70px;">
				                        </a>
			                        </td>
 -->
			                        <td class="text-center">
			                           <div class="btn-group">
					                    	<button type="button" class="btn btn-danger btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Action <span class="caret"></span></button>
					                    	<ul class="dropdown-menu dropdown-menu-right">
												<li>
													<a href="{{base_url('superuser/suratkeluar/update/'.$result->id_suratkeluar.'/'.seo($result->no_surat))}}">
														<i class="fa fa-edit"></i> Ubah Surat Keluar
													</a>
												</li>

												<li>
													<a href="{{base_url('superuser/suratkeluar/update/'.$result->id_suratkeluar.'/'.seo($result->no_surat))}}">
														<i class="fa fa-edit"></i> Detail Surat Keluar
													</a>
												</li>
												
												<li><a href="javascript:void(0)" onclick="deleteIt(this)" 
												data-url="{{base_url('superuser/suratkeluar/deleted/'.$result->id_suratkeluar.'/'.seo($result->no_surat))}}">
														<i class="fa fa-trash"></i> Hapus Surat Keluar
													</a>
												</li>



											</ul>
										</div>
			                        </td>
		                        </tr>
		                        @endforeach
		                    </tbody>
		                </table>
					</div>
					<!-- /basic datatable -->					

				</div>
				<!-- /content area -->

			</div>

			@section('script')
	
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script>
  $(function() {
    function log( message ) {
      $( "<div>" ).text( message ).prependTo( "#log" );
      $( "#log" ).scrollTop( 0 );
    }

    $( "#city" ).autocomplete({
      source: function( request, response ) {
        $.ajax({
          url: "http://gd.geobytes.com/AutoCompleteCity",
          dataType: "jsonp",
          data: {
            q: request.term
          },
          success: function( data ) {
            response( data );
          }
        });
      },
      minLength: 3,
      select: function( event, ui ) {
        log( ui.item ?
          "Selected: " + ui.item.label :
          "Nothing selected, input was " + this.value);
      },
      open: function() {
        $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
      },
      close: function() {
        $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
      }
    });
  });
</script>
	
	
@endsection
@endsection

