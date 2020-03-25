@extends("layouts.layout")

@section("page-content")
    <div class="swiper-container" data-autoplay="1000">
        <div class="swiper-wrapper">
            <div style="background-image: url(../img/swipe2.jpg)" class="swiper-slide">
                <div class="slide-inner container">
                    <p>Для найвибагливіших кліентів</p>
                    <h1>Найновіший Arteon</h1>
                    <a href="{{route('about', [ '8' ])}}" class="btnSwiper">	Дізнатися більше		</a>
                </div>
            </div>
            <div style=" background-image: url(img/swipe1.jpg)" class="swiper-slide">
                <div class="slide-inner container">
                    <p>Для самих самих</p>
                    <h1>Новий Golf GTI</h1>
                    <a href="{{route('about', [ '4' ])}}" class="btnSwiper">	Дізнатися більше</a>
                </div>
            </div>
            <div style="background-image: url(img/swipe3.jpg)" class="swiper-slide">
                <div class="slide-inner container">
                    <p>Вибір комфорту та елегантності</p>
                    <h1>Volkswagen Polo Super</h1>
                    <a href="{{route('about', [ '1' ])}}" class="btnSwiper">	Дізнатися більше</a>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="news-container">
        <div class="container">
            <div class="news">
                <div class="blockTitle">
                    <h1>Актуaльне зі світу Volkswagen в Україні</h1>
                </div>
                <div class="newsItem wrapper">
                    <div class="item"><img src="img/new1.jpg"/></div>
                    <div class="item"><img src="img/new2.jpg"/></div>
                    <div class="item"><img src="img/new3.jpg"/></div>
                    <div class="item"><img src="img/new4.jpg"/></div>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-container">
        <div class="container">
            <div class="custom">
                <div class="blockTitle">
                    <h1>Створіть власне авто в нашому конфігураторі</h1>
                </div>
                <div class="custom-cars wrapper">
                    <div class="carItem"><img src="img/custom1.png"/><i class="fas fa-chevron-right"></i><a>Polo sedan</a></div>
                    <div class="carItem"><img src="img/custom2.png"/><i class="fas fa-chevron-right"></i><a>Arteon</a></div>
                    <div class="carItem"><img src="img/custom3.png"/><i class="fas fa-chevron-right"></i><a>Polo</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mail-container">
        <div class="back">
            <div class="container">
                <div class="info-mail wrapper">
                    <h2>Дізнавайся про головне</h2>
                    <p>Ви зацікавилися новинами з світу Volkswagen? Хочите дізнатися про нові моделі та знижки?</p>
                    <h3>Підписуйтесь на новини</h3>
                    <input placeholder="Ваш email" class="mail"/>
                </div>
            </div>
        </div>
    </div>
@endsection
