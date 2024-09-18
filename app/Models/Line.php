<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;
    protected $fillable = [
        'facture_id',
        'qte',
        'description',
        'taxes',
        'montant_ht',
    ];
    public function line()
    {
        return $this->hasOne(Facture::class);
    }
}
