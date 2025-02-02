<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductosAdminstradorModel extends Model
{
    use HasFactory;
    public function user(){
        return $this->BelongsTo(User::class,'usuario_id');
    }
}
