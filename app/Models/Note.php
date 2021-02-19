<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //ini metode key untuk old laravel
    //jika tidak ingin menggunakan function getRouteKeyName
    //maka pakai {namaPenampung:key} contoh {note:slug}
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }


    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
