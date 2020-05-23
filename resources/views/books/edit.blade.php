@extends('layouts/app')
@section('title')
	Lista książek
@endsection
@section('content')
<div class="container">
    <h2>{{ __('forms.update_book') }}</h2>
    <form action="{{ action('BookController@update',[$book->id] )}}" method="POST" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<div class="form-group">
				<label for="name">{{ __('forms.author') }}</label>
				<select type="text" class="form-control" name="author_id[]" multiple>
					@foreach ($authors as $author)
              @if(in_array($author->id, $book->authors->pluck('id')->toArray()))
                <option value="{{ $author->id }}" selected>{{ $author->lastname }} {{ $author->firstname }}</option>
              @else
                <option value="{{ $author->id }}">{{ $author->lastname }} {{ $author->firstname }}</option>
              @endif
					@endforeach
				</select>
			</div>
      <input type="hidden" name="book_id" value="{{ $book->id }}" />
      <div class="form-group">
        <label for="name">{{ __('forms.book_title') }}</label>
        <input type="text" class="form-control" name="name" value="{{ $book->name }}"/>
      </div>
      <div class="form-group">
        <label for="name">{{ __('forms.publication_year') }}</label>
        <input type="text" class="form-control" name="year" value="{{ $book->year }}"/>
      </div>
      <div class="form-group">
        <label for="name">{{ __('forms.publication_place') }}</label>
        <input type="text" class="form-control" name="publication_place" value="{{ $book->publication_place }}"/>
      </div>
      <div class="form-group">
        <label for="name">{{ __('forms.pages') }}</label>
        <input type="text" class="form-control" name="pages" value="{{ $book->pages }}"/>
      </div>
      <div class="form-group">
        <label for="name">{{ __('forms.price') }}</label>
        <input type="text" class="form-control" name="price" value="{{ $book->price }}"/>
      </div>
      <input type="submit" value="{{ __('forms.update') }}" class="btn btn-primary"/>
    </form>
</div>
@endsection('content')
