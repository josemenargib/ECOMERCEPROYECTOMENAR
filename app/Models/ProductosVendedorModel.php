<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductosVendedorModel extends Model
{
    use HasFactory;
    public function user_vendedor(){
        return $this->BelongsTo(User::class,'usuario_id');
    }
}
