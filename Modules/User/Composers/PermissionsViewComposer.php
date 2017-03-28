<?php
namespace Modules\User\Composers;

use Illuminate\Database\Eloquent\Collection as Collection;
use App\Permission;
class PermissionsViewComposer
{
    /**
     * @var PermissionManager
     */
    private $permissions;

    public function __construct( Collection $permission)
    {
        $this->permissions = $permission;
    }

    public function compose($view)
    {
        // Get all permissions
//        dd($this->permissions);
        $view->permissions = Permission::get();;
    }
}
