<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Models\sentences;

class paragraphs extends Model
{
    use HasFactory;

    public sentences $Sentence;

    public function __construct(sentences $sentence) {
        $this->Sentence = $sentence;
    }
}


