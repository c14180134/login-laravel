@extends('layout/aplikasi')

@section('konten')
    <div class="container pt-2">
        <form method="post" action="/user" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Text input" id="nama" name="nama"
                    value="{{Session::get('nama')}}">
                </div>
            </div>
            {{-- <div class="field">
                <label class="label">Foto</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-danger" type="file" id="foto" name="foto">
                </div>
            </div> --}}
            <div class="file has-name" id="file-js-example">
                <label class="file-label">
                  <input class="file-input" type="file" name="foto">
                  <span class="file-cta">
                    <span class="file-icon">
                      <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label">
                      Choose a file…
                    </span>
                  </span>
                  <span class="file-name" id="file-name">
                  </span>
                </label>
            </div>
            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-danger" type="email" placeholder="Email input" id="email" name="email"
                    value="{{Session::get('email')}}">
                    <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label">Alamat</label>
                <div class="control">
                  <textarea class="textarea" placeholder="Textarea" id="alamat" name="alamat">
                    {{Session::get('alamat')}}
                  </textarea>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                  <button class="button is-link">Submit</button>
                </div>
                <div class="control">
                  <button class="button is-link is-light">Cancel</button>
                </div>
            </div>
        </form>
        
    </div>
@endsection