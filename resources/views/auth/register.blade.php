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
                    <input class="{{ $errors->has('stud-name') ? 'is-invalid':''}}" required id="register_name" type="text">
                    <small class="form-text text-danger">
                        <ul>
                            @foreach($errors->get('name') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </small>
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input required id="register_email" type="email">
                    <small class="form-text text-danger">
                        <ul>
                            @foreach($errors->get('email') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </small>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input required id="register_password" type="password">
                    <small class="form-text text-danger">
                        <ul>
                            @foreach($errors->get('password') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </small>
                </div>
                <div class="field">
                    <label for="phone">Phone</label>
                    <input required id="register_phone" type="phone">
                    <small class="form-text text-danger">
                        <ul>
                            @foreach($errors->get('phone') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </small>
                </div>
                <div>
                    <button class="conflim" id="registerBtn" type="submit">Register</button>
                </div>
            </div>
        </div>
    </div>

@endsection
