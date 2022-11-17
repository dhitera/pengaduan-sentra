<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;
    public $table = "aspirasi";

    protected $fillable = [
        "id",
        "sender_id",
        "category_id",
        "status",
        "header",
        "body"
    ];
    
    public function kategori() {
        return $this->belongsTo(Kategori::class, 'category_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
