@extends("layouts.layout")

@section("page-content")
    <div class="customise-container">
        <div class="container">
            <div class="title">
                <h1>Tiguan</h1>
            </div>
            <div class="customise wrapper">
                <div class="car"><img src="img/custom-car.png"/></div>
                <div class="properties-container">
                    <form class="forms-style" method="post" action="/configurate">
                        {{ csrf_field() }}
                        <p>Загальна ціна*:  price UAH</p>
                        <p>Ціна додаткового обладнання: price UAH</p>
                        <h3>Екстер’єр</h3>
                        <h4>Колір єкстер’єру</h4>
                        <select name="color_id">
                            <option selected disabled>Колір</option>
                            @foreach($colors as $color)
                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                            @endforeach
                        </select>
                    <!--    <form class="radio-style">
                            <label>
                                <input type="radio"/><span style="background-color: white" class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio"/><span style="background-color: black" class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio"/><span style="background-color: yellow" class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio"/><span style="background-color: blue" class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio"/><span style="background-color: red" class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio"/><span style="background-color: #C2C1C0" class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio"/><span style="background-color: #A43303" class="checkmark"></span>
                            </label>
                        </form>-->
                        <h4>Колеса</h4>
                        <select name="wheels_id">
                            <option selected disabled>Колеса</option>
                            @foreach($wheels as $wheel)
                                <option value="{{ $wheel->id }}">{{ $wheel->name }}-{{ $wheel->radius }}</option>
                            @endforeach
                        </select>
                        <h3>Технічні характеристики</h3>
                        <select name="complectation_id">
                            <option selected disabled>Комплектація</option>
                            @foreach($complectations as $complectation)
                                <option value="{{ $complectation->id }}">{{ $complectation->name }}</option>
                            @endforeach
                        </select>
                        <h3>Інтер'єр</h3>
                        <select name="interior_id">
                            <option selected disabled>Матеріал та колір</option>
                            @foreach($interiors as $interior)
                                <option value="{{ $interior->id }}">{{ $interior->material }}-{{ $interior->color }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="save-car">Зберегти</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection