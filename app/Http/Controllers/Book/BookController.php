<?php

namespace App\Http\Controllers\Book;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::with('category')->paginate(5);

        return view('book.list', [
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.add_book', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|numeric',
            'number_of_pages' => 'required|numeric',
            'description' => 'required',
//            'img' => 'required|string|max:255',
            'quantity' => 'required|numeric',
        ]);

        $book = Book::create([
            'name' => $request->request->all()['name'],
            'author' => $request->request->all()['author'],
            'year' => $request->request->all()['year'],
            'category_id' => $request->request->all()['categories'],
            'number_of_pages' => $request->request->all()['number_of_pages'],
            'description' => $request->request->all()['description'],
//            'img' => $request->request->all()['img'],
            'quantity' => $request->request->all()['quantity']
        ]);

//        $book->categories()->attach($request->request->all()['categories']);

        return redirect()->route('list.index')->with('messageSuccess', 'Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('book.edit_book',[
            'book' => $book,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        dd($request);

        $book->update([
            'name' => $request->request->all()['name'],
            'author' => $request->request->all()['author'],
            'year' => $request->request->all()['year'],
            'category_id' => $request->request->all()['categories'],
            'number_of_pages' => $request->request->all()['number_of_pages'],
            'description' => $request->request->all()['description'],
            //            'img' => $request->request->all()['img'],
            'quantity' => $request->request->all()['quantity']
        ]);

        return redirect()->route('list.index')->with('messageSuccess', 'Delete success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        dd($book);

        $book->delete();

        return redirect()->route('list.index')->with('messageSuccess', 'Delete success!');
    }
}
