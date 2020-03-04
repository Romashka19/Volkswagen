@extends("layout")

@section("page-content")
    <div class="equipment-container">
        <div class="equipment">
            <div class="container">
                <h1>Engines</h1>
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>volume</th>
                        <th>power</th>
                        <th>fuel</th>
                        <th>price</th>
                        <th></th>
                    </tr>
                    @foreach($engines as $engine)
                        <tr>
                            <td>{{ $engine->id }}</td>
                            <td>{{ $engine->name }}</td>
                            <td>{{ $engine->volume }}</td>
                            <td>{{ $engine->power }}</td>
                            <td>{{ $engine->fuel }}</td>
                            <td>{{ $engine->price }}</td>
                            <td>
                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
                <!----------------------------------------------------------------------------------------------------------->
                <h1>GearBoxes</h1>
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Type</th>
                        <th>name</th>
                        <th>GearsCount</th>
                        <th>price</th>
                        <th></th>
                    </tr>
                    @foreach($gearboxes as $gearbox)
                        <tr>
                            <td>{{ $gearbox->id }}</td>
                            <td>{{ $gearbox->type }}</td>
                            <td>{{ $gearbox->name }}</td>
                            <td>{{ $gearbox->gears_count }}</td>
                            <td>{{ $gearbox->price }}</td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
                <!----------------------------------------------------------------------------------------------------------->
                <h1>Models</h1>
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>photo</th>
                        <th></th>
                    </tr>
                    @foreach($models as $model)
                        <tr>
                            <td>{{ $model->id }}</td>
                            <td>{{ $model->name }}</td>
                            <td>{{ $model->price }}</td>
                            <td>{{ $model->photo }}</td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
<!----------------------------------------------------------------------------------------------------------->
                <h1>Wheels</h1>
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Radius</th>
                        <th>photo</th>
                        <th>price</th>
                        <th></th>
                    </tr>
                    @foreach($wheels as $wheel)
                        <tr>
                            <td>{{ $wheel->id }}</td>
                            <td>{{ $wheel->name }}</td>
                            <td>{{ $wheel->radius }}</td>
                            <td>{{ $wheel->photo }}</td>
                            <td>{{ $wheel->price }}</td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
                <!----------------------------------------------------------------------------------------------------------->
                <h1>Colors</h1>
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>price</th>
                        <th></th>
                    </tr>
                    @foreach($colors as $color)
                        <tr>
                            <td>{{ $color->id }}</td>
                            <td>{{ $color->name }}</td>
                            <td>{{ $color->value }}</td>
                            <td>{{ $color->price }}</td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
                <!----------------------------------------------------------------------------------------------------------->
                <h1>interiors</h1>
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Material</th>
                        <th>color</th>
                        <th>price</th>
                        <th></th>
                    </tr>
                    @foreach($interiors as $interior)
                        <tr>
                            <td>{{ $interior->id }}</td>
                            <td>{{ $interior->name }}</td>
                            <td>{{ $interior->material }}</td>
                            <td>{{ $interior->color }}</td>
                            <td>{{ $interior->price }}</td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
                <!----------------------------------------------------------------------------------------------------------->
                <h1>Complectations</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_modal_cmpl">create</button>
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Engine_id</th>
                        <th>Gear_id</th>
                        <th>Model_id</th>
                        <th></th>
                    </tr>
                    @foreach($complectations as $complectation)
                        <tr>
                            <td >{{ $complectation->id }}</td>
                            <td>{{ $complectation->name }}</td>
                            <td>{{ $complectation->engine_id }}</td>
                            <td>{{ $complectation->gearbox_id }}</td>
                            <td>{{ $complectation->model_id }}</td>
                            <td>
                                <button type="button" class="btn btn-danger delete-coml"  data-value=" {{ $complectation->id }}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
                <!----------------------------------------------------------------------------------------------------------->
                <h1>Cars</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_modal_cars">create</button>
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Wheels_id</th>
                        <th>Complectation_id</th>
                        <th>Color_id</th>
                        <th>Interior_id</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    @foreach($cars as $car)
                        <tr>
                            <td >{{ $car->id }}</td>
                            <td>{{ $car->wheels_id }}</td>
                            <td>{{ $car->complectation_id }}</td>
                            <td>{{ $car->color_id }}</td>
                            <td>{{ $car->interior_id }}</td>
                            <td>{{ $car->price }}</td>
                            <td>
                                <button type="button" class="btn btn-danger delete-car"  data-value=" {{ $car->id }}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
                <!------->
            </div>
        </div>
    </div>
<!---------------------------------->
    <div class="modal fade" id="create_modal_cmpl" tabindex="-1" role="dialog" aria-labelledby="create_modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="create_modal_Label">CREATE</h5>
                </div>
                <div class="modal-body">
                    <form>
                        {{ csrf_field() }}
                        <p>Назва комплектації</p>
                        <input type="text" id="name-comlectation">
                        <select class="custom-select custom-select-lg" id="engine-select">
                            <option selected disabled>Выберите Двигатель</option>
                            @foreach($engines as $engine)
                                <option id="id_engine" value="{{ $engine->id }}">{{ $engine->name }}</option>
                            @endforeach
                        </select>
                        <select class="custom-select custom-select-lg" id="model-select">
                            <option selected disabled>Выберите модель машини</option>
                            @foreach($models as $model)
                                <option id="id_model" value="{{ $model->id }}">{{ $model->name }}</option>
                            @endforeach
                        </select>
                        <select class="custom-select custom-select-lg" id="gearbox-select">
                            <option selected disabled>Выберите коробку передач</option>
                            @foreach($gearboxes as $gearbox)
                                <option id="id_gearbox" value="{{ $gearbox->id }}">{{ $gearbox->name }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save-compl">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="create_modal_cars" tabindex="-1" role="dialog" aria-labelledby="create_modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="create_modal_Label">CREATE</h5>
                </div>
                <div class="modal-body">
                    <form>
                        {{ csrf_field() }}
                        <p>Авто</p>
                        <select class="custom-select custom-select-lg" id="wheels-select">
                            <option selected disabled>Выберите колеса</option>
                            @foreach($wheels as $wheel)
                                <option id="id_engine" value="{{ $wheel->id }}">{{ $wheel->name }}</option>
                            @endforeach
                        </select>
                        <select class="custom-select custom-select-lg" id="complectation-select">
                            <option selected disabled>Выберите комплектацию</option>
                            @foreach($complectations as $complectation)
                                <option id="id_model" value="{{ $complectation->id }}">{{ $complectation->name }}</option>
                            @endforeach
                        </select>
                        <select class="custom-select custom-select-lg" id="color-select">
                            <option selected disabled>Выберите цвет</option>
                            @foreach($colors as $color)
                                <option id="id_gearbox" value="{{ $color->id }}">{{ $color->name }}</option>
                            @endforeach
                        </select>
                        <select class="custom-select custom-select-lg" id="interior-select">
                            <option selected disabled>Выберите интерьер</option>
                            @foreach($interiors as $interior)
                                <option id="id_gearbox" value="{{ $interior->id }}">{{ $interior->name }}</option>
                            @endforeach
                        </select>
                        <p>цена</p>
                        <input type="text" id="car-price">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save-car">Save</button>
                </div>
            </div>
        </div>
    </div>
<!--------------------------------------->
    <script>
        $(document).ready(function () {
            $('#save-compl').on('click',function () {
                let name = $("#name-comlectation").val();
                let engine_id = $("#engine-select").val();
                let model_id = $("#model-select").val();
                let gearbox_id = $("#gearbox-select").val();

                $.ajax({
                    url : 'admin/createCompl',
                    type: 'post',
                    dataType: "json",
                    data : {
                        engine_id : engine_id, model_id:model_id, gearbox_id:gearbox_id,name:name,
                        _token: "{!! csrf_token() !!}"
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function () {
                        location.href="admin";
                    }
                });
            })
        })
    </script>

    <script>
        $(document).ready(function () {
            $('#save-car').on('click',function () {
                let wheels_id = $("#wheels-select").val();
                let complectation_id = $("#complectation-select").val();
                let color_id = $("#color-select").val();
                let interior_id = $("#interior-select").val();
                let price = $("#car-price").val();

                $.ajax({
                    url : 'admin/createCar',
                    type: 'post',
                    dataType: "json",
                    data : {
                        wheels_id : wheels_id, complectation_id:complectation_id, color_id:color_id,interior_id:interior_id,price:price,
                        _token: "{!! csrf_token() !!}"
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function () {
                        location.href="admin";
                    }
                });
            })
        })
    </script>

    <script>
        $(document).ready(function () {
            $('.delete-coml').on('click',function () {
                let id = $(this).data('value');
                $.ajax({
                    url : '/admin/' + id,
                    type: 'post',
                    dataType: "json",
                    data : {
                        _token: "{!! csrf_token() !!}"
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function () {
                        location.href="admin";
                    }
                });

            })
        })
    </script>
    <script>
        $(document).ready(function () {
            $('.delete-car').on('click',function () {
                let id = $(this).data('value');
                $.ajax({
                    url : '/admin/' + id,
                    type: 'post',
                    dataType: "json",
                    data : {
                        _token: "{!! csrf_token() !!}"
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function () {
                        location.href="admin";
                    }
                });

            })
        })
    </script>

@endsection
