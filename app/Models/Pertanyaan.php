<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'pertanyaan','gambar'
    ];

    public function jawabans(){
        return $this->hasMany(Jawaban::class);
    }
}
