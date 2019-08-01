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
							<li class="active"><a href="#">Banding</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Daftar Data Banding</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
						    @if ($currentUser->id_jbt == 1 || $currentUser->id_jbt == 2 || $currentUser->id_jbt == 6 || $currentUser->id_jbt == 7 || $currentUser->id_jbt == 8 || $currentUser->id_jbt == 10)
							<a href="{{base_url('superuser/banding/create')}}"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-plus-circle2"></i></b> Tambah Banding</button></a>
							@endif
						</div>
						<table class="table table-striped datatable-basic table-lg table-responsive">
		                    <thead>
		                        <tr>
		                        	<th>No</th>
		                        	<th>No Urut PTA</th>
		                            <th>No Perkara</th>
		                            <th>Asal PA</th>
		                            <th class="text-center">Aksi</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($banding as $key => $result)
		                         <tr>
		                        	<td align="center">{{($key+1)}}</td>
			                       

			                        <td style="width:300px;">
			                        	<a href="{{base_url('superuser/banding/update/'.$result->id_banding.'/'.seo($result->id_banding))}}">
			                        		<b>{{ucwords(read_more($result->id_banding,30))}}</b>
			                        	</a><br>
			                        	<span class="text-size-mini">
			                        	Tanggal Publish : {{tgl_indo($result->created_at)}}
			                        	</span><br>
			                        </td>
			                        <td style="width:300px;">
			                        	<a href="{{base_url('superuser/banding/update/'.$result->id_banding.'/'.seo($result->no_perkara))}}">
			                        		<b>{{ucwords(read_more($result->no_perkara,30))}}</b>
			                        	</a><br>
			                        	<span class="text-size-mini">
			                        	Tanggal Publish : {{tgl_indo($result->created_at)}}
			                        	</span><br>
			                        </td>
			                        <td class="text-center">
			                        	<span class="text-size-small text-muted">
			                        		{{read_more(strip_tags($result->nama_peng),130)}}
			                        	</span>
			                        </td>
			                        <td class="text-center">
			                           <div class="btn-group">
					                    	<button type="button" class="btn btn-danger btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Action <span class="caret"></span></button>
					                    	<ul class="dropdown-menu dropdown-menu-right">
												<li>
													<a href="{{base_url('superuser/banding/update/'.$result->id_banding.'/'.seo($result->no_perkara))}}">
														<i class="fa fa-edit"></i> Lihat Data Banding
													</a>
												</li>
												@if ($currentUser->id_jbt == 10)
												<li>
												    <a href="javascript:void(0)" onclick="deleteIt(this)" 
												data-url="{{base_url('superuser/banding/deleted/'.$result->id_banding.'/'.seo($result->no_perkara))}}">
														<i class="fa fa-trash"></i> Hapus Data Banding
													</a>
												</li>
												@endif
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