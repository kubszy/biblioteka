<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBook extends FormRequest
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
          'name' => 'required|max:255',
          'year' => 'required|integer',
          'publication_place' => 'required|string',
          'pages' => 'required|integer',
          'price' => 'required|numeric',
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
          'name.required' => 'Pole tytuł książki jest wymagane.',
          'year.required' => 'Pole rok wydania jest wymagane.',
          'year.integer' => 'Pole rok wydania musi być liczbą.',
          'publication_place.required' => 'Pole miejsce wydania jest wymagane.',
          'pages.required' => 'Pole ilość stron jest wymagane.',
          'pages.integer' => 'Pole ilość stron musi być liczbą.',
          'price.required' => 'Pole cena jest wymagane.',
          'price.numeric' => 'Pole cena musi być liczbą.',
      ];
    }
}
