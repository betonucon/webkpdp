<hr class="space-sm">
<h3>Berita Terbaru</h3>
<hr class="space-sm">
<div class="menu-inner menu-inner-vertical menu-inner-image">
    <ul>
        @foreach(new_lainnya2() as $new_lainnya)
        <li>
            <a href="{{url('news/'.$new_lainnya['link'])}}">
                <img src="{{url('gambarnews?file='.$new_lainnya['gambar'])}}" class="news-home" alt="" />
                <span>{{tgl_lainnya($new_lainnya['tanggal'])}}</span>
                {{$new_lainnya['name']}}
            </a>
        </li>
        @endforeach
    </ul>
</div>
<hr class="space-sm">
<h3>Pengumuman</h3>
<hr class="space-sm">
<div class="menu-inner menu-inner-vertical menu-inner-image">
    <ul>
        @foreach(pengumuman_home() as $pengumuman)
        <li>
            <a href="{{url('news/'.$pengumuman['link'])}}">
                <span>{{tgl_lainnya($pengumuman['tanggal'])}}</span>
                {{$pengumuman['name']}}
            </a>
        </li>
        @endforeach
    </ul>
</div>