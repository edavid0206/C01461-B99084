<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class sentences extends Model
{
    use HasFactory;
    public $Words = [];

    public function AddWords(string $Word) {
        $this->Words[] = $Word;
    }

}

