
@extends('layouts.app_web')

@section('content')   
		<header class="header-base">
			<div class="container" style="margin-top: 0px; opacity: 1;">
				<h1>{{$halaman}}</h1>
				<ol class="breadcrumb">
					<li><a href="https://www.krakatausteel.com/">Home</a></li>
					<li><a href="#">{{$halaman}}</a></li>
				</ol>
			</div>
		</header>
		<main id="main">
			
			<section class="section-base section-overflow-top" id="section">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<div class="title">
								<p>{{$judul}}</p>
								
								
							</div>
							<p>{!!$data['name']!!}</p>
						</div>
						<div class="col-lg-3 widget">
							<hr class="space visible-md">
							<form class="form-box">
								<div class="input-text-btn">
									<input class="input-text" type="text" placeholder="Search ..."><input type="submit" value="Search" class="btn">
								</div>
							</form>
							<hr class="space-sm">
							<h3>Categories</h3>
							<hr class="space-xs">
							<div class="menu-inner menu-inner-vertical">
								<ul>
									<li>
										<a href="{{url('about?kategori=sekilas')}}">Sekilas KPDP</a>
									</li>
									<li>
										<a href="{{url('about?kategori=visi')}}">Visi Misi</a>
									</li>
									<li>
										<a href="{{url('about?kategori=corporate')}}">Corporate Value</a>
									</li>
									<li>
										<a href="{{url('about?kategori=sertifikat')}}">Sertifikat</a>
									</li>
										
								</ul>
							</div>
							@include('tampil_samping')
							
						</div>
					</div>
					
				</div>
			</section>
			@include('berita')
			
		</main>
@endsection   