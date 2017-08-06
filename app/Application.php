<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
    	'user_id', 'type_id', 'reason', 'no_of_days', 'start_date', 
    	'end_date', 'vacation_address', 'additional_reason'
    ];

    /**
     * Cast dates into Carbon Object
     * 
     * @var [type]
     */
    protected $dates = [
    	'start_date', 'end_date'
    ];

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }

    /**
     * Vacation Starting Date Mutator
     * 
     * @param [type]
     */
    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = Carbon::parse($value);
    }

    /**
     * Vacation Ending Date Mutator
     * 
     * @param [type]
     */
    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = Carbon::parse($value);
    }

    public function user()
    {
        return $this->belongsTo(User::Class);
    }
}
