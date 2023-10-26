<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public function apprenants() {
        return $this->hasMany(Apprenant::class);
    }
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
