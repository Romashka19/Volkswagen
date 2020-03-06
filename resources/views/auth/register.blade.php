@extends("layouts.layout")

@push('scripts')
    <script src="{{ asset('js/auth.js') }}"></script>
    <script>
        urlRoute['register'] = "{{ route('authReqRegister') }}";
    </script>
@endpush

@section("page-content")
    <div>
        <div>
            <div>
                <label for="name">name</label>
                <input id="register_name" type="text">
            </div>
            <div>
                <label for="email">email</label>
                <input id="register_email" type="email">
            </div>
            <div>
                <label for="password">password</label>
                <input id="register_password" type="password">
            </div>
            <div>
                <label for="phone">phone</label>
                <input id="register_phone" type="phone">
            </div>
            <div>
                <button id="registerBtn" type="submit">Register</button>
            </div>
        </div>
    </div>

@endsection
