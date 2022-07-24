<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    use HasFactory;
    protected $table = 'colegios';
    protected $fillable = ['id','nombre','telefono'];

    public function usuarios(){
        return $this->hasMany(Usuario::class,'colegio_id','id')->orderBy('id','ASC');
    }
}
