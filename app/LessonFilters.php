<?php

// App/QueryFilter.php
namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\QueryFilters;
class LessonFilters extends QueryFilters
{
    public function popular($order = 'desc')
    {
        return $this->builder->orderBy('views', $order);
    }

    public function difficulty($level)
    {
        return $this->builder->where('difficulty', $level);
    }
    public function length($order = 'desc')
    {
        return $this->builder->orderBy('length', $order);
    }

}