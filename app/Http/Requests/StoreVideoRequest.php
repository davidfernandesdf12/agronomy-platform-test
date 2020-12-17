<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideoRequest extends FormRequest
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
            'title' => 'required|max:255',
            'video' => 'required|max:20000|mimes:mp4',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Título é obrigatório',
            'video.required' => 'Vídeo é obrigatório',
            'video.max' => 'O vídeo não pode ser maior que 20MB.',
            'video.mimes' => 'O vídeo deve ser um arquivo do tipo: mp4 ou avi'
        ];
    }
}
