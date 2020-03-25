@extends("layouts.layout")

@section("page-content")
    <div class="user-cars">
        <div class="container">
            @foreach($orders as $order)
                <div class="car-container">
                    <div class="title">

                       <h1>{{ $order }}</h1>

                    </div>
                    <div class="customise wrapper">
                        <div class="car">
                            <img src="img/custom-car.png">
                        </div>
                        <div class="car-info">
                            <ul>
                                <li>
                                    <h4>Комплектація</h4>
                                    <p></p>
                                </li>
                                <li>
                                    <h4>Ціна</h4>
                                    <p></p>
                                </li>
                                <li>
                                    <h4>Дата замовлення</h4>
                                    <p></p>
                                </li>
                                <li>
                                    <h4>Адреса</h4>
                                    <p></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
