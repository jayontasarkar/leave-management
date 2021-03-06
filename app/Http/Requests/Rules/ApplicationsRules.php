<?php

namespace App\Http\Requests\Rules;

use App\Http\Requests\Rules\RulesAbstract;

class ApplicationsRules extends RulesAbstract
{
    public function rules($id = null)
    {
        $rules = [
            'reason' => 'required|min:4',
            'type_id' => 'required',
            'no_of_days' => 'required',
            'vacation_address' => 'required',
            'authorizer_id'    => 'required|exists:roles,id'
        ];

        if ($id) {
        } else {
        }

        return $rules;
    }
}
