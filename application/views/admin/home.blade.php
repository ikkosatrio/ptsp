@extends('admin.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('corejs')
{{-- <script type="text/javascript" src="{{base_url()}}assets/js/pages/dashboard.js"></script> --}}
@endsection
@section('content')
<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->


						<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Daftar Data Banding Terbaru</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						
						<table class="table table-striped datatable-basic table-lg table-responsive">
		                    <thead>
		                        <tr>
		                        	<th>No</th>
		                        	<th>No Urut PTA</th>
		                            <th>No Perkara</th>
		                            <th>Asal PA</th>
		                            <th class="text-center">Tanggal Terima Berkas</th>
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
			                           <a href="{{base_url('superuser/banding/update/'.$result->id_banding.'/'.seo($result->no_perkara))}}">
			                        		<b>{{ucwords(read_more($result->tgl_terima_berkas,30))}}</b>
			                        	</a><br>
			                        </td>
		                        </tr>
		                        @endforeach
		                    </tbody>
		                </table>
					</div>
					<!-- /basic datatable -->					

			

				<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Daftar Penilaian Terbaru</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						
						<table class="table table-striped datatable-basic table-lg table-responsive">
		                    <thead>
		                        <tr>
		                        	<th>No</th>
		                        	<th>Nama Penilaian</th>
		                        	<th>Triwulan</th>
		                            <th class="text-center">Skor Akhir</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($penilaian as $key => $result)
		                         <tr>

									 <td align="center">{{($key+1)}}</td>
									 <td align="center">{{($result->nip)}}</td>
									 <td align="center">{{($result->triwulan)}}</td>
			                        <td class="text-center">
			                           
					                    	A
			                        </td>
		                        </tr>
		                        @endforeach
		                    </tbody>
		                </table>
					</div>
					<!-- /basic datatable -->					

				</div>
					
					<!-- /main charts -->


					<!-- Dashboard content -->
					
					<!-- /dashboard content -->


					<!-- Footer -->
					{{-- <div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div> --}}
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
@endsection