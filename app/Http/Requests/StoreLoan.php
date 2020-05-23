<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoan extends FormRequest
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
          'client' => 'required|max:255',
          'loaned_on' => 'required|date_format:Y-m-d',
          'estimated_on' => 'nullable|date_format:Y-m-d'
          ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
      return [
          'client.required' => 'Pole dane wypożyczającego jest wymagane.',
          'loaned_on.required' => 'Pole data wypożyczenia jest wymagane.',
          'loaned_on.date_format' => 'Poprawna forma pola data wypożyczenia: rok-miesiąc-dzień.',
          'estimated_on.date_format' => 'Poprawna forma pola przewidywany zwrot: rok-miesiąc-dzień.',
      ];
    }
}
