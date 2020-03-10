<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Volkswagen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/libs.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>var csrfToken = '{{ csrf_token() }}'; var urlRoute = {};</script>
</head>
<body>
    <header>
        <hr/>
        @yield("page-header")
        <div class="container"><a class="toggle-button-menu"><span class="bar-menu"></span><span class="bar-menu"></span><span class="bar-menu"></span></a>
            <div class="menu wrapper">
                <ul class="menuBottom">
                    <li><a href="{{ asset('/') }}" class="link">Головна</a></li>
                    <li><a href="{{ asset(route('models')) }}" class="link">Моделі</a></li>
                    <li><a  class="link">Конфігуратор</a></li>
                    <li><a class="link">Акції</a></li>
                    <li><a class="link B">Volkswagen</a></li>
                </ul>
                <div class="logo"><img src="../img/logo.png"/>
                    <p class="logo-text">Volkswagen</p>
                </div>
                <ul class="menuTop">
                    @can('admin-panel')
                        <li><a href="{{ asset('admin/dashboard') }}" class="linkAuth">ADMIN</a></li>
                    @endcan
                    @guest
                        <li><a href="{{ asset('login') }}" class="linkAuth">SingIn</a></li>
                        <li><a href="{{ asset('register') }}" class="linkAuth">Register</a></li>
                    @else
                        <li><a class="linkAuth">{{ Auth::user()->name }}</a></li>
                        <li><a href="{{ asset('logout') }}" class="linkAuth">Logout</a></li>
                    @endguest
                </ul>
            </div><a class="toggle-button-reg"><span class="bar-reg"></span><span class="bar-reg"></span><span class="bar-reg"></span></a>
        </div>
    </header>

    <div>
        @yield("page-content")
    </div>

    <footer>
        <div class="container">
            <div class="information wrapper">
                <div class="info">
                    <h3>Volkswagen</h3>
                    <p>Моделі</p>
                    <p>	Новини</p>
                </div>
                <div class="info">
                    <h3>Сервіс</h3>
                    <p>Конфігуратор</p>
                    <p>	Підписка на новини</p>
                </div>
                <div class="info">
                    <h3>Підтримка</h3>
                    <p>	Світ Volkswagen</p>
                    <p>	Акції</p>
                </div>
                <div class="info">
                    <h3>Соціальні мережі</h3>
                    <p>Facebook</p>
                    <p>Instagram	</p>
                </div>
            </div>
            <p>© 2020 Volkswagen, all rights reserved	</p>
        </div>
    </footer>
    <script src="{{ asset('js/libs.min.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
    @stack('scripts')
<!--------------------------------------------------------------------------------------------->
</body>
</html>
