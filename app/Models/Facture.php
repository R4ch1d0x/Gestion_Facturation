<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'code_facture',
        'client_id',
        'prix_hors_taxes',
        'tva',
        'status',
        'echéance',
        'prix_total',

    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
