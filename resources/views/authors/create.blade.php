@extends('layouts/app')
@section('title')
	Lista książek
@endsection
@section('content')
<div class="container">
    <h2>{{ __('forms.new_author') }}</h2>
    <form action="{{ action('AuthorController@store')}}" method="POST" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="form-group">
        <label for="name">{{ __('forms.lastname') }}</label>
        <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" />
      </div>
      <div class="form-group">
        <label for="name">{{ __('forms.firstname') }}</label>
        <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" />
      </div>
      <div class="form-group">
        <label for="name">{{ __('forms.birthday') }}</label>
        <input type="text" class="form-control" name="birthday" value="{{ old('birthday') }}" />
      </div>
      <div class="form-group">
        <label for="name">{{ __('forms.genres') }}</label>
        <input type="text" class="form-control" name="genres" value="{{ old('genres') }}" />
      </div>
      <input type="submit" value="{{ __('forms.add') }}" class="btn btn-primary"/>
    </form>
</div>
@endsection('content')
