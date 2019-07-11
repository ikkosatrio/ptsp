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
							<li class="active"><a href="#">Pengadilan Agama</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Daftar Pengadilan Agama</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
							<a href="{{base_url('superuser/pengadilan/create')}}"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-plus-circle2"></i></b> Tambah Pengadilan Agama</button></a>
						</div>
						<table class="table table-striped datatable-basic table-lg table-responsive">
		                    <thead>
		                        <tr >
		                        	<th style="text-align: center;" >No</th>
		                            <th>ID</th>		                            
		                            <th>Nama Pengadilan</th>
		                            <th>Deskripsi Pengadilan</th>
		                            <th class="text-center">Aksi</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($pengadilan as $key => $result)
		                         <tr>
		                        	<td align="center">{{($key+1)}}</td>
			                          <td class="text-center">
			                        	<span class="text-size-small text-muted">
			                        		{{read_more(strip_tags($result->id_pengadilan),130)}}
			                        	</span>
			                        </td>
			                        
			                        <td style="width:300px;">
			                        	<a href="{{base_url('superuser/pengadilan/update/'.$result->id_pengadilan.'/'.seo($result->nama_peng))}}">
			                        		<b>{{ucwords(read_more($result->nama_peng,30))}}</b>
			                        	</a><br>
			                        	<span class="text-size-mini">
			                        	Tanggal Publish : {{tgl_indo($result->created_at)}}
			                        	</span><br>
			                        </td>
			                        
			                        <td class="text-center">
			                        	<span class="text-size-small text-muted">
			                        		{{read_more(strip_tags($result->deskripsi_peng),130)}}
			                        	</span>
			                        </td>
			                        
			                        <td class="text-center">
			                           <div class="btn-group">
					                    	<button type="button" class="btn btn-danger btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Action <span class="caret"></span></button>
					                    	<ul class="dropdown-menu dropdown-menu-right">
												<li>
													<a href="{{base_url('superuser/pengadilan/update/'.$result->id_pengadilan.'/'.seo($result->nama_peng))}}">
														<i class="fa fa-edit"></i> Ubah Pengadilan Agama
													</a>
												</li>
												<li><a href="javascript:void(0)" onclick="deleteIt(this)" 
												data-url="{{base_url('superuser/pengadilan/deleted/'.$result->id_pengadilan.'/'.seo($result->nama_peng))}}">
														<i class="fa fa-trash"></i> Hapus Pengadilan Agama
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
@endsection