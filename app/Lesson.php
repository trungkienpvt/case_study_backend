<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Lesson extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'view','difficulty','length',
    ];

    public function scopeFilter($query, QueryFilters $filters)
    {
        return $filters->apply($query);
    }



}
