<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>

	<!-- Global stylesheets -->
	<link rel="shortcut icon" type="image/png" href="{{base_url()}}assets/images/website/config/icon/{{$config->icon}}"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{base_url()}}assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="{{base_url()}}assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="{{base_url()}}assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="{{base_url()}}assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="{{base_url()}}assets/css/colors.css" rel="stylesheet" type="text/css">
	<link href="{{base_url()}}assets/js/sweetalert.min.css" rel="stylesheet" type="text/css">
	<link href="{{base_url()}}assets/css/custom2.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">

	<!-- /global stylesheets -->
	@yield('style')
	<!-- Core JS files -->


</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{base_url('superuser')}}"><img src="{{base_url()}}assets/images/website/config/logo/{{$config->logo}}" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
				
			</ul>

			<p class="navbar-text"><a href="{{base_url()}}"><span class="label bg-success">LIHAT WEB</span></a></p>

			<ul class="nav navbar-nav navbar-right">

				

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{img_holder('profile')}}" alt="">
						<span>{{$currentUser->nama}}</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						{{-- <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li> --}}
						{{-- <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li> --}}
						<li><a href="{{base_url()}}auth/keluar"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="{{img_holder('profile')}}" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">{{$currentUser->nama}}</span>
									
								</div>

							
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="{{match($menu,'dashboard','active')}}"><a href="{{base_url('superuser')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								@if ($currentUser->id_jbt == 10)
								<li class="{{match($menu,'config','active')}}"><a href="{{base_url('superuser/config')}}"><i class="icon-gear"></i> <span>Configurasi Website</span></a></li>
								@endif
								<!-- <li class="{{match($menu,'slider','active')}}"><a href="{{base_url('superuser/slider')}}"><i class="icon-images2"></i> <span>Slider</span></a></li>
								<li class="{{match($menu,'header','active')}}"><a href="{{base_url('superuser/header')}}"><i class="icon-home4"></i> <span>Header</span></a></li> -->
								<!-- /main -->

								<!-- Forms -->
								<li class="navigation-header"><span>Manajemen Konten</span> <i class="icon-menu" title="Manajemen Mata Pelajaran"></i></li>
								<!-- <li class="{{match($menu,'profil','active')}}"><a href="{{base_url('superuser/profil')}}"><i class="icon-home5"></i> <span>Profil Website</span></a></li> -->

                                @if ($currentUser->id_jbt == 1 || $currentUser->id_jbt == 2 || $currentUser->id_jbt == 6 || $currentUser->id_jbt == 7 || $currentUser->id_jbt == 8 || $currentUser->id_jbt == 10 || $currentUser->id_jbt == 11)
                                <li class="{{match($menu,'banding','active')}}{{match($menu,'pengadilan','active')}}"><a href="#"><i class="icon-home4"></i> <span>Data Banding</span></a>
									<ul>
										
										<li class="{{match($menu,'kategori','active')}}"><a href="{{base_url('superuser/banding')}}">Daftar Data Banding</a></li>
										<li class="{{match($menu,'pengadilan','active')}}"><a href="{{base_url('superuser/pengadilan')}}">Data Pengadilan Agama</a></li>
										
									</ul>
								</li>
                                @endif

								@if ($currentUser->id_jbt == 1 || $currentUser->id_jbt == 2 || $currentUser->id_jbt == 10 || $currentUser->id_jbt == 11)
								<li class="{{match($menu,'kategori','active')}}{{match($menu,'subkategori','active')}}">
									<a href="#"><i class="icon-box"></i> <span>Penilaian PTSP</span></a>
									<ul>
										
										<li class="{{match($menu,'kategori','active')}}"><a href="{{base_url('superuser/kategoripenilaian')}}">Kategori Penilaian</a></li>
										<li class="{{match($menu,'subkategori','active')}}"><a href="{{base_url('superuser/subkategori')}}">Sub Kategori</a></li>
										
										<li class="{{match($menu,'penilaian','active')}}"><a href="{{base_url('superuser/penilaian')}}">Data Penilaian</a></li>
										
									</ul>
								</li>
								@endif

								<li class="{{match($menu,'suratmasuk','active')}}{{match($menu,'suratkeluar','active')}}">
									<a href="#"><i class="icon-box"></i> <span>Surat</span></a>
									<ul>
										<li class="{{match($menu,'suratmasuk','active')}}"><a href="{{base_url('superuser/suratmasuk')}}"> Surat Masuk</a></li>
										<li class="{{match($menu,'suratkeluar','active')}}"><a href="{{base_url('superuser/suratkeluar')}}">Surat Keluar</a></li>
										<li class="{{match($menu,'klasifikasi','active')}}"><a href="{{base_url('superuser/klasifikasi')}}">Klasifikasi Surat</a></li>
										
									</ul>
								</li>

								@if ($currentUser->id_jbt == 10)
								<li class="{{match($menu,'pegawai','active')}}{{match($menu,'kategorijbt','active')}}">
									<a href="#"><i class="icon-box"></i> <span>Manajemen Pengguna</span></a>
									<ul>
										<li class="{{match($menu,'pegawai','active')}}"><a href="{{base_url('superuser/pegawai')}}"> Data Pegawai</a></li>
										<li class="{{match($menu,'kategorijbt','active')}}"><a href="{{base_url('superuser/kategorijbt')}}"> Jabatan</a></li>
										
									</ul>
								</li>
								@endif
								
								<!-- /forms -->
							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			@yield('content')

			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/pickers/daterangepicker.js"></script>

	@yield('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/core/app.js"></script>
	<!-- /theme JS files -->

	<script type="text/javascript" src="{{base_url()}}assets/js/cak-js.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/sweetalert.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
	@yield('script')
	<script type="text/javascript">
		function deleteIt(that){
		swal({
			title: "Apa Anda Yakin ?",
			text: "Anda Akan Menghapus Data Ini",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Ya, Hapus Data!",
			closeOnConfirm: false
		}, function(){
			swal({
					title: "Deleted",
					text: "Data Anda Telah Di Hapus",
					type: "success"
			},function(){
				redirect($(that).attr('data-url'));
			});

		});
	}
	</script>
</body>
</html>
