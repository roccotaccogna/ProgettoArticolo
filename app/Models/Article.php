<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'marca', 'costo', 'foto', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
