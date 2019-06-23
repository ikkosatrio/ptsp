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
							<li class="active"><a href="#">Penilaian</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Daftar Penilaian</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
							<a href="{{base_url('superuser/penilaian/create')}}"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-plus-circle2"></i></b> Tambah Penilaian</button></a>
						</div>
						<table class="table table-striped datatable-basic table-lg table-responsive">
		                    <thead>
		                        <tr>
		                        	<th>No</th>
		                        	<th>Nama Penilaian</th>
		                        	<th>Kode Sub Penilaian</th>
		                            <th>Sub Penilaian</th>
		                            <th>Deskripsi</th>
		                            <th class="text-center">Aksi</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($penilaian as $key => $result)
		                         <tr>
		                        	<td align="center">{{($key+1)}}</td>
			                        <td style="width:300px;">
			                        	<a href="{{base_url('superuser/penilaian/update/'.$result->id_subkat.'/'.seo($result->id_kategori))}}">
			                        		<b>{{ucwords(read_more($result->nama_kat,30))}}</b>
			                        	</a><br>
			                        	<span class="text-size-mini">
			                        	Tanggal Publish : {{tgl_indo($result->created_at)}}
			                        	</span><br>
			                        </td>
			                        <td style="width:300px;">
			                        	<a href="{{base_url('superuser/penilaian/update/'.$result->id_subkat.'/'.seo($result->kode_subkat))}}">
			                        		<b>{{ucwords(read_more($result->kode_subkat,30))}}</b>
			                        	</a><br>
			                        	<span class="text-size-mini">
			                        	Tanggal Publish : {{tgl_indo($result->created_at)}}
			                        	</span><br>
			                        </td>
			                        <td style="width:300px;">
			                        	<a href="{{base_url('superuser/penilaian/update/'.$result->id_subkat.'/'.seo($result->nama_subkat))}}">
			                        		<b>{{ucwords(read_more($result->nama_subkat,30))}}</b>
			                        	</a><br>
			                        	<span class="text-size-mini">
			                        	Tanggal Publish : {{tgl_indo($result->created_at)}}
			                        	</span><br>
			                        </td>
			                        <td class="text-center">
			                        	<span class="text-size-small text-muted">
			                        		{{read_more(strip_tags($result->deskripsi_subkat),30)}}
			                        	</span>
			                        </td>
			                        <td class="text-center">
			                           <div class="btn-group">
					                    	<button type="button" class="btn btn-danger btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Action <span class="caret"></span></button>
					                    	<ul class="dropdown-menu dropdown-menu-right">
												<li>
													<a href="{{base_url('superuser/penilaian/update/'.$result->id_subkat.'/'.seo($result->nama_subkat))}}">
														<i class="fa fa-edit"></i> Ubah Penilaian
													</a>
												</li>
												<li><a href="javascript:void(0)" onclick="deleteIt(this)" 
												data-url="{{base_url('superuser/penilaian/deleted/'.$result->id_subkat.'/'.seo($result->nama_subkat))}}">
														<i class="fa fa-trash"></i> Hapus Penilaian
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