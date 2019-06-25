@extends('layouts.app')

@section('content')

    <div class="card col-lg-6">
        <div class="card-body">

            <h1>
                {!! ucwords($modelSpanish) !!} /
                <span class="text-warning">Detalles</span>
            </h1>
            <div class="row">
                <div class="card-body table-responsive">

                    @include('models.show_fields')

                </div>
            </div>

        </div>
    </div>

@endsection
