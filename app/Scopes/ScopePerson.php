<?php
namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ScopePerson implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('age', '>', 0);
    }
}
