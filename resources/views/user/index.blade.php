@extends('layout/aplikasi')
@section('css-head')
<link rel="stylesheet" href="{{ mix('resources/css/home.css') }}">
@endsection
@section('konten')
    <div class="container pt-2">
        <a href="/user/create" class="button is-primary"> Tambah Siswa </a>
        <table class="table is-hoverable is-bordered">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>
                            @if ($item->foto)
                                <img style="max-width:50px;max-height:50px" src="{{url('foto').'/'.$item->foto }}"/>
                            @endif
                        <td>{{ $item->nama}}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->alamat}}</td>
                        <td><a class="button is-dark is-small" href='{{url('/user/'.$item->id)}}'>Detail</a>
                            <a class="button is-warning is-small" href='{{url('/user/'.$item->id.'/edit')}}'>Edit</a>
                            <form onsubmit="return confirm('hapus data??')"
                            class="is-inline" method="post" action="{{'/user/'.$item->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="button is-danger is-small" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav class="pagination" role="navigation" aria-label="pagination">
            {{ $data->links('pagination.bulma') }}
        </nav>
    </div>
@endsection