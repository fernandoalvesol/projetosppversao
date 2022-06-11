<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;

    protected $fillable = [

        'comentario', 'visivel', 'dtcomentarios'

    ];

    protected $cast = [

        'visible' => 'boolean'

    ];

    public function blacklist(){

        return $this->belongsTo(Blacklist::class);
    }
}
