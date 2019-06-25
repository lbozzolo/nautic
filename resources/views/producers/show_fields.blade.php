<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <td>Id:</td>
            <td>{!! $item->id !!}</td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td>{!! $item->name !!}</td>
        </tr>
       
        <tr>
            <td>Created At:</td>
            <td>{!! $item->created_at !!}</td>
        </tr>
        <tr>
            <td>Updated At:</td>
            <td>{!! $item->updated_at !!}</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2">
                <a href="{!! route($modelPlural.'.edit', $item->id) !!}" class="btn btn-primary">Editar</a>
                <a href="{!! route($modelPlural.'.index') !!}" class="btn btn-default">Cancelar</a>
            </td>
        </tr>
    </tfoot>
</table>
