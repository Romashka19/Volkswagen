@extends("layouts.layout")

@push('scripts')
    <script src="{{ asset('js/auth.js') }}"></script>
    <script>
        urlRoute['login'] = "{{ route('authReqLogin') }}";
    </script>
@endpush

@section("page-content")
    <div style="background-image: url(img/polo.jpg)" class="auth-container">
        <div class="field-container container wrapper">
            <div class="auth wrapper">
                <div class="field">
                    <label for="email">Email</label>
                    <input required id="login_email" type="email">
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input required id="login_password" type="password">
                </div>
                <div>
                    <button class="conflim" id="loginBtn">Login</button>
                </div>
            </div>
        </div>
    </div>
@endsection
