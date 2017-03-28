<?php
namespace Modules\User\Entities;

use Zizaco\Entrust\EntrustRole;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
class Role extends EntrustRole implements Transformable
{
    use TransformableTrait;
    protected $fillable = ['name', 'display_name', 'description', 'created_at', 'updated_at'];
}