@extends("layouts.layout")

@push('scripts')
    <script src="{{ asset('js/auth.js') }}"></script>
    <script>
        urlRoute['register'] = "{{ route('authReqRegister') }}";
    </script>
@endpush

@section("page-content")
    <div style="background-image: url(img/polo.jpg)" class="auth-container">
        <div class="field-container container wrapper">
            <div class="auth wrapper">
                <div class="field">
                    <label for="name">Name</label>
                    <input required id="register_name" type="text">
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input required id="register_email" type="email">
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input required id="register_password" type="password">
                </div>
                <div class="field">
                    <label for="phone">Phone</label>
                    <input required id="register_phone" type="phone">
                </div>
                <div>
                    <button class="conflim" id="registerBtn" type="submit">Register</button>
                </div>
            </div>
        </div>
    </div>

@endsection
