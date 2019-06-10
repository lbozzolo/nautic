<?php 
namespace Nautic\Http\Controllers\Configs;
use Nautic\Entities\Entity;
use Nautic\Http\Requests\CreatePermissionRequest;
use Bican\Roles\Models\Permission;
use Nautic\Http\Repositories\RoleRepo;
use Nautic\Http\Repositories\PermissionsRepo;

class PermissionsController extends Controller
{
    protected $roleRepo;
    protected $permissionRepo;

    public function __construct(RoleRepo $roleRepo, PermissionsRepo $permissionsRepo)
    {
        $this->roleRepo = $roleRepo;
        $this->permissionRepo = $permissionsRepo;
        $this->middleware('role:superadmin');
    }

    public function index()
    {
        $permisos = Permission::all()->sortBy('model');
        $models = Entity::getModels();
        return view('permissions.index', compact('permisos', 'models'));
    }

    public function create(CreatePermissionRequest $request)
    {
        $models = Entity::getModels();

        $permiso = Permission::create([
            'name' => $request->name,
            'slug' => $this->roleRepo->setToSlug($request->slug, $request->name),
            'description' => $request->description,
            'model' => $models[$request->model]
        ]);

        if($permiso){
            return redirect()->route('permissions.index')->with('ok', 'El Permiso "'.$permiso->name.'" ha sido creado con éxito');
        }else{
            return redirect()->route('permissions.index')->withErrors('No se pudo crear el Permiso');
        }
    }

    public function edit($id)
    {
        $permiso = Permission::find($id);
        $permisos = Permission::all()->sortBy('model');

        return view('permissions.edit', compact('permisos','permiso'));
    }

    public function update(CreatePermissionRequest $request, $id)
    {
        $permiso = Permission::find($id);

        $permiso->name = $request->name;
        $permiso->description = $request->description;
        $permiso->slug = $this->roleRepo->setToSlug($request->slug, $request->name);

        $permiso->save();

        return redirect()->route('permissions.index')->with('ok', 'El Permiso se ha actualizado con éxito');
    }

    public function destroy($id)
    {
        $permiso = Permission::find($id);
        /*$usersWithPermission = $this->permissionRepo->permissionHasActiveUsers($id);

        if($usersWithPermission){
            return redirect()->route('permissions.index')
                ->withErrors('No se puede eliminar el permiso "'.$permiso->name.'"" porque está asignado a usuarios');
        }*/

        $permiso->delete();

        return redirect()->route('permissions.index')->with('ok', 'Permiso eliminado con éxito');

    }



}