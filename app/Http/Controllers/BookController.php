<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('tabel.tabel', [
            'title' => 'My Table',
            'books' => $books,
        ]);
    }
    public function indexs()
    {
        $books = Book::all();
        return view('index.index', [
            'title' => 'Main Books',
            'books' => $books,
        ]);
    }
    // public function indexss($id)
    // {
    //     $books = Book::findOrFail($id);
    //     return view('index.baca', [
    //         'title' => 'Baca',
    //         'books' => $books,
    //     ]);
    // }

    public function create()
    {
        return view('add.add', [
            'title' => 'Add Book',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'author' => 'required',
            'status' => 'required',
            'description' => 'required',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $coverImageName = time().'.'.$request->cover_image->extension();
        $request->cover_image->move(public_path('images'), $coverImageName);

        Book::create([
            'username' => $request->username,
            'author' => $request->author,
            'status' => $request->status,
            'description' => $request->description,
            'cover_image' => $coverImageName,
        ]);

        return redirect()->route('books.index')
                         ->with('success', 'Book created successfully.');
    }

    public function show(Book $book)
    {
        return view('index.baca', [
            'title' => 'Book Details',
            'book' => $book,
        ]);
    }
    // Metode untuk menampilkan detail buku
    // public function shows($id)
    // {
    //     $book = Book::findOrFail($id);
    //     return view('index.baca', compact('book'));
    // }


    public function edit(Book $book)
    {
        return view('add.edit', [
            'title' => 'Edit Book',
            'book' => $book,
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'username' => 'required',
            'author' => 'required',
            'status' => 'required',
            'description' => 'required',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('cover_image')) {
            $coverImageName = time().'.'.$request->cover_image->extension();
            $request->cover_image->move(public_path('images'), $coverImageName);
            $book->cover_image = $coverImageName;
        }

        $book->update([
            'username' => $request->username,
            'author' => $request->author,
            'status' => $request->status,
            'description' => $request->description,
            'cover_image' => $book->cover_image,
        ]);

        return redirect()->route('books.index')
                         ->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')
                         ->with('success', 'Book deleted successfully.');
    }
}
