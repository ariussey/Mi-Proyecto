<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // if($this->user_id == auth()->user()->id){
        //     return true;
        // }

        // else {
        //     return false;
        // }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $noticia = $this->route()->parameter('noticia');

        $rules = [
            'title' => 'required',
            'slug' => 'required|unique:noticias',
            'status' => 'required|in:1,2',
            'file' => 'image'
        ];

        if($noticia){
            $rules['slug'] = 'required|unique:noticias,slug,'.$noticia->id;
        }

        if($this->status == 2){
            $rules = array_merge($rules, [
                'subtitle' => 'required',
                'category_id' => 'required',
                'tags' => 'required',
                'description' => 'required',
                'body' => 'required'
            ]);
        }

        return $rules;  
    }
}
