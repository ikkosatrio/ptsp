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
							<li class="active"><a href="#">Data Surat Masuk</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Daftar Surat Masuk</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
							<a href="{{base_url('superuser/suratmasuk/create')}}"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-plus-circle2"></i></b> Tambah Data Surat Masuk</button></a>
						</div>
						<table class="table table-striped datatable-basic table-lg table-responsive">
		                    <thead>
		                        <tr>
		                        	<th>No</th>
		                        	<th>No Surat</th>
		                        	<th>Sifat Surat</th>
		                            <th>Tanggal Masuk</th>
		                            <th>Asal Surat</th>
		                            <th>Bagian</th>
		                            <th>Perihal</th>
		                            <th class="text-center">Aksi</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($suratmasuk as $key => $result)
		                         <tr>
		                        	<td align="center">{{($key+1)}}</td>
			                        <td style="width:300px;">
			                        	<a href="{{base_url('superuser/suratmasuk/update/'.$result->id_suratmasuk.'/'.seo($result->no_surat))}}">
			                        		<b>{{ucwords(read_more($result->no_surat,30))}}</b>
			                        	</a>
			                        </td>
			                        <td class="text-center">
			                        	<a href="{{base_url('superuser/suratmasuk/update/'.$result->id_suratmasuk.'/'.seo($result->sifat_surat))}}">
			                        		<b>{{ucwords(read_more($result->sifat_surat,30))}}</b>
			                        	</a>
			                        	
			                        </td>
			                        <td style="width:300px;">
			                        	<a href="{{base_url('superuser/suratmasuk/update/'.$result->id_suratmasuk.'/'.seo($result->tanggal_terima_surat))}}">
			                        		<b>{{ucwords(read_more($result->tanggal_terima_surat,30))}}</b>
			                        	</a>
			                        	
			                        </td>
			                        <td class="text-center">
			                        	<a href="{{base_url('superuser/suratmasuk/update/'.$result->id_suratmasuk.'/'.seo($result->asal_surat))}}">
			                        		<b>{{ucwords(read_more($result->asal_surat,30))}}</b>
			                        	</a>
			                        	
			                        </td>
			                        <td class="text-center">
			                        	<a href="{{base_url('superuser/suratmasuk/update/'.$result->id_suratmasuk.'/'.seo($result->bagian))}}">
			                        		<b>{{ucwords(read_more($result->bagian,30))}}</b>
			                        	</a>
			                        	
			                        </td>
			                        <td class="text-center">
			                        	<a href="{{base_url('superuser/suratmasuk/update/'.$result->id_suratmasuk.'/'.seo($result->isi_ringkas))}}">
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
													<a href="{{base_url('superuser/suratmasuk/update/'.$result->id_suratmasuk.'/'.seo($result->no_surat))}}">
														<i class="fa fa-edit"></i> Ubah Surat Masuk
													</a>
												</li>

												<li>
													<a href="{{base_url('superuser/suratmasuk/update/'.$result->id_suratmasuk.'/'.seo($result->no_surat))}}">
														<i class="fa fa-edit"></i> Detail Surat Masuk
													</a>
												</li>
												
												<li><a href="javascript:void(0)" onclick="deleteIt(this)" 
												data-url="{{base_url('superuser/suratmasuk/deleted/'.$result->id_suratmasuk.'/'.seo($result->no_surat))}}">
														<i class="fa fa-trash"></i> Hapus Surat Masuk
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

