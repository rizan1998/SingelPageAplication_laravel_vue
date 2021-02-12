<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'subject' => $this->subject->name,
            'description' => $this->description,
            'subjectId' => $this->subject->id,
            'publish' => $this->created_at->format('d F, Y'),
            'publishHuman' => $this->created_at->diffForHumans(),
            // sisipkan link untuk update resource
            'updata-link' => route('note.show', $this->slug)
        ];
    }
}
