@if ($errors->any())
    {{-- <div class="modal is-active">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="message help is-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
    </div> --}}
    <div class="notification is-danger">
        <button class="delete"></button>
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>

@endif