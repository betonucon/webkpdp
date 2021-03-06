
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
			


			<section class="section-base section-color" id="section" style="background:#fff">
				<div class="container" >
					<div class="row" data-anima="fade-bottom" data-time="1000">
						<div class="col-lg-12">
							<div class="title">
								<p><i class="fa fa-newspaper-o"></i> Berita {{nama_perusahaan()}}</p>
															
							</div>
						</div>
						<!-- <div class="col-lg-6 align-right align-left-md">
							<hr class="space-sm hidden-md" />
							
							<a href="{{url('news_all/')}}" class="btn-text active">Semua Berita</a>
													
						</div> -->
					</div>
					<hr class="space" />
					<div class="grid-list" data-columns="3" data-columns-md="2" data-columns-sm="1" data-anima="fade-bottom" data-time="1000">
						<div class="grid-box">
														
							@foreach(new_all() as $new_home)   
								<div class="grid-item">
									<div class="cnt-box cnt-box-blog-top" data-href="{{url('news/'.$new_home['link'])}}">
										<a href="#" class="img-box">
											<!-- <div class="blog-date">
												<span></span>
												<span style="text-transform:uppercase">{{bulan_tahun($new_home['tanggal'])}}</span>
											</div> -->
											<img src="{{url('gambarnews?file='.$new_home['gambar'])}}" class="news-home" alt="" />
										</a>
										<div class="caption">
											<h2>{{$new_home['name']}}</h2>
											<ul class="icon-list icon-list-horizontal">
												<li><a href="#"><i class="fa fa-newspaper-o"></i>   {{nama_perusahaan()}}</a></li>
												<li class="icon-links">
													<!-- <a href="#" data-social="share-fadebook" data-social-url=""><i class="icon-facebook"></i></a>
													<a href="#" data-social="share-twitter" data-social-url=""><i class="icon-twitter"></i></a>
													<a href="#" data-social="share-linkedin" data-social-url=""><i class="icon-linkedin"></i></a> -->
													{{tgl($new_home['tanggal'])}} {{bulan_tahun_lengkap($new_home['tanggal'])}}
												</li>
											</ul>
											<div style="width:100%;overflow-y:hidden;height:200px">
											{!!$new_home['isi']!!}
											</div>
										</div>
									</div>
								</div>
							@endforeach   
														
								
								
													
						</div>
					</div>
				</div>
			</section>
			
		</main>
@endsection   