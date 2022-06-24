<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $table='medicines';
    protected $fillable = [
        'name',
        'tipo',
        'duracao',
        'data_inicio',
        'id_user'
    ];

    public function usuario(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
