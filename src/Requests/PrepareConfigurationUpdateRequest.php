<?php

namespace Kordy\Ticketit\Requests;

use Portal\Http\Requests\Request;

class PrepareConfigurationUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        //    'name'     => 'required'
            'serialize' => 'boolean',
        ];
    }
}
