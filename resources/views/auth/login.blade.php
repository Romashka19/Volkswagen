@extends("layouts.layout")

@push('scripts')
    <script src="{{ asset('js/auth.js') }}"></script>
    <script>
        urlRoute['login'] = "{{ route('authReqLogin') }}";
    </script>
@endpush

@section("page-content")
    <div>
        <div>
            <div>
                <label for="email">email</label>
                <input id="login_email" type="email">
            </div>
            <div>
                <label for="password">password</label>
                <input id="login_password" type="password">
            </div>
            <div>
                <button id="loginBtn">Login</button>
            </div>
        </div>
    </div>
@endsection
