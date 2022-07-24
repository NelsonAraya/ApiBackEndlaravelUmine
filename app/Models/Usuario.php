<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios';
    protected $fillable = ['id','dv','nombres','apellidop','apellidom','telefono','email','estado','colegio_id'];
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function colegio(){
        return $this->belongsTo(Colegio::class,'colegio_id','id');
    }
}
