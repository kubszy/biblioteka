<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthor extends FormRequest
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
          'lastname' => 'required|max:255',
          'firstname' => 'required|max:255',
          'birthday' => 'required|date_format:Y-m-d',
          'genres' => 'required|string',
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
          'lastname.required' => 'Pole nazwisko jest wymagane.',
          'firstname.required' => 'Pole imię jest wymagane.',
          'birthday.required' => 'Pole data urodzenia jest wymagane.',
          'birthday.date_format' => 'Poprawna forma pola data urodzenia: rok-miesiąc-dzień.',
          'genres.required' => 'Pole gatunki jest wymagane.',
      ];
    }
}
