@extends('layouts/app')
@section('title')
	Lista książek
@endsection
@section('content')
<div class="container">
    <h2>{{ __('forms.new_loan') }}</h2>
    <form action="{{ action('LoanController@store')}}" method="POST" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="form-group">
        <label for="name">{{ __('forms.book_id') }}</label>
        <select type="text" class="form-control" name="book_id">
          @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="name">{{ __('forms.client') }}</label>
        <input type="text" class="form-control" name="client" value="{{ old('client') }}" />
      </div>
      <div class="form-group">
        <label for="name">{{ __('forms.loaned_on') }}</label>
        <input type="text" class="form-control" name="loaned_on" value="{{ old('loaned_on') }}" />
      </div>
      <div class="form-group">
        <label for="name">{{ __('forms.estimated_on') }}</label>
        <input type="text" class="form-control" name="estimated_on" value="{{ old('estimated_on') }}" />
      </div>
      <input type="submit" value="{{ __('forms.add') }}" class="btn btn-primary"/>
    </form>
</div>
@endsection('content')
