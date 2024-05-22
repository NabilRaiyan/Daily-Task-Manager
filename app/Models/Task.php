<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // toggleing task state for complete or incomplete
    public function toggleComplete(){
        $this->completed = !$this->completed;
        $this->save();
    }
}
