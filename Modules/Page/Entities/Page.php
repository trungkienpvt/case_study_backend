<?php

namespace Modules\Page\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Page extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'products';

    protected $fillable = ['name', 'price'];

}
