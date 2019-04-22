<?php 
namespace Nautic\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\PermissionsRepo;
use App\Http\Repositories\Configs\RolesRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class RolesController extends Controller
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo     = $repo;
        $this->route    = $route;
        $confFile       = 'configs.roles';
        // nombre de archivo de configuracion

        $this->confFile = $confFile;
        $this->data['confFile'] = $confFile;

    }
    public function index(){
        dd('asd');
    }
}
