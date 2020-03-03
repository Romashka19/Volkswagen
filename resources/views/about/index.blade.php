@extends("layout")

@section("page-content")
    <div class="car-container">
        <div style="background-image: url({{ asset( $model->photo ) }})" class="model-img">
            <div class="model container wrapper">
                <div class="info-model">
                    <h3>{{ $model->tagline }}</h3>
                    <h1>{{ $model->name }}</h1>
                    <p>орієнтовна вартість від ₴ {{ $model->price }}*</p>
                </div>
            </div>
        </div>
    </div>
    <div class="security-container">
        <div class="security">
            <div class="security-title">
                <h1>{{ $model->title_first }}</h1>
            </div>
            <div class="security-info wrapper">
                <div class="info">
                    <h3>Знає, що безпека перш за все</h3>
                    <p>{{ $model->text_first }}</p>
                </div>
                <div style="background-image: url({{ asset('img/polo-back.png') }})" class="img"></div>
            </div>
        </div>
    </div>
    <div class="comfort-container">
        <div class="comfort">
            <div class="comfort-title">
                <h1>{{ $model->title_second }}</h1>
                <p>{{ $model->other_text }}</p>
            </div>
            <div class="comfort-info wrapper">
                <div class="info">
                    <h3>Автомобіль - зона комфорту на ходу</h3>
                    <p>{{ $model->text_second }}</p>
                </div>
                <div style="background-image: url(img/polo-inside.png)" class="img"></div>
            </div>
        </div>
    </div>
    <div class="equipment-container">
        <div class="equipment">
            <div class="container">
                <h1>Технічні характеристики та комплектації</h1>
                <table>
                    <tr>
                        <th></th>
                        <th>Standart</th>
                        <th>Advanced</th>
                        <th>Premium</th>
                    </tr>
                    <tr>
                        <td>Двигун</td>
                        @foreach($model->complectations as $complectation)
                            <td>{{ $complectation->engines->name }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Масса</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Путужність</td>
                        @foreach($model->complectations as $complectation)
                            <td>{{ $complectation->engines->power }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Втрати палива</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Максимальна швидкість</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Коробка передач</td>
                        @foreach($model->complectations as $complectation)
                            <td>{{ $complectation->gearboxes->type }},{{ $complectation->gearboxes->gears_count }} передач</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Ціна</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-primary">Купити</button></td>
                        <td><button class="btn btn-primary">Купити</button></td>
                        <td><button class="btn btn-primary">Купити</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection