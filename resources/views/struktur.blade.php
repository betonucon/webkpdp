
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
						<div class="col-lg-12">
							<div class="title">
								<p><i class="fa fa-bookmark"></i> {{$judul}}</p>
								
								
							</div>
							
							
						</div>
						@foreach($data as $data)
							<div class="col-lg-4" style="margin-top:2%;">
								<div class="cnt-box cnt-box-side boxed" style="">
									
									<div class="caption" style="width: 100%;text-align:center;background-image: linear-gradient(to right top, #ffffff, #fbfbfb, #ffffff, #ded8e6, #460d7b);">
										<a href="#"><img src="{{url('gambarstruktur?file='.$data['gambar'])}}" alt="" style="width:90%;margin-left:5%;"></a>
										<h2><i class="fa fa-user"></i>  {{$data['name']}}</h2>
										<div class="extra-field" style="background: #f9eded;color:blue;padding:2%;border-top: dotted 1px #cab6b6;border-bottom: dotted 1px #cab6b6;"><i class="fa fa-bookmark"></i> {{$data['jabatan']}} </div>
										<div style="text-align:left;width:100%;font-style:italic">
											<p>
											{!!$data['moto']!!}
											</p>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
					
				</div>
			</section>
			@include('berita')
			
		</main>
@endsection   