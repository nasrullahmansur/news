<?php

namespace App\Http\Requests\Admin;

use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        if($this->request->get('sl_name') == '') {
            return [
                'pl_name' => 'required|unique:categories',
            ];
        } else {
            return [
                'pl_name' => 'required|unique:categories',
                'sl_name' => 'unique:categories'
            ];
        }
    }


    // public function message()
    // {
    //     return [
    //         'name.required' => __('The name field must be required'),
    //         'active_status.required' => __('The Status field must be required')
    //     ];

    // }
}
