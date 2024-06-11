<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'libro_codigo');
    }

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'sacas', 'ejemplar_codigo', 'usuario_codigo');
    }
}