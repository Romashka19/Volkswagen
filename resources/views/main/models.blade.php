@extends("layout")

@section("page-content")
    <div class="models-container">
        @foreach($models as $model)
            <div style="background-image: url({{ $model->photo }})" class="model-img">
                <div class="model container wrapper">
                    <div class="info-model">
                        <h3>{{ $model->tagline }}</h3>
                        <h1>{{ $model->name }}</h1>
                        <p>орієнтовна вартість від ₴ {{ $model->price }}*</p>
                    </div>
                    <div class="btn-action">
                        <a class="action">Конфігуратор</a>
                        <a href="{{route('about', [ 'id' => $model->id ])}}" class="action">Детальніше</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
