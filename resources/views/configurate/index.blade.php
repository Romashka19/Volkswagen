@extends("layout")

@section("page-content")
    <div class="customise-container">
        <div class="container">
            <div class="title">
                <h1>Tiguan</h1>
            </div>
            <div class="customise wrapper">
                <div class="car"><img src="img/custom-car.png"/></div>
                <div class="properties-container">
                    <p>Загальна ціна*:  price UAH</p>
                    <p>Ціна додаткового обладнання: price UAH</p>
                    <h3>Екстер’єр</h3>
                    <h4>Колір єкстер’єру</h4>
                    <form class="radio-style">
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
                    </form>
                    <form class="forms-style">
                        <select>
                            <option selected disabled>Колеса</option>
                            @foreach($wheels as $wheel)
                                <option>{{ $wheel->name }}-{{ $wheel->radius }}</option>
                            @endforeach
                        </select>
                    </form>
                    <h3>Технічні характеристики</h3>
                    <form class="forms-style">
                        <select>
                            <option selected disabled>Комплектація</option>
                            @foreach($complectations as $complectation)
                                <option>{{ $complectation->name }}</option>
                            @endforeach
                        </select>
                    </form>
                    <h3>Інтер'єр</h3>
                    <form class="forms-style">
                        <select>
                            <option selected disabled>Матеріал та колір</option>
                            @foreach($interiors as $interior)
                                <option>{{ $interior->material }}-{{ $interior->color }}</option>
                            @endforeach
                        </select>
                    </form>
                    <button type="submit" class="save-car">Зберегти</button>
                </div>
            </div>
        </div>
    </div>
@endsection