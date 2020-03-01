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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_modal">create</button>
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
                            <td>{{ $complectation->id }}</td>
                            <td>{{ $complectation->name }}</td>
                            <td>{{ $complectation->engine_id }}</td>
                            <td>{{ $complectation->gearbox_id }}</td>
                            <td>{{ $complectation->model_id }}</td>
                            <td>
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#update_modal">Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_modal">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
<!---------------------------------->
    <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="create_modal" aria-hidden="true">
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

    <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="delete_modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete_modal_Label">DELETE</h5>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
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
                    url : '{{ route('admin.store') }}',
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

@endsection
