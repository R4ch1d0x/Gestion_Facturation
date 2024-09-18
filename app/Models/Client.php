<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_client',
        'type_client',
        'name',
        'email',
        'telephone',
    ];

    public function factures()
        {
        return $this->hasMany(Facture::class);
        }
}
