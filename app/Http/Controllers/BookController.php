<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests\StoreBook;

use Illuminate\Support\Facades\DB;

use App\Models\Book;

use App\Models\Isbn;

use App\Models\Author;

use App\Repositories\BookRepository;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BookRepository $bookRepo)
    {
        $booksList = $bookRepo->getAll();

        return view('books/list', ['booksList' => $booksList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(BookRepository $bookRepo)
    {
        $authors = Author::all();

        return view('books/create',['authors' => $authors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBook $request, BookRepository $bookRepo)
    {
        $data = $request->all();
        $booksList = $bookRepo->create($data);

        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BookRepository $bookRepo, $id)
    {
        $book = $bookRepo->find($id);

        return view('books/show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BookRepository $bookRepo, $id)
    {
        $book = $bookRepo->find($id);
        $authors = Author::all();

        return view('books/edit',['book' => $book, 'authors' => $authors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBook $request, BookRepository $bookRepo, $id)
    {
        $data = $request->all();
        $booksList = $bookRepo->update($data, $id);

        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookRepository $bookRepo, $id)
    {
        $booksList = $bookRepo->delete($id);

        return redirect('books');
    }

    public function longest(BookRepository $bookRepo)
    {
        $booksList = $bookRepo->longest();

        return view('books/list', ['booksList' => $booksList]);
    }

    public function cheapest(BookRepository $bookRepo)
    {
        $booksList = $bookRepo->cheapest();

        return view('books/list', ['booksList' => $booksList]);
    }

}
