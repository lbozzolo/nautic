@extends('layouts.app')

@section('content')

    <div class="card col-lg-6">
        <div class="card-body">


            <h1>{!! ucwords($modelSpanish) !!} <span class="text-warning">Agregar</span></h1>
            <div class="row">
                <div class="card-body">
                    {!! Form::open(['route' => $modelPlural.'.store']) !!}

                    @include('models.fields')

                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </div>


@endsection
