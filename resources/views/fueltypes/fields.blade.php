<!-- Name Field -->
<div class="form-group col-lg-12">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-lg-12" >
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route($modelPlural.'.index') !!}" class="btn btn-default">Cancelar</a>
</div>