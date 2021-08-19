<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function index()
    {
        $books = $this->book->paginate(10);

        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\Models\Category::all(['id', 'name']);

        return view('admin.books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {

        $data = $request->all();

        $book = $this->book->create($data);
        $bookCategory = $book->categories()->sync($data['category']);
        flash('Livro Criado com sucesso !')->success();

        return redirect()->route('admin.books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($book)
    {
        $book = $this->book->find($book);

        return view('admin.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $book)
    {
        $book = $this->book->find($book);
        $data = $request->all();
        $book->update($data);

        flash('Livro Atualizado com Sucesso !')->success();

        return redirect()->route('admin.books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($book)
    {
        $book = $this->book->find($book);
        $book->delete();

        flash('Livro removido com sucesso!')->success();

        return redirect()->route('admin.books.index');
    }
}
