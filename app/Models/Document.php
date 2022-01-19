<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    

    protected $guarded = ['id'];

    // Relasi to Sales
    public function sale(){
        return $this->belongsTo(Sale::class);
    }

}