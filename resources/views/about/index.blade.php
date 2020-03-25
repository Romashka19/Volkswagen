@extends("layouts.layout")

@push('scripts')
    <script src="{{ asset('js/owners.js') }}"></script>
    <script>
        urlRoute['order'] = "{{ route('orderCreate') }}";
    </script>
@endpush

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
                <div style="background-image: url({{ asset($model->photo_first) }})" class="img"></div>
            </div>
        </div>
    </div>
    <div class="comfort-container">
        <div class="comfort">
            <div class="comfort-title">
                <h1>{{ $model->title_second }}</h1>
            </div>
            <div class="comfort-info wrapper">
                <div class="info">
                    <h3>Автомобіль - зона комфорту на ходу</h3>
                    <p>{{ $model->text_second }}</p>
                </div>
                <div style="background-image: url({{asset($model->photo_second)}})" class="img"></div>
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
                        <td>{{ $model->other_text }}</td>
                        <td>{{ $model->other_text }}</td>
                        <td>{{ $model->other_text }}</td>
                    </tr>
                    <tr>
                        <td>Путужність</td>
                        @foreach($model->complectations as $complectation)
                            <td>{{ $complectation->engines->power }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Втрати палива</td>
                        @foreach($model->complectations as $complectation)
                            <td>{{ $complectation->engines->fuel }}л./100км.</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Максимальна швидкість</td>
                        @foreach($model->complectations as $complectation)
                            <td>{{ $complectation->engines->volume }}км./год.</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Коробка передач</td>
                        @foreach($model->complectations as $complectation)
                            <td>{{ $complectation->gearboxes->type }}/{{ $complectation->gearboxes->gears_count }} передач</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Ціна</td>
                        @foreach($model->complectations as $complectation)
                            @foreach($complectation->cars as $car)
                                <td>{{ $price + $complectation->gearboxes->price +
                                                $complectation->engines->price +
                                                $car->wheels->price +
                                                $car->colors->price +
                                                $car->interior->price}}</td>
                            @endforeach
                        @endforeach
                    </tr>
                    @guest
                        <tr>
                            <td></td>
                            <td>Щоб купити авто увiйдiть в акаунт</td>
                            <td>Щоб купити авто увiйдiть в акаунт</td>
                            <td>Щоб купити авто увiйдiть в акаунт</td>
                        </tr>
                    @else
                        <tr>
                            <td></td>
                            @foreach($model->complectations as $complectation)
                                @foreach($complectation->cars as $car)
                                    <td><button value="{{ $car->id }}" id="car-id" class="buy-car" data-toggle="modal" data-target="#create_order">Купити</button></td>
                                @endforeach
                            @endforeach
                        </tr>
                    @endguest
                </table>
            </div>
        </div>
    </div>
    <!---------------------------------------------------------------->
    @auth
    <div class="modal fade" id="create_order" tabindex="-1" role="dialog" aria-labelledby="create_modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="create_modal_Label">CREATE</h5>
                </div>
                <div class="modal-body">
                    <p>адреса куди доставити авто</p>
                    <input required type="text" id="address">
                    <input type="hidden" value="{{ Auth::user()->id }}" id="user_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="save-order">Замовити</button>
                </div>
            </div>
        </div>
    </div>
    @endauth
    <!----------------------->


@endsection
