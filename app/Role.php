<?php

namespace App;

use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Eloquents\AuthorizationTrait;

class Role extends Model
{
    use NodeTrait, AuthorizationTrait;
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'text', 'slug'
    ];

    /**
     * Mutator for slug attribute.
     *
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        if (! $this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }
    }
}
