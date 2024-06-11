<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    public function ejemplares()
    {
        return $this->belongsToMany(Ejemplar::class, 'sacas', 'usuario_codigo', 'ejemplar_codigo');
    }
}