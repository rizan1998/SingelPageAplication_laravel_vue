<?php

namespace App\Http\Controllers\notes;

use App\Http\Controllers\Controller;
use App\Http\Resources\NoteResource;
use Illuminate\Http\Request;
use App\Models\{Note, Subject};
use Illuminate\Auth\Events\Validated;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $note = Note::with('subject')->latest()->get();
        return NoteResource::collection($note);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store()
    {
        request()->validate(
            [
                'subject' => 'required',
                'title' => 'required|min:3',
                'description' => 'required'
            ]
        );

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
        return new NoteResource(($note));
        //bisa juga menggunakan make
        // return NoteResouce::make($note);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Note $note)
    {
        // return $note;
        request()->validate(
            [
                'subject' => 'required|numeric',
                'title' => 'required|min:3',
                'description' => 'required'
            ]
        );
        $subject = Subject::findOrFail(request('subject'));
        $note->update([
            'subject_id' => $subject->id,
            'title' => request('title'),
            'description' => request('description')
        ]);

        return response()->json([
            'message' => 'your note was updated',
            'note' => $note
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        // return $note;
        // $note->delete();
        return response()->json([
            'message' => 'Your Note Was deleted',
            'note' => $note
        ]);
    }
}
