<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Models\chapters;
use Models\paragrams;
use Models\sentences;

class Book extends Model
{
    use HasFactory;
    public $Chapters = [];

    public function Addchapters(chapters $Chapter) {
        $this->Chapters[] = $Chapter;
        }
}

