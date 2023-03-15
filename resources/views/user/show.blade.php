@extends('layout/aplikasi')

@section('konten')
    <div class="container pt-2">
        <p class="control">
            <a class="button is-link" href='/user'>
                <span class="icon is-small">
                <i class="fas fa-arrow-left"></i>
                </span>
            </a>
        </p>
        <h1 class="is-size-1">{{$data->nama}}</h1>
        <p>
            <b>Email : </b>{{$data->email}}
        </p>
        <p>
            <b>Alamat : </b>{{$data->alamat}}
        </p>
    </div>
@endsection