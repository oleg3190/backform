<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $data = [];
        foreach ($this->all() as $key => $param) {
            $param =trim($param);
            $param =stripslashes($param);
            $param = htmlspecialchars($param);
            $data[$key]= $param;
        }
        $this->merge($data);
    }
    public function rules()
    {
        return [
            'phone'=> ['required','regex:/^(\+7|8)\d+$/','max:12','min:11'],
            'name' => 'required|string|max:256|regex:/^[a-zA-Zа-яА-Я]+$/',
            'message'=> 'required|string|max:1000'
        ];
    }
}
