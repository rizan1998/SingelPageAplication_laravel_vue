<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Note, Subject};

class PostController extends Controller
{


    public function store()
    {
        // dd('hai');
        $subject = Subject::findOrFail(request('subject'));
        //return $subject; jika hanya find maka responsenya akan 200 tanpa menampilkan data apa2
        $note = Note::create([
            'subject_id' => $subject->id,
            'title' => request('title'),
            'slug' => \Str::slug(request('title')),
            'description' => request('description')
        ]);

        return response()->json([
            'message' => 'your note was created',
            'note' => $note
        ]);
    }
}
