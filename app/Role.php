<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Role extends Model
{
    use NodeTrait;
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'name_bn', 'slug'
    ];

    /**
     * Mutator for slug attribute.
     *
     * @return void
     */
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($value);
    }
}
