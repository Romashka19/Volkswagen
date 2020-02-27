<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Volkswagen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"/>
    <link rel="stylesheet" href="css/libs.min.css"/>
    <link rel="stylesheet" href="css/main.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<body>
    <header>
        <hr/>
        @yield("page-header")
        <div class="container"><a class="toggle-button-menu"><span class="bar-menu"></span><span class="bar-menu"></span><span class="bar-menu"></span></a>
            <div class="menu wrapper">
                <ul class="menuBottom">
                    <li><a href="/" class="link">Головна</a></li>
                    <li><a href="/models" class="link">Моделі</a></li>
                    <li><a class="link">Конфігуратор</a></li>
                    <li><a class="link">Акції</a></li>
                    <li><a class="link B">Volkswagen</a></li>
                </ul>
                <div class="logo"><img src="../img/logo.png"/>
                    <p class="logo-text">Volkswagen</p>
                </div>
                <ul class="menuTop">
                    <li><a class="linkAuth">SingIn</a></li>
                    <li><a class="linkAuth">Register</a></li>
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
</body>
<script src="js/libs.min.js"></script>
<script src="js/common.js"></script>
</html>
