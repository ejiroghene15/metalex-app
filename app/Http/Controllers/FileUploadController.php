<?php

namespace App\Http\Controllers;

use App\Models\Magazine;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FileUploadController extends Controller
{
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
      'url' => $magazine_filename
    ]);

    return redirect()->back()->withMessage("Magazine Uploaded")->withStatus("success");
  }
}
