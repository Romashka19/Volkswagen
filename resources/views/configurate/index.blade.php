@extends("layouts.layout")


@section("page-content")
    <div class="customise-container">
        <div class="container">
            <div class="title">
                <h1>Tiguan</h1>
            </div>
            <div class="customise wrapper">
                <div class="car"><img src="{{ asset($model->photo_customise) }}"/></div>
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
                            @foreach($model->complectations as $complectation)
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
                        <p>Aдреса куди доставити авто</p>
                        <input required type="text" name="address">
                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                        <button type="submit" class="save-car">Зберегти</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
