<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Magazine;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FileUploadController extends Controller
{
  public function book(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'authors' => 'required',
      'category' => 'required',
      'thumbnail' => 'required|file|mimes:png,jpg,jpeg|max:2048',
      'book_file' => 'nullable|file|mimes:pdf,epub|max:20480',
    ]);

    $cover_image_filename = null;
    if ($request->hasFile('thumbnail')) {
      $m_thumbnail = $request->file('thumbnail');
      $cover_image_filename = sprintf("%s-%s.%s", Str::slug($request->title), time(), $m_thumbnail->getClientOriginalExtension());
      $m_thumbnail->storeAs('book_covers', $cover_image_filename);
    }

    $book_filename = null;
    if ($request->hasFile('book_file')) {
      $m_file = $request->file('book_file');
      $book_filename = sprintf("%s-%s.%s", Str::slug($request->title), time(), $m_file->getClientOriginalExtension());
      $m_file->storeAs('books', $book_filename);
    }

    Book::create([
      'cover_image' => $cover_image_filename,
      'title' => $request->title,
      'subtitle' => $request->subtitle,
      'authors' => $request->authors,
      'isbn' => $request->isbn,
      'edition' => $request->edition,
      'publication_date' => $request->publication_date,
      'publisher' => $request->publisher,
      'language' => $request->language,
      'category' => $request->category,
      'tags' => $request->tags,
      'short_description' => $request->short_description,
      'about_book' => $request->about_book,
      'table_of_contents' => $request->table_of_contents,
      'number_of_pages' => $request->number_of_pages,
      'format' => $request->format,
      'price' => $request->price,
      'currency' => $request->currency ?? 'USD',
      'status' => $request->status,
      'file_path' => $book_filename,
      'external_link' => $request->external_link,
    ]);

    return redirect()->back()->withMessage("Book Uploaded Successfully")->withStatus("success");
  }

  public function magazine(Request $request)
  {
    $request->validate([
      'edition' => 'required',
      'title' => 'required',
      'magazine' => 'required|file|mimes:pdf|max:10240', // Adjust the validation rules as needed
      'thumbnail' => 'required|file|mimes:png,jpg,jpeg|max:1024', // Adjust the validation rules as needed
    ]);

    $m_file = $request->file('magazine');
    $m_thumbnail = $request->file('thumbnail');

    // Generate a custom name for the file (e.g., using the original name and a unique identifier)
    $magazine_filename = sprintf("%s.%s", Str::slug(pathinfo($m_file->getClientOriginalName(), PATHINFO_FILENAME)), $m_file->getClientOriginalExtension());

    $magazine_thumbnail_filename = sprintf("%s.%s", Str::slug(pathinfo($m_file->getClientOriginalName(), PATHINFO_FILENAME)), $m_thumbnail->getClientOriginalExtension());

    // Store the file in the storage directory
    $request->file('thumbnail')->storeAs('magazine_thumbnails', $magazine_thumbnail_filename);
    $request->file('magazine')->storeAs('magazine', $magazine_filename);

    $magazine = new Magazine;
    $magazine->create([
      'label' => $request->edition,
      'title' => $request->title,
      'image' => $magazine_thumbnail_filename,
      'url' => $request->has('use_external_link') ? $request->url : $magazine_filename,
      'external' => $request->has('use_external_link') ? 'true' : 'false'
    ]);

    return redirect()->back()->withMessage("Magazine Uploaded")->withStatus("success");
  }
}
