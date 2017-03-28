<?php

namespace Modules\Products\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ProductTranslation extends Model implements Transformable
{
    use TransformableTrait;
    public $timestamps = false;
    protected $table = 'products_translations';
    protected $fillable = ['name'];

}
