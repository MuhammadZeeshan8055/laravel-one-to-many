<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded=[];
    public $timestamps=false;

    public function students(){
        return $this->belongsTo(Student::class, 'student_id');
    }
}
