<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Soal extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'pertanyaan',
        'kategori',
        'jawaban_a',
        'jawaban_b',
        'jawaban_c',
        'jawaban_d',
        'kunci'
    ];
}
