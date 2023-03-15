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
        <form method="post" action="{{'/user/'.$data->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Text input" id="nama" name="nama"
                    value="{{$data->nama}}">
                </div>
            </div>
            @if ($data->foto)
                <div class="mb-3">
                    <img style="max-width:50px;max-height:50px;" src="{{url('foto').'/'.$data->foto}}"/>
                </div>
                
            @endif
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
                    value="{{$data->email}}">
                    <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label">Alamat</label>
                <div class="control">
                  <textarea class="textarea" placeholder="Textarea" id="alamat" name="alamat">{{$data->alamat}}
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