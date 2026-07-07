<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
  public function index()
  {
    return view('admin.book.index', ['books' => Book::all()]);
  }

  public function destroy(int $id)
  {
    Book::destroy($id);
    HelpersController::logActivity("Deleted Book");
    return ResponseController::_success("Book Deleted");
  }
}
