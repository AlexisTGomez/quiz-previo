<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saca extends Model
{
    use HasFactory;

    protected $table = 'sacas';

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_codigo');
    }

    public function ejemplar()
    {
        return $this->belongsTo(Ejemplar::class, 'ejemplar_codigo');
    }
}