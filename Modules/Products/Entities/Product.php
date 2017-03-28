<?php

namespace Modules\Products\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Product extends Model implements Transformable
{
    use TransformableTrait;
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name','description'];
    protected $table = 'products';


    protected $fillable = ['name', 'price'];

}
