<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignTaskvalidation extends FormRequest
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
        'title'=>'required',
        'description' =>'required',
        'selectEmployee'=>'required',
        'startDate'=>'required|date',
        'endd'=>'required|date',
        'TaskMedia'=>'mimes:jpg,jpeg,png,giff,webp,mp4,mkv,webm|file|max:31000',
        ];
    }

    public function messages()
    {
        return [
        'title.required'=>'Title is required',
        'description.required' =>'Description is required',
        'selectEmployee.required'=>'Please select Employee',
        'startDate.required'=>'Please enter start date',
        'endd.required'=>'Please enter end date',
        'endd.after'=>'Please enter the valid date',
        'TaskMedia.mimes'=>'supported type is  jpg,jpeg,png,giff,webp,mp4,mkv,webm',
        'TaskMedia.max'=>'file size should be less than 30 mb',
        ];
    }
}
