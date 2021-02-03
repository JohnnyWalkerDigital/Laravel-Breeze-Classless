@if ($errors->any())
    <div>
        <div>
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
