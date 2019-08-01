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
							<li class="active"><a href="#">Data Klasifikasi Surat</a></li>
						</ul>
					</div>
				</div>


			
			<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Daftar Klasifikasi Surat</h5>
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
		                        	<th>Kode Surat</th>
		                            <th>Klasifikasi</th>
		                            <th>Deskripsi</th>
		                            
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($klasifikasi as $key => $result)
		                         <tr>
		                        	<td align="center">{{($key+1)}}</td>
			                       

			                        <td style="width:300px;">
			                        	
			                        		<b>{{ucwords(read_more($result->kode_klasifikasi,30))}}</b>
			                        	<br>
			                        	<br>
			                        </td>
			                        <td style="width:300px;">
			                        	
			                        		<b>{{ucwords(read_more($result->nama_klasifikasi,30))}}</b>
			                        	<br>
			                        	<br>
			                        </td>
			                        <td class="text-center">
			                        	<span class="text-size-small text-muted">
			                        		{{read_more(strip_tags($result->uraian_klasifikasi),130)}}
			                        	</span>
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


@endsection




