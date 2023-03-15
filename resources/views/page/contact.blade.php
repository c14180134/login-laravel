@extends('layout/aplikasi')

@section('konten')
<h1>{{$judul}}</h1>
</p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Corporis reiciendis, rerum sed aut magnam, quidem asperiores pariatur
doloremque eligendi corrupti commodi neque ducimus sit temporibus facilis deleniti saepe ex quia?</p>
<p>
    <ul>
        <li><i class="fa fa-mail-reply" aria-hidden="true"></i> Email : {{ $kontak['email']}}</li>
        <li><i class="fa fa-youtube" aria-hidden="true"></i> Youtube : {{ $kontak['youtube']}}</li>
    </ul>
</p>

@endsection