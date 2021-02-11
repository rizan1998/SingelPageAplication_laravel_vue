<?php

namespace App\Http\Controllers\notes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        return Subject::get();
    }
}
