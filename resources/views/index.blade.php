
@extends('layouts.app_web')

@section('content')   
<main id="main"> 
	<div class="tp-banner-container">
        <div class="col-lg-12" id="barner-ok">
            <div class="tp-banner" >
                <ul class="tp-revslider-mainul" style="visibility: visible; display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">	<!-- SLIDE  -->
                @foreach(barner() as $barner)
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-delay="13000" >
                        <img src="{{url('gambarbarner?file='.$barner['gambar'])}}"  alt="newslide2014_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption finewide_large_white customin customout tp-resizeme"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="-40"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="500"
                            data-easing="Power3.easeInOut"
                            data-splitin="chars"
                            data-splitout="chars"
                            data-elementdelay="0.08"
                            data-endelementdelay="0.08"
                            data-end="4000"
                            data-endspeed="500"
                            style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">{{$barner['name']}}
                        </div>

                        
                        <div class="tp-caption finewide_verysmall_white_mw customin customout tp-resizeme"
                            
                            data-x="40"
                            data-y="120"
                            data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="900"
                            data-start="5000"
                            data-easing="Power3.easeInOut"
                            data-splitin="lines"
                            data-splitout="lines"
                            data-elementdelay="0.2"
                            data-endelementdelay="0.08"
                            data-endspeed="300"
                            style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">{!!$barner['isi']!!}
                        </div>


                    </li>
                @endforeach	
                                    
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
        
	</div>
	
	<!-- END REVOLUTION SLIDER -->

        
        <section class="section-base section-overflow-top" id="section">
            <div class="container">
                
                <div class="row row-fit-lg" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-12" id="marqueegambar">
                        <img class="logonya"  src="{{url('web/images/kpdp-white0.png')}}" alt="logo" />
                    </div>
                    <!-- <div class="col-lg-12" id="marquee">
                        <marquee class="marquee">ddsfdsfd dsfdsf dsfdsf dsfdsf dsfdsf dsf dsfdsf dsf </marquee>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="title">
                            <p><i class="fa fa-clone"></i> Tentang Kami</p>
                        </div>
                        <p>{!!tentang_kami()['name']!!}</p>
                        
                    </div>
                    <!-- <div class="col-lg-12">
                        <ul class="slider" data-options="arrows:true,nav:false">
                            
                            <li>
                                <a class="img-box img-box-caption btn-video lightbox" href="https://www.youtube.com/watch?v=6TR9EZzpm7o" data-lightbox-anima="fade-top">
                                    <img src="{{url('public/web/images/newlogo.jpg')}}" alt="">
                                    <span>
                                     
                                        Semangat Baru {{nama_perusahaan()}}
                                                                        
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a class="img-box img-box-caption btn-video lightbox" href="https://www.youtube.com/watch?v=ZYZOFRA7NhI" data-lightbox-anima="fade-top">
                                    <img src="{{url('public/web/images/ksuntung.jpg')}}" alt="">
                                    <span>
                                     
                                        {{nama_perusahaan()}} Untung
                                                                        
                                    </span>
                                </a>
                            </li>
                                                </ul>
                    </div> -->
                    
                </div>
            </div>
        </section>

        @include('berita')
        
        

        <section class="section-base" id="section">
            <div class="container">
                <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
                    <!-- <div class="col-lg-6">
                        <img src="{{url('public/web/images/calibration-pic-blue-005.jpg')}}" alt="" />
                    </div> -->
                    <div class="col-lg-12">
                        <div class="title">
                            <p>LOKASI KAMI</p>
                            
                        </div>
                        <div class="map-canvas" id="map_canvas" style="position: relative; overflow: hidden;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.877759743524!2d106.00910831081887!3d-6.011517995646035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418fcc1f9c88ad%3A0xe4afd91a9099e7ad!2sPT.%20KPDP!5e0!3m2!1sid!2sid!4v1614998569444!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <div>
                    </div>
                </div>
                <hr class="space-sm" />
                <hr class="space visible-md" />
                <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
                    <!-- <div class="col-lg-6">
                        <div class="title">
                            <h2>Krasmart</h2>
                           
                        </div>
                        <p>
                         
                            Hadir lebih dekat dengan layanan e-commerce kami.  Jelajahi produk dan layanan lainnya serta dapatkan penawaran terbaik dari kami!
                                                </p>
                        <a href="https://www.krasmart.com/" target="_blank" class="btn btn-border btn-xs">Learn more</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{url('public/web/images/krasmart.png')}}" alt="" />
                    </div> -->
                    <div class="col-lg-12">
                        <div class="title">
                            <p>Krakatau Steel Group</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-2">
                         <img class="ks-group"  src="{{url('web/images/ks.png')}}" alt="logo" />
                    </div>
                    <div class="col-lg-2">
                        <img class="ks-group"  src="{{url('web/images/ks-kbs.png')}}" alt="logo" />
                    </div>
                    <div class="col-lg-2">
                        <img class="ks-group"  src="{{url('web/images/ks-heal.png')}}" alt="logo" />
                    </div>
                    <div class="col-lg-2">
                        <img class="ks-group"  src="{{url('web/images/ks-kwt.png')}}" alt="logo" />
                    </div>
                    <div class="col-lg-2">
                        <img class="ks-group"  src="{{url('web/images/ks-khi.png')}}" alt="logo" />
                    </div>
                </div>
            </div>
        </section>
      <!--
        <section class="section-base">
            <div class="container">
                <table class="table table-grid table-border table-logos table-full-sm" data-anima="fade-bottom" data-time="1000">
                    <tbody>
                        <tr>
                            <td><img src="http://via.placeholder.com/374x103" alt="" /></td>
                            <td><img src="http://via.placeholder.com/374x103" alt="" /></td>
                            <td><img src="http://via.placeholder.com/374x103" alt="" /></td>
                            <td><img src="http://via.placeholder.com/374x103" alt="" /></td>
                            <td><img src="http://via.placeholder.com/374x103" alt="" /></td>
                        </tr>
                    </tbody>
                </table>      
            </div>
        </section>
     -->
</main>
@endsection   